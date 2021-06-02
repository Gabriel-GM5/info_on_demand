<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Custom
{
	public function renderizarPagina($view = false, $data = false)
	{
		$CI = &get_instance();
		if ($view) {
			$dadosNav = array('logado'=>$CI->ion_auth->logged_in());
			$CI->load->view('includes/header');
			$CI->load->view('includes/navbar', $dadosNav);
			$CI->load->view('includes/content-start');
			$CI->load->view($view, $data);
			$CI->load->view('includes/content-end');
			$CI->load->view('includes/footer');
		}
	}
}
