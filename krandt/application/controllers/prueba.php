<?php

class Prueba extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('layout/prueba');
        $this->load->view('layout/footer');
    }
}
?>