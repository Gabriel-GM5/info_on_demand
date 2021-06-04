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
		$datahora = date('d-m-Y H:i:s');
		$this->db->set('criacao', $datahora);
		$this->db->set('ultimaEdicao', $datahora);
		$this->db->set('visualizacoes', 0);
		if ($this->db->insert('posts')) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}
}
