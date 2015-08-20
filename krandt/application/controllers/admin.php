<?php

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'form_validation',
            'session'
        ));
        $this->load->model(array(
            'admin_model',
            'usuarios_model',
            'archivos_model'
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
            redirect('/admin/update/historia/', 'refresh');
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
    
    public function usuarios() {
        $session = $this->session->all_userdata();
        if(empty($session['SID'])) {
            redirect('/admin/login/', 'refresh');
        }
        $left['seccion'] = 'usuarios';
        $data['segmento'] = $this->uri->segment(2);
        $data['seccion'] = $left['seccion'];
        $data['contenido']['titulo'] = 'USUARIOS';
        
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $datos = array(
                'password' => $this->input->post('password'),
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'empresa' => $this->input->post('empresa'),
                'email' => $this->input->post('email'),
                'categoria' => $this->input->post('categoria'),
                'idtipodeusuario' => '2'
            );
            
            $this->usuarios_model->set($datos);
        }
        
        $data['usuarios'] = $this->usuarios_model->gets();
        
        $this->load->view('layout/header', $left);
        $this->load->view('layout/menu', $data);
        $this->load->view('admin/usuarios');
        $this->load->view('layout/footer');
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('/admin/login/', 'refresh');
    } 
    
    public function archivos() {
        $session = $this->session->all_userdata();
        if(empty($session['SID'])) {
            redirect('/admin/login/', 'refresh');
        }
        $left['seccion'] = 'usuarios';
        $data['segmento'] = $this->uri->segment(2);
        $data['seccion'] = $left['seccion'];
        $data['contenido']['titulo'] = 'ARCHIVOS';
        
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $config['upload_path'] = "./upload/";
            $config['allowed_types'] = "*";
            $config['max_size'] = "2048";
            $config['encrypt_name'] = true;
            $config['remove_spaces'] = true;
            
            $this->load->library('upload', $config);
            
            if(!$this->upload->do_upload('archivo')) {
                $error = array('error' => $this->upload->display_errors());
                echo "<br><br><br>";
                var_dump($error);
            } else {
                $data = array('upload_data' => $this->upload->data());
                
                $datos = array(
                    'archivo' => $data['upload_data']['file_name'],
                    'idcategoria' => $this->input->post('categoria'),
                    'nombre' => $this->input->post('nombre')
                );
                
                $this->archivos_model->set($datos);

                redirect('/admin/archivos/', 'refresh');
            }
            
            
        }
        
        $data['archivos'] = $this->archivos_model->gets();
        
        $this->load->view('layout/header', $left);
        $this->load->view('layout/menu', $data);
        $this->load->view('admin/archivos');
        $this->load->view('layout/footer');
    }
    
    public function editar_usuario($idusuario = null) {
        $session = $this->session->all_userdata();
        if(empty($session['SID'])) {
            redirect('/admin/login/', 'refresh');
        }
        if($idusuario == null) {
            redirect('/admin/usuarios/', 'refresh');
        }
        $left['seccion'] = 'usuarios';
        $data['segmento'] = $this->uri->segment(2);
        $data['seccion'] = $left['seccion'];
        $data['contenido']['titulo'] = 'USUARIOS';
        
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $datos = array(
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'empresa' => $this->input->post('empresa'),
                'email' => $this->input->post('email'),
                'categoria' => $this->input->post('categoria')
            );
            if($this->input->post('password') != '') {
                $datos['password'] = $this->input->post('password');
            }
            
            $this->usuarios_model->update($datos, $idusuario);
            
            redirect('/admin/usuarios/', 'refresh');
        }
        
        $data['usuario'] = $this->usuarios_model->get_where(array('idusuario' => $idusuario));
        
        $this->load->view('layout/header', $left);
        $this->load->view('layout/menu', $data);
        $this->load->view('admin/editar_usuario');
        $this->load->view('layout/footer');
    }
    
    public function borrar_usuario($idusuario) {
        $session = $this->session->all_userdata();
        if(empty($session['SID'])) {
            redirect('/admin/login/', 'refresh');
        }
        if($idusuario == null) {
            redirect('/admin/usuarios/', 'refresh');
        }
        
        $this->usuarios_model->borrar($idusuario);
        
        redirect('/admin/usuarios/', 'refresh');
    }
}
?>