<?php

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'form_validation'
        ));
    }
    
    public function login() {
        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            
        }
        
        $this->load->view('admin/login');
    }
}
?>