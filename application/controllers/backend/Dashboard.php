<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('M_Auth');
        login();
       
    }

    public function index(){
        echo 'Hello World';
    }



   


}