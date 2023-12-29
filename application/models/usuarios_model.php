<?php

class Usuarios_model extends CI_Model {
    public function index()
    {
        return $this->db->query("SELECT id_login,nome,login,nivel,email,telefone,data_registro,permitido,quantidade_permitida FROM usuarios ORDER BY data_registro DESC LIMIT 5")->result_array();
    }

    public function select_grafico()
    {
        return $this->db->query("SELECT nome,pedidos FROM usuarios")->result_array();
    }

    public function inativa($id_login)
    {
        $sql = 'UPDATE usuarios SET permitido = 0 WHERE id_login = "' .$id_login. '"';
        return $this->db->query($sql);
        
    }

    public function ativa($id_login)
    {
        $sql = 'UPDATE usuarios SET permitido = 1 WHERE id_login = "' .$id_login. '"';
        return $this->db->query($sql);
        
    }




}