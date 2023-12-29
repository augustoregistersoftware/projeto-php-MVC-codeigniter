<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedor extends CI_Controller {

	public function index()
	{
		$this->load->model("fornecedor_model");
		$data["fornecedor"] =  $this->fornecedor_model->index();
		$data["title"] = "Fornecedor - Criativo";


		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/fornecedor',$data);
	}

    public function new_fornecedor()
	{
		$data["title"] = "Cadastro de Fornecedores";

		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/cadastro_fornecedor',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);
	}



}
