<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
   public function __construct(){
      parent::__construct();
      login();
      onlySuperAdmin();
      $this->load->model(['M_Auth','M_Konfigurasi']);  
   }

   public function index(){
      $template = 'backend/template/template_backend';
      $data=[
         "title"=>"Konfigurasi",
         "isi"=>"backend/konfigurasi/konfigurasi",
         "action"=> base_url('backend/konfigurasi/konfig'),
         "konfigurasi"=>$this->M_Konfigurasi->get()
      ];

      $this->load->view($template,$data);
   }

   public function konfig(){
         $data=[
            "namaweb"=>$this->input->post('namaweb',true),
            "deskripsi_web"=>$this->input->post('deskripsi_web',true),
            "email"=>$this->input->post('email',true),
            "alamat"=>$this->input->post('alamat',true),
            "no_telp"=>$this->input->post('no_telp',true),
            "fb"=>$this->input->post('fb',true),
            "ig"=>$this->input->post('ig',true),
            "tanggal"=>date('Y-m-d H:i:s'),
            "icon"=>$this->M_Konfigurasi->upload(),
            "id_auth"=>$this->session->userdata('user_id')
        ];

        $this->M_Konfigurasi->edit($data);
        $pesan = [
         'alert'=>'alert alert-success',
         'pesan'=>'Data Berhasil di ubah'
      ];
      $this->session->set_flashdata($pesan);
        redirect('konfigurasi-web');      
   }

}