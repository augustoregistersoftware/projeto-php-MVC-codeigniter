<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model("produtos_model");
		$this->load->model("usuarios_model");
		$this->load->model("solicitacao_model");
		$data["usuarios"] =  $this->usuarios_model->index();
		$data["produtos"] =  $this->produtos_model->index();
		$data["solicitacao"] =  $this->solicitacao_model->index();
		$data["produtos_grafico"] = $this->produtos_model->select_total();
		$data["title"] = "Dashboard - Criativo";


		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/dashboard',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);
	}

	public function solicitacoes()
	{
		$this->load->model("produtos_model");
		$this->load->model("usuarios_model");
		$this->load->model("solicitacao_model");
		$data["usuarios"] =  $this->usuarios_model->index();
		$data["produtos"] =  $this->produtos_model->index();
		$data["solicitacao"] =  $this->solicitacao_model->index();
		$data["usuarios_grafico"] = $this->usuarios_model->select_grafico();
		$data["title"] = "Dashboard - Criativo";


		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/dashboard_solicitacoes',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);
	}
}
