<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Custom
{
	var $contr;
	public function __construct($params = array())
	{
		$this->ci = &get_instance();
		$this->ci->load->helper('url');
		$this->controller = $this->ci->uri->segment(2);
	}

	public function renderizarPagina($view = false, $dados = false)
	{
		if ($view) {
			$this->load->view('includes/header');
			$this->load->view('includes/navbar');
			$this->load->view('includes/content-start');
			$this->load->view('includes/' . $view);
			$this->load->view('includes/content-end');
			$this->load->view('includes/footer');
		}
	}
}
