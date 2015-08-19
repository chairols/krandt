<?php

class Archivos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('archivos', $datos);
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        archivos a,
                                        contenidos c
                                    WHERE
                                        a.idcategoria = c.idcontenido");
        return $query->result_array();
    }
    
    public function gets_where($datos) {
        $query = $this->db->get_where('archivos', $datos);
        
        return $query->result_array();
    }
}
?>