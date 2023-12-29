<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model("solicitacao_model");
		$data["solicitacao_solicitacao"] =  $this->solicitacao_model->index();
		$data["title"] = "Solicitações - Criativo";


		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/solicitacoes',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);
	}
}
