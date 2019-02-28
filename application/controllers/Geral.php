<?php
	class Geral extends CI_Controller 
	{
		protected $data;

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url_helper');
			$this->load->helper('url');
			$this->load->helper('menu_lateral');
			$this->load->helper('html');
			$this->load->helper('form');
			$this->load->library('session');
			$this->load->helper('cookie');
			$this->data['url'] = base_url();
		}
		public function inicio($dados=null,$slide=null, $social=null){
			$this->load->view('template/head', $dados);
			$this->load->view('template/menu');
			if($slide==1){
				$this->load->view('template/slide');
			}
			if($social == 1){
				$this->load->view('template/social');
			}

		}
	}
?>
