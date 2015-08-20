<?php

class Historia extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'admin_model'
        ));
        $this->load->library(array(
            'session'
        ));
    }
    
    public function index() {
        $data['historia'] = $this->admin_model->get_contenido_por_parametros('historia');
        $data['session'] = $this->session->all_userdata();
        
        $this->load->view('historia/index', $data);
    }
}

?>