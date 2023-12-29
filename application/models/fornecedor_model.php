<?php

class Fornecedor_model extends CI_Model {
    public function index()
    {
        return $this->db->query("SELECT * FROM fornecedor ORDER BY nome DESC")->result_array();
    }

 
}