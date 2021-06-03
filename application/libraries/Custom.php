<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Custom
{
	public function renderizarPagina($view = false, $data = false)
	{
		$CI = &get_instance();
		if ($view) {
			$logged_in = $CI->ion_auth->logged_in();
			if ($logged_in) {
				$user = $CI->ion_auth->user()->row();
				$nomeUsuario = $user->first_name;
				$sobrenomeUsuario = $user->last_name;
				$idUsuario = $user->id;
			} else {
				$nomeUsuario = '';
				$idUsuario = '';
				$sobrenomeUsuario = '';
			}
			$dadosNav = array('logado' => $logged_in, 'nomeUsuario' => $nomeUsuario, 'idUsuario' => $idUsuario, 'sobrenomeUsuario' => $sobrenomeUsuario);
			$CI->load->view('includes/header');
			$CI->load->view('includes/navbar', $dadosNav);
			$CI->load->view('includes/content-start');
			$CI->load->view($view, $data);
			$CI->load->view('includes/content-end');
			$CI->load->view('includes/footer');
		}
	}

	public function novaNotificacao($tipo = null, $mensagem = null)
	{
		if ($tipo && $mensagem) {
			$CI = &get_instance();
			$tmp = $CI->session->flashdata('notificacao');
			if (!$tmp) {
				$tmp = array();
			}
			$tmp2 = array($tipo => $mensagem);
			array_push($tmp, $tmp2);
			return true;
		} else {
			return false;
		}
	}
}
