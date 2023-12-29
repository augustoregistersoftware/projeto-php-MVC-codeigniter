<?php

class Usuarios_usuarios_model extends CI_Model {
    public function index()
    {
        return $this->db->query("SELECT id_login,nome,login,nivel,email,telefone,data_registro,permitido,quantidade_permitida FROM usuarios ORDER BY data_registro DESC LIMIT 5")->result_array();
    }


    public function inserte($user)
    {
        $this->db->insert("usuarios", $user);
    }


}