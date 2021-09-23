<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Konfigurasi extends CI_Model{
   public function __construct()
   {
      parent:: __construct();
   }

   public function get(){
      return $this->db->get('konfigurasi')->row();
   }


   public function upload(){
      $config['upload_path']          = './assets/uploads/logo/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = '1048';
      $this->load->library('upload',$config);
         if($this->upload->do_upload('icon')){
            $filename = $this->input->post('gambarLama'); 
            unlink( FCPATH. "assets/uploads/logo/".$filename);
            return $this->upload->data('file_name');
         }else{
           return $this->input->post('gambarLama');
         }
   }

   public function edit($data){
      $this->db->where('id_konfigurasi',$this->input->post('id_konfigurasi'));
      $this->db->update('konfigurasi',$data);
   }
}