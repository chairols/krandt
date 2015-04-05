<?php

class Tiempo_y_asistencia extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'admin_model'
        ));
    }
    
    public function index() {
        $data['tiempo_y_asistencia'] = $this->admin_model->get_contenido_por_parametros('tiempo-y-asistencia');
        $data['admin_descentralizada'] = $this->admin_model->get_contenido_por_parametros('admin-descentralizada');
        $data['usuarios_administradores'] = $this->admin_model->get_contenido_por_parametros('usuarios-administradores');
        $data['recepcion_de_fichadas'] = $this->admin_model->get_contenido_por_parametros('recepcion-de-fichadas');
        $data['turnos_y_rotaciones'] = $this->admin_model->get_contenido_por_parametros('turnos-y-rotaciones');
        $data['procesamiento_de_fichadas'] = $this->admin_model->get_contenido_por_parametros('procesamiento-de-fichadas');
        $data['horas_extras'] = $this->admin_model->get_contenido_por_parametros('horas-extras');
        $data['calculo_de_horas'] = $this->admin_model->get_contenido_por_parametros('calculo-de-horas');
        $data['administracion_de_novedades'] = $this->admin_model->get_contenido_por_parametros('administracion-de-novedades');
        $data['liquidacion_de_sueldos'] = $this->admin_model->get_contenido_por_parametros('liquidacion-de-sueldos');
        $data['otras_caracteristicas'] = $this->admin_model->get_contenido_por_parametros('otras-caracteristicas');
        
        $this->load->view('tiempo_y_asistencia/index', $data);
    }
}
?>