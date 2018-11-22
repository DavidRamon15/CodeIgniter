<?php
    class UsuariosModel extends CI_Model {
        function checkLogin($usuario, $pass) {
            $result = $this->db->query("SELECT id FROM usuarios WHERE nombre = '$usuario' AND password = '$pass'");
            return $result->num_rows();
        }
        function compruebaNombre($nombre) {
            $result = $this->db->query("SELECT id FROM usuarios WHERE nombre = '$nombre'");
            return $result->num_rows();
        }
    }