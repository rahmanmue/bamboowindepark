<?php

 if(!function_exists('login')){
    function login(){
      $ci=& get_instance();

      if(!$ci->session->userdata('user_id')){
         redirect('login_u');
      }
    }
 }

?>