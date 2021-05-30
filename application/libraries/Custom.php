<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Custom
{
	public function renderizarPagina($view = false, $dados = false)
	{
		if ($view) {
			$CI = &get_instance();
			$CI->load->view('includes/header');
			$CI->load->view('includes/navbar');
			$CI->load->view('includes/content-start');
			$CI->load->view($view);
			$CI->load->view('includes/content-end');
			$CI->load->view('includes/footer');
		}
	}
}
