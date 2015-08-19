<?php

class Usuarios_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($datos) {
        $this->db->insert('usuarios', $datos);
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        usuarios u,
                                        contenidos c
                                    WHERE
                                        u.categoria = c.idcontenido AND
                                        u.idtipodeusuario = '2'");
        return $query->result_array();
    }
    
    public function login($usuario, $password) { 
        $query = $this->db->query("SELECT *
                                    FROM
                                        usuarios
                                    WHERE
                                        email = '$usuario' AND
                                        password = '$password' AND
                                        idtipodeusuario = '2'");
        return $query->row_array();
    }
    
    public function get_where($where) {
        $query = $this->db->get_where('usuarios', $where);
        
        return $query->row_array();
    }
    
    public function update($datos, $idusuario) {
        $id = array('idusuario' => $idusuario);
        $this->db->update('usuarios', $datos, $id);
    }
}
?>