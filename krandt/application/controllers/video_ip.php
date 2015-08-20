<?php

class Video_ip extends CI_Controller {
    
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
        $data['video_ip'] = $this->admin_model->get_contenido_por_parametros('video-ip');
        $data['session'] = $this->session->all_userdata();
        
        $this->load->view('frontend/header', $data);
        $this->load->view('video_ip/index');
        $this->load->view('frontend/footer');
    }
}
?>