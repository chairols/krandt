<?php

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'form_validation',
            'session'
        ));
        $this->load->model(array(
            'admin_model'
        ));
        $this->load->helper(array(
            'url'
        ));
    }
    
    public function index() {
        $this->login();
    }
    
    
    public function login() {
        $session = $this->session->all_userdata();
        
        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $usuario = $this->admin_model->login($this->input->post('usuario'), $this->input->post('password'));
            
            if(!empty($usuario)) {
                $datos = array(
                    'SID' => $usuario['idusuario'],
                    'usuario' => $usuario['usuario'],
                    'idtipodeusuario' => $usuario['idtipodeusuario'],
                    'nombre' => $usuario['nombre'],
                    'apellido' => $usuario['apellido']
                );
                $this->session->set_userdata($datos);
                $session = $this->session->all_userdata();
                //redirect('/home/', 'refresh');
            }
         
        }
        
        if(!empty($session['SID'])) {
            redirect('/admin/update/home/', 'refresh');
        } else {
            $this->load->view('admin/login');
        }
    }
    
    public function update($seccion = null) {
        $session = $this->session->all_userdata();
        if(empty($session['SID'])) {
            redirect('/admin/login/', 'refresh');
        }
        
        $idcontenido = array();
        if($seccion != null) {
            $idcontenido = $this->admin_model->get_id_contenido($seccion);
            if(!empty($idcontenido)) {
                $this->form_validation->set_rules('titulo', 'Titulo', 'required');
                if($this->form_validation->run() == FALSE) {
                    
                } else {
                    
                    
                    $datos = array(
                        'titulo' => $this->input->post('titulo'),
                        'texto' => $this->input->post('texto')
                    );
                    
                    
                    $this->admin_model->update($datos, $idcontenido['idcontenido']);
                    
                }
            }
        }
        
        
        if($seccion == null) {
            $left['seccion'] = 'home';
        } else {
            $left['seccion'] = $seccion;
        }
        
        if(!empty($idcontenido)) {
            $datos['contenido'] = $this->admin_model->get_contenido_por_parametros($left['seccion']);
        } else {
            $datos['contenido']['titulo'] = '';
            $datos['contenido']['texto'] = '';
        }
        
        $datos['segmento'] = $this->uri->segment(3);
        $datos['seccion'] = $left['seccion'];
        
        $t = explode('-', $seccion);
        $titulo = '';
        foreach ($t as $value) {
            $titulo .= strtoupper($value).' ';
        }
        $datos['titulo'] = $titulo;
        
        $this->load->view('layout/header', $datos);
        $this->load->view('layout/menu');
        $this->load->view('admin/update');
        $this->load->view('layout/footer');
        
        
    }
    
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('/admin/login/', 'refresh');
    } 
}
?>