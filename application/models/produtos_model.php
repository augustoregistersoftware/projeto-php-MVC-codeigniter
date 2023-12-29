<?php

class Produtos_model extends CI_Model {
    public function index()
    {
        return $this->db->query("SELECT id_almoxarifado,cod_aux,cod_barras,descricao,quantidade_estoque,quantidade_min,custo FROM almoxarifado ORDER BY quantidade_estoque DESC LIMIT 5")->result_array();
    }

    public function select_total()
    {
        return $this->db->query("SELECT descricao,quantidade_estoque FROM almoxarifado")->result_array();
    }

    public function select_asteristico()
    {
        return $this->db->query("SELECT
        almoxarifado.id_almoxarifado,
        almoxarifado.cod_aux,
        almoxarifado.cod_barras,
        almoxarifado.descricao,
        almoxarifado.quantidade_estoque,
        almoxarifado.quantidade_min,
        almoxarifado.id_fornecedor,
        localizacao.descricao as nome_localizacao,
        fornecedor.nome as nome_fornecedor,
        almoxarifado.custo
        from almoxarifado
        left JOIN localizacao on almoxarifado.id_localizacao = localizacao.id_localizacao
        left join fornecedor on almoxarifado.id_fornecedor = fornecedor.id_fornecedor")->result_array();
    }

    public function show($idFornecedor)
    {
        $sql = 'SELECT almoxarifado.descricao,
        fornecedor.id_fornecedor,
        fornecedor.nome,
        fornecedor.cpf_cnpj,
        fornecedor.cep,
        fornecedor.endereco,
        fornecedor.numero,
        fornecedor.bairro,
        fornecedor.complemento,
        fornecedor.cidade,
        fornecedor.ie,
        fornecedor.telefone
        FROM   fornecedor
        LEFT JOIN almoxarifado
        ON almoxarifado.id_fornecedor = fornecedor.id_fornecedor 
        WHERE almoxarifado.id_almoxarifado = "' .$idFornecedor. '"';
        return $this->db->query($sql)->result_array();

    }






}