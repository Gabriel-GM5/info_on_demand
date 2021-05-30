<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Custom
{
	public function renderizarPagina($view = false, $dados = false)
	{
		$CI = &get_instance();
		if ($view) {
			$this->CI->view('includes/header');
			$this->CI->view('includes/navbar');
			$this->CI->view('includes/content-start');
			$this->CI->view('includes/' . $view);
			$this->CI->view('includes/content-end');
			$this->CI->view('includes/footer');
		}
	}
}
