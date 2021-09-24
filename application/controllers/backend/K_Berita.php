<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Berita extends CI_Controller {

   public function __construct(){
      parent::__construct();
      login();
      onlySuperAdmin();
      $this->load->model(['M_Kberita','M_Auth',]);
      
   }

   public function index(){
       $template= 'backend/template/template_backend';
        $data=[
            'title'=>'Kategori Berita',
            'listKategori'=>$this->M_Kberita->list(),
            'isi'=>'backend/berita/list_kberita',
        ];

      $this->load->view($template,$data);
   }
   
   
   public function tambah()
   {
        $template= 'backend/template/template_backend';
        $this->form_validation->set_rules('kategori','Kategori','required|is_unique[k_berita.kategori]');
        $this->form_validation->set_rules('urutan', 'Urutan', 'is_unique[k_berita.urutan]');

        if($this->form_validation->run()==FALSE){
            $data=[
                'title'=>'Tambah Kategori Berita',
                'isi'=>'backend/berita/form_kberita',
                'action'=>base_url('kategori-berita/tambah'),
                'button'=>'Tambah'
            ];
            $this->load->view($template, $data);
        }else{
            $dataKategori=[
                'kategori'=>$this->input->post('kategori',true),
                'urutan'=>$this->input->post('urutan',true),
                'slug_kategori'=>url_title(strtolower($this->input->post('kategori',true),'dash',true))
                // 'gambar'=>$this->M_Kategori->upload()
            ];
     
        $this->M_Kberita->tambahKategori($dataKategori);
                $pesan = [
                'alert'=>'alert alert-success',
                'pesan'=>'Data Berhasil ditambahkan'
                ];
            $this->session->set_flashdata($pesan);
            redirect('kategori-berita/berita');  
        }
   }

   public function edit()
   {
      $template= 'backend/template/template_backend';
      $this->form_validation->set_rules('kategori','Kategori','required');
      

      if($this->form_validation->run()== FALSE){
         $data=[
            'title'=>'Edit Kategori',
            'kategori'=>$this->M_Kberita->getKategoriById($this->input->post('id')),
            'isi'=>'backend/berita/form_kberita',
            'action'=>base_url('kategori-berita/edit'),
            'button'=>'Edit'
         ];
         $this->load->view($template,$data);
      }else{
         $dataKategori=[
            'kategori'=>$this->input->post('kategori',true),
            'urutan'=>$this->input->post('urutan',true),
            'slug_kategori'=>url_title(strtolower($this->input->post('kategori',true),'dash',true))
           
         ];

        $this->M_Kberita->editKategori($dataKategori);
         $pesan = [
            'alert'=>'alert alert-success',
            'pesan'=>'Data Berhasil di ubah'
         ];
         $this->session->set_flashdata($pesan);
         redirect('kategori-berita');     
      }
   }

   public function hapus(){
      $this->M_Kberita->hapusKategori($this->input->post('id'));
      $pesan = [
         'alert'=>'alert alert-danger',
         'pesan'=>'Data Berhasil di hapus'
      ];
      $this->session->set_flashdata($pesan);
       
      redirect('kategori-berita');
   }
}



