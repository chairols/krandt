<?php

class Contacto extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session'
        ));
    }
    
    public function index() {
        $data['session'] = $this->session->all_userdata();
        
        $this->load->view('contacto/index', $data);
    }
}
?>