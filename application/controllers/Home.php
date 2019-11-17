<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Home extends Geral
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sessoes_camara_model');
		$this->load->model('Home_model');
		$this->load->model('Noticias_model');
	}

	public function index(){

		$dados['title'] = "Bem Vindo";
		$dados['sessao'] = $this->Sessoes_camara_model->get_sessao();
		$dados['ano'] = $this->Sessoes_camara_model->get_ano();
		$dados['count'] = $this->Sessoes_camara_model->countAll();
		$dados['noticias'] = $this->Noticias_model->get_noticias_inicial(3);

		$this->inicio($dados,1,1);
		$this->load->view('home/home');
		$this->load->view('home/sessoes');
		$this->load->view('home/final');
		$this->load->view('template/footer');
	}
}
?>