<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      login();
      onlySuperAdmin();
      $this->load->Model('M_Banner');
   }

   public function index(){
    $template = 'backend/template/template_backend';
    $listBanner = $this->M_Banner->listBanner();
    $data=[
       'title'=>'Banner',
       'listBanner'=> $listBanner,
       'isi'=>'backend/gambar/list_banner'
    ];

    $this->load->view($template,$data);

 }

 public function tambah(){
    $template = 'backend/template/template_backend';
    $this->form_validation->set_rules('status', 'Status', 'required');

    if($this->form_validation->run()==FALSE){
       $data=[
          'title'=>'Tambah Banner',
          'isi'=>'backend/gambar/form_banner',
          'action'=>base_url('list-banner/tambah'),
          'button'=>'Tambah'
       ];
       $this->load->view($template, $data);
    }else{
       $data=[
          'banner'=>$this->input->post('banner',true),
          'status'=>$this->input->post('status',true),
          'gambar'=>$this->M_Banner->uploadBanner()
       ];

       $this->M_Banner->tambahBanner($data);
       $pesan = [
          'alert'=>'alert alert-success',
          'pesan'=>'Data Berhasil ditambahkan'
       ];
       $this->session->set_flashdata($pesan);
       redirect('list-banner');  
    }
    

 }

 public function edit(){
    $template = 'backend/template/template_backend';
    $this->form_validation->set_rules('banner','Banner','required');
    $this->form_validation->set_rules('status', 'Status', 'required');

    if($this->form_validation->run()==FALSE){
       $data=[
          'title'=>'Edit Banner',
          'isi'=>'backend/gambar/form_banner',
          'banner'=>$this->M_Banner->getIdBanner($this->input->post('id')),
          'action'=>base_url('list-banner/edit'),
          'button'=>'Edit'
       ];
       $this->load->view($template, $data);
    }else{
       $data=[
          'banner'=>$this->input->post('banner',true),
          'status'=>$this->input->post('status',true),
          'gambar'=>$this->M_Banner->uploadBanner()
       ];
       $this->M_Banner->editBanner($data);
       $pesan = [
          'alert'=>'alert alert-success',
          'pesan'=>'Data Berhasil di ubah'
       ];
       $this->session->set_flashdata($pesan);
       redirect('list-banner');     
    }

 }

 public function hapus(){
    $this->M_Banner->hapusBanner($this->input->post('id'));
    $pesan = [
       'alert'=>'alert alert-danger',
       'pesan'=>'Data Berhasil dihapus'
    ];
    $this->session->set_flashdata($pesan);
    redirect('list-banner');

 }

 public function kumpulanGambar(){
    $template = 'backend/template/template_backend';
    $homepage = file_get_contents(base_url('assets/uploads/files/'));
    foreach($homepage as $home){
        echo $home;
    }
   //  $this->load->view($template,$data);
    }
}