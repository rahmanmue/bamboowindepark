<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model{
   public function __construct()
   {
      parent:: __construct();
   }

   public function getAll(){
      return $this->db->get('auth')->result();
   }

   public function countAll(){
      return $this->db->get('auth')->num_rows();
   }

   public function tambah($data){
      $this->db->insert('auth',$data);
   }

   public function login($email,$password){
      $query = $this->db->select('*')
                        ->where('email',$email)
                        ->get('auth');
      $row=$query->row();

      if($this->password->verify($password, $row->password)){
         return $row;
      }else{
         return false;
      }

   }

   public function detail($id){
      return $this->db->get_where('auth',['id_auth'=>$id])->row();
   }

   public function list(){
      return $this->db->get('auth')->result();
   }
   
   public function edit($data){
      $this->db->where('id_auth', $this->input->post('id',true));
      $this->db->update('auth',$data);
   }
   
   public function hapus($id){
      $this->db->delete('auth',['id_auth'=>$id]);
   }
}