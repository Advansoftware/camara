<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Vereadores extends Geral {
	public function __construct()
		{
			parent::__construct();
			$this->load->model("Vereador_model");
		}
		public function index(){
		$dados['vereadores'] = $this->Vereador_model->get_vereador();
		$dados['title'] = "Os vereadores";
		$this->inicio($dados);
		$this->load->view('vereadores/vereadores',$dados);
		$this->load->view('template/footer');
	}
	public function pedidos($id = null){
		$dados["pedidos"]= $this->Vereador_model->get_providencia($id);
		$dados["anos"]= $this->Vereador_model->get_ano();
		$dados["vereador"] = $this->Vereador_model->get_vereadorByid($id);
		$this->load->view("vereadores/pdf",$dados);
	}
}
?>
