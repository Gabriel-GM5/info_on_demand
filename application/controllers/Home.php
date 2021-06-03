<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		if ($this->ion_auth->logged_in()) {
			redirect('home/dashboard', 'refresh');
		} else {
			if ($this->session->flashdata('login')) {
				redirect('home/login', 'refresh');
			} else {
				redirect('home/landing_page', 'refresh');
			}
		}
	}

	public function login()
	{
		if (!$this->ion_auth->logged_in()) {
			$this->load->helper('form');
			$this->custom->renderizarPagina('home/login');
		} else {
			redirect('home', 'refresh');
		}
	}

	public function logar()
	{
		if (!$this->ion_auth->logged_in()) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'E-mail', 'required');
			$this->form_validation->set_rules('password', 'Senha', 'required');
			if ($this->form_validation->run() && $this->ion_auth->login($this->input->post('email'), $this->input->post('password'), TRUE)) {
				$this->custom->novaNotificacao('sucesso', 'Logado com sucesso!');
			} else {
				$this->custom->novaNotificacao('erro', 'Usuário ou senha incorretos!');
				redirect('home/login', 'refresh');
			}
		}
		redirect('home', 'refresh');
	}

	public function logout()
	{
		if ($this->ion_auth->logged_in()) {
			$this->ion_auth->logout();
		}
		redirect('home', 'refresh');
	}

	public function cadastro()
	{
		if (!$this->ion_auth->logged_in()) {
			$this->load->helper('form');
			$this->custom->renderizarPagina('home/cadastro');
		} else {
			redirect('home', 'refresh');
		}
	}

	public function cadastrar()
	{
		if (!$this->ion_auth->logged_in()) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('first_name', 'Nome', 'required');
			$this->form_validation->set_rules('last_name', 'Sobrenome', 'required');
			$this->form_validation->set_rules('email', 'E-mail', 'required');
			$this->form_validation->set_rules('password', 'Senha', 'required');
			$this->form_validation->set_rules('confirmPassword', 'Confirmar Senha', 'required');
			if ($this->form_validation->run()) {
				if ($this->input->post('password') == $this->input->post('confirmPassword')) {
					if ($this->ion_auth->register($this->input->post('email'), $this->input->post('password'), $this->input->post('email'), array('first_name' => $this->input->post('first_name'), 'last_name' => $this->input->post('last_name')), 2)) {
						$this->custom->novaNotificacao('sucesso', 'Cadastrado com sucesso!');
						redirect('home/login', 'refresh');
					} else {
						$this->custom->novaNotificacao('erro', 'Erro ao inserir usuário!');
					}
				} else {
					$this->custom->novaNotificacao('erro', 'As senhas devem ser iguais!');
				}
			} else {
				$this->custom->novaNotificacao('erro', validation_errors());
			}
			//redirect('home/cadastro', 'refresh');
		} else {
			redirect('home', 'refresh');
		}
	}

	public function landing_page()
	{
		$this->custom->renderizarPagina('home/landing_page');
	}

	public function dashboard()
	{
		$this->custom->renderizarPagina('home/dashboard');
	}
}
