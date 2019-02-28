<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Mesa_diretora extends Geral {
	public function __construct()
		{
			parent::__construct();
		}
		public function index(){
		$this->load->model("Mesa_diretora_model");
		$dados['cargo'] = $this->Mesa_diretora_model-> get_vereador_cargo();
		$dados['title'] = "Mesa Diretora";
		$this->inicio($dados);
		$this->load->view('mesa_diretora');
		$this->load->view('template/footer');
	}
}
