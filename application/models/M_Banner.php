<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Banner extends CI_Model{
   public function __construct()
   {
      parent:: __construct();
   }

// BANNER
   public function uploadBanner(){
      $config['upload_path']='./assets/uploads/banner/';
      $config['allowed_types']='gif|jpg|png';
      $config['max_size']='1048';
      $this->load->library('upload',$config);
         if($this->upload->do_upload('gambar')){
            unlink(FCPATH.'assets/uploads/banner/'.$this->input->post('gambarLama'));
            return $this->upload->data('file_name');  
         }else{
            return $this->input->post('gambarLama');
         }
   }

   public function listBannerOn(){
      return $this->db->get_where('banner',['status'=> 'ON'])->result();
   }

   public function listBanner(){
      return $this->db->order_by('id_banner','DESC')->get('banner')->result();
   }

   public function tambahBanner($data){
      $this->db->insert('banner',$data);
   }

   public function getIdBanner($id){
      return $this->db->get_where('banner',['id_banner' =>$id])->row();
   }

   public function editBanner($data){
      $this->db->where('id_banner', $this->input->post('id'));
      $this->db->update('banner',$data);
   }

   public function hapusBanner($id){
      $filename=$this->getIdBanner($id);
      unlink(FCPATH.'assets/uploads/banner/'. $filename->gambar);

      $this->db->where(['id_banner'=>$id]);
      $this->db->delete('banner');
   }

}
