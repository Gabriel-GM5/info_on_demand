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
		echo json_encode($this->session->get_flashdata('notificacao'));
	}
}
