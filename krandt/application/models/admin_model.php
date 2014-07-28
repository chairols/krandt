<?php

class Admin_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function login($usuario, $password) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        usuarios
                                    WHERE
                                        usuario = '$usuario' AND
                                        password = '$password' AND
                                        idtipodeusuario = 1");
        return $query->row_array();
    }
    
    public function get_id_contenido($seccion) {
        $query = $this->db->query("SELECT idcontenido
                                    FROM
                                        contenidos
                                    WHERE
                                        seccion = '$seccion'");
        return $query->row_array();
    }
    
    public function get_contenido_por_parametros($seccion) {
        $query = $this->db->query("SELECT *
                                    FROM
                                        contenidos
                                    WHERE
                                        seccion = '$seccion'");
        return $query->row_array();
    }
    
    public function update($datos, $id) {
        $idcontenido = array(
            'idcontenido' => $id
        );
        
        $this->db->update('contenidos', $datos, $idcontenido);
    }
}
?>