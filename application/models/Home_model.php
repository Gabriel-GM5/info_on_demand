<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
	public function getPostsBusca($termo = null)
	{
		if ($termo) {
			$this->db->select('users.first_name as nomeUsuario, users.last_name as sobrenomeUsuario, users.id as idUsuario, posts.id as idPost, posts.titulo, posts.subtitulo, posts.visualizacoes, posts.criacao, posts.ultimaEdicao, posts.imagem, posts.video');
			$this->db->from('users_posts');
			$this->db->join('users', 'users.id = users_posts.users_id', 'left');
			$this->db->join('posts', 'posts.id = users_posts.posts_id', 'left');
			$this->db->like('posts.titulo', $termo);
			$this->db->or_like('posts.subtitulo', $termo);
			$this->db->or_like('posts.conteudo', $termo);
			$this->db->or_like('users.first_name', $termo);
			$this->db->or_like('users.last_name', $termo);
			$this->db->order_by('posts.ultimaEdicao', 'DESC');
			return $this->db->get()->result();
		} else {
			return false;
		}
	}
}
