<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts_model extends CI_Model
{
	public function getPostById($post_id = null)
	{
		if ($post_id) {
			$this->db->select('users.first_name as nomeUsuario, users.last_name as sobrenomeUsuario, users.id as idUsuario, users.id as idUsuario, posts.*');
			$this->db->from('users_posts');
			$this->db->join('users', 'users.id = users_posts.users_id', 'left');
			$this->db->join('posts', 'posts.id = users_posts.posts_id', 'left');
			$this->db->where('posts.id', $post_id);
			return $this->db->get()->row();
		} else {
			return false;
		}
	}
}
