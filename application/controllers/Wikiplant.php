<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wikiplant extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Berita','M_Konfigurasi','M_Kberita','M_Katalog','M_Banner']);
        $this->load->library('pagination');
    }

    public function index(){
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

    public function berita_list_home($slug_kategori = false){
        $template = 'frontend/template/template_web';
        $site	= $this->M_Konfigurasi->get();

        if($slug_kategori == true){
            $kategori = $this->M_Kberita->bacaKategori($slug_kategori);
            $listBerita = $this->M_Berita->kategori($kategori->id_kategori);
        }else{
            $listBerita = $this->M_Berita->getBeritaPublish();
        }

		$data	= [
            'title'	=> 'Berita',
            'site'=>$site,       
            'listBerita'=> $listBerita,
            'isi'=> 'frontend/wikiplant/berita'
        ];
		$this->load->view($template,$data); 
    }

    


    public function katalog_list_home(){
        $template = 'frontend/template/template_web';
        $site	= $this->M_Konfigurasi->get();
        
        $config['base_url'] = 'http://localhost/wikiplant/page/index/';
		$config['total_rows'] = $this->M_Katalog->countAll();
		$config['per_page'] = 6;
		$mulai = $this->uri->segment(3);
		$this->pagination->initialize($config);

        $listKatalog = $this->M_Katalog->getKatalogPublish($config['per_page'],$mulai);


		$data	= [
            'title'	=> 'Katalog',
            'site'=>$site,       
            'listKatalog'=> $listKatalog,
            'isi'=> 'frontend/wikiplant/katalog'
        ];
		$this->load->view($template,$data); 
    }

    public function profil(){

    }

    public function hubungi(){

    }
}