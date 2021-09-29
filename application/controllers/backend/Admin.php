<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      login();
      onlySuperAdmin();
      $this->load->library('password');
      $this->load->Model('M_Auth');
       
   }


   public function index(){
      $template = 'backend/template/template_backend';
      $userAktif = $this->M_Auth->detail($this->session->userdata('user_id'));
      $data=[
         'title'=>'Administrasi',
         'listUser'=>$this->M_Auth->list(),
         'isi'=>'backend/admin/list_user',
         'userAktif'=> $userAktif
      ];

      $this->load->view( $template , $data);
   }

   public function edit(){
      $template = 'backend/template/template_backend';
      $userAktif = $this->M_Auth->detail($this->session->userdata('user_id'));

      $data=[
         'title'=>'Edit User',
         'user'=>$this->M_Auth->detail($this->input->post('id')),
         'isi'=>'backend/admin/edit_user',
         'action'=>base_url('list-admin/edit'),
         'userAktif'=>$userAktif
      ];
     
     
      $this->form_validation->set_rules('email','Email','required|valid_email');
     
      if($this->form_validation->run()==FALSE){   
         $this->load->view($template,$data);
      }else{
         if($this->input->post('password') == ''){
            $dataUser=[
               'nama' => $this->input->post('nama',true),
               'email' => $this->input->post('email',true),
               'password' => $this->input->post('passwordLama',true),
               'tanggal'=>date('Y-m-d')
            ];
         }else if(strlen($this->input->post('password')) > 1 && strlen($this->input->post('password')) < 6){
            $this->session->set_flashdata('gagal','Password Anda kurang dari 6 Karakter');	
            redirect('list-admin/edit');
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
            'alertAdmin'=> 'alert alert-success',
            'pesan' => 'Akun anda berhasil di Edit' 
         ];
         $this->session->set_flashdata($datapesan);
         redirect('list-admin');
      }
   
   }

   public function hapus(){

      $this->M_Auth->hapus($this->input->post('id'));
      $datapesan =  [ 
         'alertAdmin'=> 'alert alert-success',
         'pesan' => 'Akun berhasil di hapus' 
      ];
      $this->session->set_flashdata($datapesan);
      redirect('list-admin');
   }


}