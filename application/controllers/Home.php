<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index($login = false)
	{
		if ($this->ion_auth->logged_in()) {
			redirect('home/dashboard', 'refresh');
		} else {
			if ($login) {
				redirect('home/login', 'refresh');
			} else {
				redirect('home/landing-page', 'refresh');
			}
		}
	}

	public function login()
	{
		if (!$this->ion_auth->logged_in()) {
			$this->custom->renderizarPagina('home/login');
		} else {
			redirect('home', 'refresh');
		}
	}
}
