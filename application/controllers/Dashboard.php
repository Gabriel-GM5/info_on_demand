<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
	}

	public function index()
	{
		$map = directory_map('./uploads/', FALSE, TRUE);
		var_dump($map);
		exit;
		if ($this->ion_auth->in_group(2)) {
			$this->load->helper('form');
			$data['posts'] = $this->dashboard_model->getPostsUsuario($this->ion_auth->user()->row()->id);
			$this->custom->renderizarPagina('dashboard/dashboard', $data);
		} else {
			redirect('home', 'refresh');
		}
	}

	public function novaPostagem()
	{
		if ($this->ion_auth->in_group(2)) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('titulo', 'Título', 'required');
			$this->form_validation->set_rules('conteudo', 'Conteúdo', 'required');
			if ($this->form_validation->run()) {
				$res = $this->dashboard_model->gravarPost($this->input->post('titulo'), $this->input->post('subtitulo'), $this->input->post('conteudo'));
			} else {
				$res = false;
			}
			if ($res) {
				$res1 = $this->dashboard_model->vincularPostUsuario($this->ion_auth->user()->row()->id, $res);
			}
			if (!$res || !$res1) {
				$this->custom->novaMensagem('error', 'Algo deu errado');
				// Implementar um rollback;
			} else {
				foreach ($_FILES as $tipo => $arquivo) {
					$ext = explode('.', $arquivo['name']);
					$ext = $ext[sizeof($ext) - 1];
					if ($ext) {
						$nome = $tipo . '_' . $res . '.' . $ext;
						$result = $this->custom->uploadFile($nome, $tipo);
						var_dump($result);
					}
				}
			}
			exit;
			redirect('dashboard', 'refresh');
		} else {
			redirect('home', 'refresh');
		}
	}
}
