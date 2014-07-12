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
            redirect('/admin/update/who-we-are/', 'refresh');
        } else {
            $this->load->view('admin/login');
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('/admin/login/', 'refresh');
    } 
}
?>