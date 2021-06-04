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
			$this->load->model('dashboard_model');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('titulo', 'Título', 'required');
			$this->form_validation->set_rules('conteudo', 'Conteúdo', 'required');
			if ($this->form_validation->run()) {
				$res = $this->dashboard_model->gravarPost($this->input->post('titulo'), $this->input->post('subtitulo'), $this->input->post('conteudo'));
			} else {
				$res = false;
			}
			if ($res) {

			}
		} else {
			redirect('home', 'refresh');
		}
	}
}
