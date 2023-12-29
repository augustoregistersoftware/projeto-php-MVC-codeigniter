<?php

class Solicitacao_model extends CI_Model {
    public function index()
    {
        return $this->db->query("SELECT descricao,data_requisicao,data_resposta,status,total FROM solicitacao ORDER BY data_requisicao DESC LIMIT 5")->result_array();
    }





}