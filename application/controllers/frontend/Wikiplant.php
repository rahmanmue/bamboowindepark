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
			'title'=> $site->namaweb,
			'site'=>$site,
            'banner'=>$banner,
			'listBerita'=>$berita,
			'listKatalog'=>$katalog,
			'isi'=>'frontend/wikiplant/home'
		];
		$this->load->view($template,$data);
    }

    public function berita($slug_judul){
        $template = 'frontend/template/template_web';
        $site	= $this->M_Konfigurasi->get();
		$bacaBerita	= $this->M_Berita->bacaBerita($slug_judul);
        $kategori_berita = $this->M_Kberita->list();
		$data	= [
            'title'	=> $bacaBerita->judul,
            'site'=>$site,
            'listKategori'=> $kategori_berita,        
            'berita'=> $bacaBerita,
            'isi'=> 'frontend/wikiplant/singlepage_berita'
        ];
		$this->load->view($template,$data); 

    }

    public function katalog($slug_judul){
        $template = 'frontend/template/template_web';
        $site	= $this->M_Konfigurasi->get();
		$bacaKatalog	= $this->M_Katalog->bacaKatalog($slug_judul);
		$data	= [
            'title'	=> $bacaKatalog->judul,
            'site'=>$site,       
            'katalog'=> $bacaKatalog,
            'isi'=> 'frontend/wikiplant/singlepage_katalog'
        ];
		$this->load->view($template,$data);  
    }

    public function profil(){

    }

    public function hubungi(){

    }
}