<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

class Noticias extends Geral
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Noticias_model');
	}

	public function index($page = 1, $noticia_id = 0)
	{
		$dados['title'] = "Noticias";
		
		$dados['noticias'] = $this->Noticias_model->get_noticias($page);
		$dados['paginacao']['size'] = (!empty($dados['noticias']) ? $dados['noticias'][0]['Size'] : 0);
        $dados['paginacao']['pg_atual'] = $page;
		$dados['controller'] = 'noticias';
		$dados['noticia_id'] = $noticia_id;

		$this->inicio($dados);
		$this->load->view('noticias/noticias');
		$this->load->view('home/final');
		$this->load->view('template/footer');

	}

}
?>
