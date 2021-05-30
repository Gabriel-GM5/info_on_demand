<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Custom
{
	public function __construct($params = array())
	{
		$CI = &get_instance();
	}

	public function renderizarPagina($view = false, $dados = false)
	{
		if ($view) {
			$this->CI->load->view('includes/header');
			$this->CI->load->view('includes/navbar');
			$this->CI->load->view('includes/content-start');
			$this->CI->load->view('includes/' . $view);
			$this->CI->load->view('includes/content-end');
			$this->CI->load->view('includes/footer');
		}
	}
}
