<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Historia extends Geral {
	public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data['title'] = "Historia";
			$this->inicio($data,0);
			$this->load->view('historia');
			$this->load->view('template/footer');
		}
}
?>
