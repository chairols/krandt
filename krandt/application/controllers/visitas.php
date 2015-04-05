<?php

class Visitas extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'admin_model'
        ));
    }
    
    public function index() {
        $data['visitas'] = $this->admin_model->get_contenido_por_parametros('visitas');
        $data['concepto'] = $this->admin_model->get_contenido_por_parametros('concepto');
        $data['caracteristicas'] = $this->admin_model->get_contenido_por_parametros('caracteristicas');
        $data['registracion'] = $this->admin_model->get_contenido_por_parametros('registracion');
        $data['categoria_de_visitante'] = $this->admin_model->get_contenido_por_parametros('categoria-de-visitante');
        $data['pre_autorizacion'] = $this->admin_model->get_contenido_por_parametros('pre-autorizacion');
        $data['ingreso'] = $this->admin_model->get_contenido_por_parametros('ingreso');
        $data['objetos'] = $this->admin_model->get_contenido_por_parametros('objetos');
        $data['reportes'] = $this->admin_model->get_contenido_por_parametros('reportes');
        
        $this->load->view('frontend/header');
        $this->load->view('visitas/index', $data);
        $this->load->view('frontend/footer');
    }
}
?>