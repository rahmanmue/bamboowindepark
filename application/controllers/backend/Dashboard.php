<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        login();
        $this->load->model(['M_Auth','M_Kberita','M_Berita','M_Konfigurasi']); 
       
    }

    public function index(){
        $template = 'backend/template/template_backend';
        $site = $this->M_Konfigurasi->get();
        $data=[
           "title"=>"Dashboard | " .$site->namaweb,
           "isi"=>"backend/dashboard/dashboard",
           "user"=>$this->M_Auth->countAll(),
           "kategori"=>$this->M_Kberita->countAll(),
           "artikel"=>$this->M_Berita->countAll(),
        ];
       
        $this->load->view($template, $data);
     }
}



   


