<?php

class Downloads extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'form_validation'
        ));
        $this->load->model(array(
            'usuarios_model',
            'archivos_model'
        ));
        $this->load->helper(array(
            'url'
        ));
    }
    
    public function index() {
        $session = $this->session->all_userdata();
        
        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE) {
        } else {
            $usuario = $this->usuarios_model->login($this->input->post('usuario'), $this->input->post('password'));
            
            if(!empty($usuario)) {
                $datos = array(
                    'SID' => $usuario['idusuario'],
                    'usuario' => $usuario['email'],
                    'idtipodeusuario' => $usuario['idtipodeusuario'],
                    'nombre' => $usuario['nombre'],
                    'apellido' => $usuario['apellido'],
                    'idcategoria' => $usuario['categoria']
                );
                $this->session->set_userdata($datos);
                $session = $this->session->all_userdata();
                
                redirect('downloads/archivos', 'refresh');
            }
        }
        
        $this->load->view('downloads/index');
    }
    
    public function archivos() {
        $session = $this->session->all_userdata();
        if($session['idtipodeusuario'] != '2') {
            show_404();
        }
        $data['session'] = $session;
        
        $datos = array(
            'idcategoria' => $session['idcategoria']
        );
        $data['archivos'] = $this->archivos_model->gets_where($datos);
        
        $this->load->view('downloads/archivos', $data);
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('/downloads/', 'refresh');
    } 
}

?>
