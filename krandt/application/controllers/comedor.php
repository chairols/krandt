<?php

class Comedor extends CI_Controller {
    
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
        $data['comedor'] = $this->admin_model->get_contenido_por_parametros('comedor');
        $data['usuarios'] = $this->admin_model->get_contenido_por_parametros('usuarios');
        $data['menus'] = $this->admin_model->get_contenido_por_parametros('menus');
        $data['convenios'] = $this->admin_model->get_contenido_por_parametros('convenios');
        $data['habilitacion_de_consumo'] = $this->admin_model->get_contenido_por_parametros('habilitacion-de-consumo');
        $data['fichadas_de_consumo'] = $this->admin_model->get_contenido_por_parametros('fichadas-de-consumo');
        $data['alta_manual_de_consumos'] = $this->admin_model->get_contenido_por_parametros('alta-manual-de-consumos');
        $data['liquidacion_sueldos'] = $this->admin_model->get_contenido_por_parametros('liquidacion-sueldos');
        $data['otras_caracteristicas'] = $this->admin_model->get_contenido_por_parametros('otras--caracteristicas');
        $data['session'] = $this->session->all_userdata();
        
        $this->load->view('frontend/header', $data);
        $this->load->view('comedor/index');
        $this->load->view('frontend/footer');
    }
}
?>