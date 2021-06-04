<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('posts_model');
	}

	public function index()
	{
		redirect('home', 'refresh');
	}

	public function ver($idPost = false)
	{
		if (is_numeric($idPost)) {
			$data['post'] = $this->posts_model->getPostById($idPost);
			var_dump($data['post']);
			exit;
		} else {
			redirect('home', 'refresh');
		}
	}
}
