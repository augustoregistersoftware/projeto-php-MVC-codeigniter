<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index()
	{
		$this->load->model("usuarios_usuarios_model");
		$data["usuarios_usuarios"] =  $this->usuarios_usuarios_model->index();
		$data["title"] = "Usuarios - Criativo";

		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/usuarios',$data);
	}

	public function new_usuario()
	{
		$data["title"] = "Cadastro de Usuarios";

		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/cadastro_usuarios',$data);
		$this->load->view('templates/footer',$data);
		$this->load->view('templates/js',$data);
	}

	public function inativa($id_login){
		$this->load->model("usuarios_model");
		$data["inativa"] =  $this->usuarios_model->inativa($id_login);
		$data["title"] = "Usuarios - Criativo";

		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/usuarios',$data);
		redirect("usuarios");
	}

	public function ativa($id_login){
		$this->load->model("usuarios_model");
		$data["inativa"] =  $this->usuarios_model->ativa($id_login);
		$data["title"] = "Usuarios - Criativo";

		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top',$data);
		$this->load->view('pages/usuarios',$data);
		redirect("usuarios");
	}

	public function inserte()
	{
		$senha_para_crip = 'bNzLsJB3/H$dasrg654fg';
		$criptografia = openssl_encrypt($_POST["senha"], "AES-128-ECB", $senha_para_crip);
		$user['nome'] = $_POST['nome'];
		$user['login'] = $_POST['login'];
		$user['senha'] = $criptografia;
		$user['email'] = $_POST['email'];
		$user['telefone'] = $_POST['telefone'];
		$user['permitido'] = $_POST['permitido'];
		$user['nivel'] = $_POST['nivel'];
		$user['data_registro'] = date('d/m/y');
		$this->load->model("usuarios_usuarios_model");
		$this->usuarios_usuarios_model->inserte($user);
		redirect("usuarios");
	}


}
