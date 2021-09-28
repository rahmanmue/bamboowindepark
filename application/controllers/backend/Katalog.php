<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

	public function __construct()
	{
      parent::__construct();		
      login();
      $this->load->Model(['M_Katalog','M_Auth']);
   }

   public function index(){
        $template = 'backend/template/template_backend';
        $katalog = $this->M_Katalog->list();
      
        $data=[
            'title'=>'List Berita',
            'isi'=>'backend/katalog/list_katalog',
            'listKatalog'=>$katalog
        ];

      $this->load->view($template,$data);
   }


   public function tambah(){
      $template = 'backend/template/template_backend';
    //   $kategori = $this->M_Kberita->list();

      $data =[
         'title'=>'Tambah Katalog',
         'isi'=>'backend/katalog/form_katalog',
         'action'=>base_url('list-katalog/tambah'),
         'button'=>'Tambah'
         //  'listKategori'=>$kategori,
      ];

      $this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[katalog.judul]');
     
      if($this->form_validation->run() == FALSE){
         $this->load->view($template,$data); 
      }else{
         $dataArtikel = [
            'judul'=>$this->input->post('judul'),
            'slug_judul'=>url_title(strtolower($this->input->post('judul'))),
            // 'id_kategori'=>$this->input->post('id_kategori'),
            'id_auth'=>$this->session->userdata('user_id'),
            'penulis'=>$this->M_Auth->detail($this->session->userdata('user_id'))->nama,
            'status'=>$this->input->post('status'),
            'klasifikasi'=>$this->input->post('klasifikasi'),
            'deskripsi'=>$this->input->post('deskripsi'),
            'manfaat'=>$this->input->post('manfaat'),
            'tanggal_post'=>date('Y-m-d H:i:s'),
            'gambar'=> $this->M_Katalog->upload()
         ];

     
         $this->M_Katalog->tambah($dataArtikel);
            $pesan = [
               'alert'=>'alert alert-success',
               'pesan'=>'Data Berhasil ditambahkan'
            ];
            $this->session->set_flashdata($pesan);
            redirect('list-katalog'); 
      }


   }


   public function edit(){
      $template = 'backend/template/template_backend';
      $katalog = $this->M_Katalog->detail($this->input->post('id'));
    //   $kategori = $this->M_Kberita->list();

      $data=[  
               'title'=>'Edit Berita',
               'isi'=>'backend/katalog/form_katalog',
               'action'=>base_url('list-katalog/edit'),
               'button'=>'Edit',
               'katalog'=>$katalog             
               // 'listKategori'=>$kategori,
            ];

      $this->form_validation->set_rules('judul','Judul','required');

      if($this->form_validation->run() == FALSE){
         $this->load->view($template, $data);
      }else{
         $dataArtikel = [
                'judul'=>$this->input->post('judul'),
                'slug_judul'=>url_title(strtolower($this->input->post('judul'))),
                // 'id_kategori'=>$this->input->post('id_kategori'),
                'id_auth'=>$this->session->userdata('user_id'),
                'penulis'=>$this->M_Auth->detail($this->session->userdata('user_id'))->nama,
                'status'=>$this->input->post('status'),
                'klasifikasi'=>$this->input->post('klasifikasi'),
                'deskripsi'=>$this->input->post('deskripsi'),
                'manfaat'=>$this->input->post('manfaat'),
                'tanggal_post'=>date('Y-m-d H:i:s'),
                'gambar'=> $this->M_Katalog->upload()
            ];

        $this->M_Katalog->edit($dataArtikel);
            $pesan = [
                'alert'=>'alert alert-success',
                'pesan'=>'Data Berhasil di ubah'
            ];
            $this->session->set_flashdata($pesan);
            redirect('list-katalog');
        }      
   }
      
   public function hapus(){
      $this->M_Katalog->hapus($this->input->post('id'));
      $pesan = [
         'alert'=>'alert alert-success',
         'pesan'=>'Data Berhasil dihapus'
      ];
      $this->session->set_flashdata($pesan);
      redirect('list-katalog');
   }

   

   

}