<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
	public function gravarPost($titulo = null, $subtitulo = null, $conteudo = null)
	{
		$this->db->set('titulo', $titulo);
		$this->db->set('subtitulo', $subtitulo);
		$this->db->set('conteudo', $conteudo);
		date_default_timezone_set('America/Sao_Paulo');
		$datahora = date('Y-m-d H:i:s');
		$this->db->set('criacao', $datahora);
		$this->db->set('ultimaEdicao', $datahora);
		$this->db->set('visualizacoes', 0);
		if ($this->db->insert('posts')) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	public function vincularPostUsuario($user_id = null, $post_id = null)
	{
		if ($user_id && $post_id) {
			$this->db->set('users_id', $user_id);
			$this->db->set('posts_id', $post_id);
			return $this->db->insert('users_posts');
		} else {
			return false;
		}
	}
}
