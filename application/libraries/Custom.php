<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Custom
{
	private $CI;

	public function _construct($CI)
	{
		$this->$CI = &get_instance();
	}

	public function renderizarPagina($view = false, $data = false)
	{
		if ($view) {
			$this->CI->load->view('includes/header');
			$this->CI->load->view('includes/navbar');
			$this->CI->load->view('includes/content-start');
			$this->CI->load->view($view, $data);
			$this->CI->load->view('includes/content-end');
			$this->CI->load->view('includes/footer');
		}
	}
}
