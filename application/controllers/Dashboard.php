<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		if ($this->ion_auth->in_group(2)) {
			$this->custom->renderizarPagina('dashboard/dashboard');
		}
	}
}
