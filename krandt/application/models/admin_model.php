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
}
?>