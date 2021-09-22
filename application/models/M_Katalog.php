<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_Katalog extends CI_Model{

   public function __construct()
   {
      parent::__construct();
   }

   public function upload(){
      $config['upload_path']='./assets/uploads/katalog/';
      $config['allowed_types']='gif|jpg|png';
      $config['max_size']='2048';
      $this->load->library('upload',$config);
         if($this->upload->do_upload('gambar')){
            unlink(FCPATH.'assets/uploads/katalog/'.$this->input->post('gambarLama'));
            return $this->upload->data('file_name');  
         }else{
            return $this->input->post('gambarLama');
         }
      
   }

   public function list(){
      $this->db->select('*');
      $this->db->from('katalog');
      return $this->db->order_by('id_katalog','DESC')->get()->result();
   }

   public function tambah($data){
        $this->db->insert('katalog',$data);
    }

    public function detail($id){
        return $this->db->get_where('katalog',['id_katalog' =>$id])->row();
    }

    public function edit($data){
        $this->db->where('id_katalog', $this->input->post('id'));
        $this->db->update('katalog',$data);
    }

    public function hapus($id){
        $filename=$this->detail($id);
        unlink(FCPATH.'assets/uploads/katalog/'. $filename->gambar);

        $this->db->where(['id_katalog'=>$id]);
        $this->db->delete('katalog');
    }


//    public function list(){
//       $this->db->select('berita.*, k_berita.kategori');
//       $this->db->from('berita');
//       $this->db->join('k_berita','k_berita.id_kategori = berita.id_kategori');
//       return $this->db->order_by('id_berita','DESC')->get()->result();
//    }

//    public function listById($id){
//       $this->db->select('berita.*, k_artikel.kategori');
//       $this->db->from('artikel');
//       $this->db->join('kategori_artikel','kategori_artikel.id_kategori = artikel.id_kategori');
//       $this->db->order_by('id_artikel','DESC');
//       $this->db->where('artikel.id_auth',$id);
//       return $this->db->get()->result();
//    }

  
    public function getKeyword($keyword = null){
        if($keyword){ 
        $this->db->select('berita.*, k_berita.kategori, k_berita.slug_kategori, auth.nama');
        $this->db->from('berita');
        $this->db->join('k_berita','k_berita.id_kategori=berita.id_kategori','LEFT');
        $this->db->join('auth','auth.id_auth=berita.id_auth','LEFT');
        // $this->db->or_like('k_berita.kategori',$keyword);
        // $this->db->where('berita.status','Publish');
        $this->db->like('judul',$keyword);
        // $this->db->or_like('content',$keyword);
        return $this->db->where('berita.status','publish')->get()->result();      
        }
    } 


   public function listPopuler() {
		$this->db->select('berita.*, visitor.*');
		$this->db->from('berita');
		// Join
		$this->db->join('visitor','visitor.id_berita = berita.id_berita', 'LEFT');
		$this->db->where('berita.status','publish');
		$this->db->order_by('visitor.views','DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
   }

   public function countAll(){
      return $this->db->get('berita')->num_rows();
   }

   public function getBerita($perHalaman,$dataMulai) {
		$this->db->select('berita.*, k_berita.kategori, k_berita.slug_kategori, auth.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('k_berita','k_berita.id_kategori = berita.id_kategori', 'LEFT');
		$this->db->join('auth','auth.id_auth = berita.id_auth','LEFT');
		// End join
		$this->db->where('berita.status','publish');
		$this->db->order_by('id_berita','DESC');
		$this->db->limit($perHalaman,$dataMulai);
		$query = $this->db->get();
		return $query->result();
   }

    //kategori
	public function kategori($id_kategori,$perHalaman,$dataMulai) {
		$this->db->select('berita.*, k_berita.kategori, k_berita.slug_kategori, auth.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('k_berita','k_berita.id_kategori = berita.id_kategori', 'LEFT');
		$this->db->join('auth','auth.id_auth = berita.id_auth','LEFT');
		// End join
        $this->db->where('berita.id_kategori',$id_kategori);
        $this->db->order_by('id_berita','DESC');
        $this->db->limit($perHalaman,$dataMulai);
		$query = $this->db->get();
		return $query->result();
   }

   public function countkategori($id){
      $this->db->select('berita.*');
      $this->db->from('berita');
      $this->db->where('id_kategori',$id);
      return $this->db->get()->num_rows();
   }
   
   //read
	public function readBerita($slug_judul) {
		$this->db->select('berita.*, k_berita.kategori, auth.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('k_berita','k_berita.id_kategori = berita.id_kategori', 'LEFT');
		$this->db->join('auth','auth.id_auth = berita.id_auth','LEFT');
		// End join
		$this->db->where('slug_judul',$slug_judul);
		$query = $this->db->get();
		return $query->row();
   }
   
  
}