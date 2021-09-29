<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wikiplant extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Berita','M_Konfigurasi','M_Kberita','M_Katalog','M_Banner']);
    }

    public function home(){
        $template = 'frontend/template/template_web';
        $banner=$this->M_Banner->listBannerOn();
        $berita = $this->M_Berita->getLimitThree();
        $katalog = $this->M_Katalog->getLimitSix();
        $site = $this->M_Konfigurasi->get();

        $data=[
			'title'=> $site->namaweb | 'Home',
			'site'=>$site,
            'banner'=>$banner,
			'listBerita'=>$berita,
			'listKatalog'=>$katalog,
			'isi'=>'frontend/wikiplant/home'
		];
		$this->load->view($template,$data);
    }

    public function katalog(){

    }

    public function berita(){

    }

    public function profil(){

    }

    public function hubungi(){

    }
}