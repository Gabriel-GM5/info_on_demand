<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		if ($this->ion_auth->in_group(2)) {
			$this->load->helper('form');
			$this->custom->renderizarPagina('dashboard/dashboard');
		} else {
			redirect('home', 'refresh');
		}
	}

	public function novaPostagem()
	{
		if ($this->ion_auth->in_group(2)) {
			var_dump($_POST);
			var_dump($_FILES);
			exit;
		} else {
			redirect('home', 'refresh');
		}
	}
}
