<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
      parent::__construct();		
      login();
      $this->load->Model(['M_Kberita','M_Berita','M_Auth']);
   }

   public function index(){
        $template = 'backend/template/template_backend';
        $berita = $this->M_Berita->list();
      
        $data=[
            'title'=>'List Berita',
            'isi'=>'backend/berita/list_berita',
            'listBerita'=>$berita
        ];

      $this->load->view($template,$data);
   }


   public function tambah(){
      $template = 'backend/template/template_backend';
      $kategori = $this->M_Kberita->list();

      $data =[
         'title'=>'Tambah Berita',
         'isi'=>'backend/berita/form_berita',
         'listKategori'=>$kategori,
         'action'=>base_url('list-berita/tambah'),
         'button'=>'Tambah'
      ];

      $this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[berita.judul]');
     
      if($this->form_validation->run() == FALSE){
         $this->load->view($template,$data); 
      }else{
         $dataArtikel = [
            'judul'=>$this->input->post('judul'),
            'slug_judul'=>url_title(strtolower($this->input->post('judul'))),
            'id_kategori'=>$this->input->post('id_kategori'),
            'id_auth'=>$this->session->userdata('user_id'),
            'penulis'=>$this->M_Auth->detail($this->session->userdata('user_id'))->nama,
            'status'=>$this->input->post('status'),
            'content'=>$this->input->post('content'),
            'tanggal_post'=>date('Y-m-d H:i:s'),
            'gambar'=> $this->M_Berita->upload()
         ];

     
         $this->M_Berita->tambah($dataArtikel);
            $pesan = [
               'alert'=>'alert alert-success',
               'pesan'=>'Data Berhasil ditambahkan'
            ];
            $this->session->set_flashdata($pesan);
            redirect('list-berita'); 
      }


   }


   public function edit(){
      $template = 'backend/template/template_backend';
      $berita = $this->M_Berita->detail($this->input->post('id'));
      $kategori = $this->M_Kberita->list();

      $data=[  
               'title'=>'Edit Berita',
               'isi'=>'backend/berita/form_berita',
               'action'=>base_url('list-berita/edit'),
               'button'=>'Edit',
               'listKategori'=>$kategori,
               'berita'=>$berita             
            ];

      $this->form_validation->set_rules('judul','Judul','required');

      if($this->form_validation->run() == FALSE){
         $this->load->view($template, $data);
      }else{
         $dataArtikel = ['judul'=>$this->input->post('judul'),
                        'slug_judul'=>url_title(strtolower($this->input->post('judul'))),
                        'id_kategori'=>$this->input->post('id_kategori'),
                        'id_auth'=>$this->session->userdata('user_id'),
                        'penulis'=>$this->M_Auth->detail($this->session->userdata('user_id'))->nama,
                        'status'=>$this->input->post('status',true),
                        'content'=>$this->input->post('content',true),
                        'tanggal_post'=>date('Y-m-d H:i:s'),
                        'gambar'=> $this->M_Berita->upload()
                     ];
            $this->M_Berita->edit($dataArtikel);
               $pesan = [
                  'alert'=>'alert alert-success',
                  'pesan'=>'Data Berhasil di ubah'
               ];
               $this->session->set_flashdata($pesan);
               redirect('list-berita');
         }      
   }
      
   public function hapus(){
      $this->M_Berita->hapus($this->input->post('id'));
      $pesan = [
         'alert'=>'alert alert-danger',
         'pesan'=>'Data Berhasil dihapus'
      ];
      $this->session->set_flashdata($pesan);
      redirect('list-berita');
   }

   

   

}