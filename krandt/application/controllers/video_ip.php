<?php

class Video_ip extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'admin_model'
        ));
    }
    
    public function index() {
        $data['video_ip'] = $this->admin_model->get_contenido_por_parametros('video-ip');
        
        $this->load->view('video_ip/index', $data);
    }
}
?>