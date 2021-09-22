<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kberita extends CI_Model{
   public function __construct()
   {
      parent:: __construct();
   }

   public function list(){
     return $this->db->order_by('urutan','DESC')->limit(10)->get('k_berita')->result();
   }

   public function getAll(){
      return $this->db->order_by('urutan','DESC')->get('k_berita')->result();
   }

   public function countAll(){
      return $this->db->get('k_berita')->num_rows();
   }

   public function tambahKategori($data){
    $this->db->insert('k_berita',$data);
    }
    
    public function getKategoriById($id){
        return $this->db->get_where('k_berita',['id_kategori'=>$id])->row_array();
    }
        
    public function editKategori($data){
        $this->db->where('id_kategori', $this->input->post('id'));
        $this->db->update('k_berita',$data);   
    }
    
    public function hapusKategori($id){
        $filename = $this->getKategoriById($id);
    //   unlink( FCPATH. "assets/uploads/".$filename['gambar']);
        $this->db->delete('k_berita',['id_kategori'=>$id]);
    }
    
    
    public function readKategori($slug_kategori) {
        return $this->db->order_by('urutan','ASC')->get_where('k_berita',['slug_kategori'=>$slug_kategori])->row();
    }
 
//    public function upload(){
//       $config['upload_path']          = './assets/uploads/';
//       $config['allowed_types']        = 'gif|jpg|png';
//       $config['max_size']             = '1048';
//       $this->load->library('upload',$config);
//          if($this->upload->do_upload('gambar')){
//             $filename = $this->input->post('gambarLama'); 
//             unlink( FCPATH. "assets/uploads/".$filename);
//             return $this->upload->data('file_name');
//          }else{
//             return $this->input->post('gambarLama');
//          }
      
//    }
   
   
   
}
   