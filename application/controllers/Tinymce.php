<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tinymce extends CI_Controller {
    function tinymce_upload(){    
            $config['upload_path'] = './assets/uploads/files/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] =1048;
            $this->load->library('upload', $config);
            if ( !$this->upload->do_upload('file')) {
                $this->output->set_header('HTTP/1.0 500 Server Error');
                exit;
            } else {
                $file = $this->upload->data();
                $this->output
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode(['location' => base_url().'assets/uploads/files/'.$file['file_name']]))
                    ->_display();
                exit;

            }  
    }

}