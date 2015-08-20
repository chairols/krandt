<?php

class Control_de_accesos extends CI_Controller {
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
        $data['control_de_accesos'] = $this->admin_model->get_contenido_por_parametros('control-de-accesos');
        $data['acceso_peatonal'] = $this->admin_model->get_contenido_por_parametros('acceso-peatonal');
        $data['estacionamiento'] = $this->admin_model->get_contenido_por_parametros('estacionamiento');
        $data['acceso_vehicular'] = $this->admin_model->get_contenido_por_parametros('acceso-vehicular');
        $data['base_de_datos'] = $this->admin_model->get_contenido_por_parametros('base-de-datos');
        $data['session'] = $this->session->all_userdata();
        
        $this->load->view('frontend/header', $data);
        $this->load->view('control_de_accesos/index');
        $this->load->view('frontend/footer');
    }
}
?>