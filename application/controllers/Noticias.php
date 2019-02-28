<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Noticias extends Geral {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Noticias_model');
		}
	public function index(){


		$dados['title'] = "Noticias";
		$config = array(
			"base_url"=> base_url('noticias/p'),
			"per_page" => 15,
			"num_links" => 3,
			"uri_segment" => 3,
			"total_rows" =>$this->Noticias_model->countAll(),
			"full_tag_open" => "<ul class='pagination justify-content-center my-3'>",
			"full_tag_close" => "</ul>",
			"first_link" => FALSE,
			"last_link" =>  FALSE,
			"first_tag_open" => "<li class='page-item'>",
			"first_tag_close" => "</li>",
			"prev_link" => "Anterior",
			"prev_tag_open" => "<li class='page-item'>",
			"prev_tag_close" => "</li>",
			"next_link" => "Proximo",
			"next_tag_open" => "<li class='page-item'>",
			"next_tag_close" => "</li>",
			"last_tag_open" => "<li>",
			"last_tag_close" => "</li>",
			"cur_tag_open" => "<li class='page-item active'><span class='page-link'>",
			"cur_tag_close" => "<span class='sr-only'>(current)</span></span></li>",
			"num_tag_open" => "<li class='page-item'>",
			"num_tag_close" => "</li>"
		);
		$this->pagination->initialize($config);
		$dados['pagination'] = $this->pagination->create_links();
		$offset = ($this->uri->segment(3))  ? $this->uri->segment(3): 0;
		$dados['noticias'] = $this->Noticias_model->get_noticias($config['per_page'], $offset);
		$this->inicio($dados);
		$this->load->view('noticias/noticias');
		$this->load->view('home/final');
		$this->load->view('template/footer');

	}

}
?>
