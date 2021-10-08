<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('M_Auth');
        $this->load->library('password');
        login(); 
    }


    public function index()
    {
      $userAktif = $this->M_Auth->detail($this->session->userdata('user_id'));
      $template = 'backend/template/template_backend';
      $data=[
         'title'=>'Profil',
         'userAktif'=>$userAktif,
         'isi'=>'backend/profil/update_profil',
         'action'=>base_url('myprofil/save')
      ];

      $this->load->view($template,$data);

   }

   public function save()
   {
      $template = 'backend/template/template_backend';
      $this->form_validation->set_rules('email','Email','required|valid_email');
      
      if($this->form_validation->run() == FALSE){   
         $this->load->view($template,$data);
      }else{
         if($this->input->post('password') == ''){
            $dataUser=[
               'nama' => $this->input->post('nama',true),
               'email' => $this->input->post('email',true),
               'password' => $this->input->post('passwordLama',true),
               'tanggal'=>date('Y-m-d')
            ];
         }else if(strlen($this->input->post('password')) > 1 && strlen($this->input->post('password')) < 6 && $this->input->post('password') != ''){
            $this->session->set_flashdata('gagal','Password Anda kurang dari 6 Karakter');	
            redirect('myprofil');
         }else{
            $dataUser=[
               'nama' => $this->input->post('nama',true),
               'email' => $this->input->post('email',true),
               'password' => $this->password->hash($this->input->post('password',true)),
               'tanggal'=>date('Y-m-d')
            ];
         }   
         $this->M_Auth->edit($dataUser);
         $datapesan =  [ 
            'alert'=> 'alert alert-success',
            'pesan' => 'Akun anda berhasil di Edit' 
         ];

         $this->session->set_flashdata($datapesan);
         redirect('dashboard-web');
      }
   }

}