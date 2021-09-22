<?php
		
	if (!function_exists('menuAktif')){

		function menuAktif($url = ""){
			$ci =& get_instance();

			if($ci->router->fetch_class() == $url){
				return 'active';
			}
		 }   
		function subMenuAktif($url = ""){
			$ci =& get_instance();

			if($ci->router->fetch_method() == $url){
				return 'active';
			}
		 }   
	}

	if (!function_exists('onlyAdmin')){
		
		function onlyAdmin(){
			$ci =& get_instance();
			$ci->load->Model('M_Auth');
			if($ci->M_Auth->detail($ci->session->userdata('user_id'))->status == 'user'){
				return show_404();
			}
		}
	}
	