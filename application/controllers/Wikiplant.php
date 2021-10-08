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

    public function berita_list_home(){
        $template = 'frontend/template/template_web';
        $site	= $this->M_Konfigurasi->get();
      
        // $config['base_url'] = 'http://localhost/wikiplant/page-berita/index/';
        $config['base_url'] = base_url('page-berita/index/');
        $mulai = $this->uri->segment(3);
		$config['total_rows'] = $this->M_Berita->countAll();
		$config['per_page'] = 6;
		$this->pagination->initialize($config);
       
        $listBerita = $this->M_Berita->getBeritaPublish($config['per_page'],$mulai);
        
		$data	= [
            'title'	=> 'Berita',
            'site'=>$site,       
            'listBerita'=> $listBerita,
            'isi'=> 'frontend/wikiplant/berita'
        ];
		$this->load->view($template,$data); 
    }

    public function page_kategori_berita($slug_kategori) {
        $template   = 'frontend/template/template_web';
		$site		= $this->M_Konfigurasi->get();
		$kategori	= $this->M_Kberita->bacaKategori($slug_kategori);

		// $config['base_url'] = 'http://localhost/wikiplant/page-kategori-berita/'.$slug_kategori.'/';
		$config['base_url'] = base_url('page-kategori-berita/'.$slug_kategori.'/');
		$config['total_rows'] = $this->M_Berita->countkategori($kategori->id_kategori);
		$config['per_page'] = 6;
		$mulai =$this->uri->segment(3);
		$this->pagination->initialize($config);

      	$listBerita = $this->M_Berita->kategori($kategori->id_kategori,$config['per_page'],$mulai);
    	
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
        
        
        $config['base_url'] = base_url('page-katalog/index/');
		$config['total_rows'] = $this->M_Katalog->countAll();
		$config['per_page'] = 6;
		$mulai = $this->uri->segment(3);
		$this->pagination->initialize($config);

        if($this->input->post('keyword', true) && $this->input->post('keyword', true) != ' '){
            $listKatalog = $this->M_Katalog->getKeyword($this->input->post('keyword', true),$config['per_page'],$mulai);
        }else{
            $listKatalog = $this->M_Katalog->getKatalogPublish($config['per_page'],$mulai);
        }

        
		$data	= [
            'title'	=> 'Katalog',
            'site'=>$site,       
            'listKatalog'=> $listKatalog,
            'isi'=> 'frontend/wikiplant/katalog'
        ];
		$this->load->view($template,$data); 
    }

    public function profil(){
        $template = 'frontend/template/template_web';
        $site = $this->M_Konfigurasi->get();

        $data=[
			'title'=>'Profil',
			'site'=>$site,
			'isi'=>'frontend/wikiplant/profil'
		];
		$this->load->view($template,$data);

    }

    public function hubungi(){
        $template = 'frontend/template/template_hubungi';
        $site = $this->M_Konfigurasi->get();
        

        $data=[
			'title'=>'Hubungi',
			'site'=>$site,
			'isi'=>'frontend/wikiplant/hubungi'
		];
		$this->load->view($template,$data);

    }

   
}