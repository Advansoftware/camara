<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Licitacoes extends Geral {
	public function __construct()
		{
			parent::__construct();
		}
	public function index(){
		$dados['title'] = "Licitações";
		$this->inicio($dados);
		$this->load->view('licitacoes/licitacoes');
		$this->load->view('template/footer');
		
	}

}
?>
