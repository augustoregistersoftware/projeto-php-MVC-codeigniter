<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{
		$this->load->model("produtos_model");
		$data["produtos"] =  $this->produtos_model->select_asteristico();
		$data["title"] = "Produtos - Criativo";


		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/produtos',$data);
	}

	public function fornecedor($idFornecedor)
	{
		$this->load->model("produtos_model");
		$data["fornecedor_produto"] =  $this->produtos_model->show($idFornecedor);
		$data["fornecedor_produto_descricao"] = $this->produtos_model->show($idFornecedor);
		
		$data["title"] = "Fornecedor - Criativo";

		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/form-fornecedor',$data);
	}





}
