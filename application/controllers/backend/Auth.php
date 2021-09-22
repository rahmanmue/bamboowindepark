<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('password');
        $this->load->Model('M_Auth');
    }
	
	public function login()
	{
      $template = 'backend/template/template_auth';
		if($this->session->userdata('user_id')){
            redirect('dashboard');
         }
   
   
         $this->form_validation->set_rules('email','Email','required|valid_email');
         $this->form_validation->set_rules('password', 'password', 'required|min_length[6]');
   
         if($this->form_validation->run() == FALSE){
            $data=[  
                'title' =>'Login',
                'isi'   =>'backend/auth/login',
                    //  "site"=>$this->M_Konfigurasi->get()
            ];
            $this->load->view($template,$data);
         }else{
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            // karena Pengecekan Jadi buat Variabel baru buat session
            if($user = $this->M_Auth->login($email, $password)){
             $dataLogin = [
                'user_id'    =>  $user->id_auth,
                'nama'		  =>  $user->nama
            ];

           $this->session->set_userdata($dataLogin);
            //pindahkan ke halaman home
            redirect('dashboard');

            }else{
               $dataPesan = [
                    'alert' => 'alert-danger',
                    'pesan' => 'Email atau Password yang anda masukan salah'
                ];
   
               $this->session->set_flashdata($dataPesan);
               //tampilkan halaman login
               redirect('auth/login');
            }
   
         }
	}

    public function register()
    {
        $template = 'backend/template/template_auth';
        if($this->session->userdata('user_id')){
           redirect('dashboard');
         }
    
         $this->form_validation->set_rules('nama','Nama','required');
         $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[auth.email]');
         $this->form_validation->set_rules('password', 'password', 'required|min_length[6]');
         $this->form_validation->set_rules('konfirmasi', 'Konfirmasi Password', 'required|matches[password]');
   
         if($this->form_validation->run() == FALSE){
            $data=[
               'title'  =>  'Register',
               'isi'    =>  'backend/auth/register',
            //    "site"=>$this->M_Konfigurasi->get()
            ];
            $this->load->view($template,$data);
         }else{
            $data =[
               'nama' => $this->input->post('nama',true),
               'email' => $this->input->post('email',true),
               'password' => $this->password->hash($this->input->post('password',true)),
               'tanggal'=>date('Y-m-d'),
               'status'=>'user'
            ];

            $this->M_Auth->tambah($data);
            redirect('auth/login');
           
         }  
    }

    public function logout()
    {
        $dataLogin = ['user_id','nama'];
        $this->session->unset_userdata($dataLogin);
        redirect('auth/login');
        
    }

   


}


    



