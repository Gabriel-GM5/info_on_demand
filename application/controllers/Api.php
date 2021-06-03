<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
	public function index()
	{
		redirect('home', 'refresh');
	}

	public function getNotificacoes()
	{
		$data = $this->session->get_flashdata('notificacao');
		if ($data) {
			echo json_encode($data);
		} else {
			echo 'Nada';
		}
	}
}
