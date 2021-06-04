<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

	public function ver($idPost = false){
		if ($idPost && is_int($idPost)) {
			$data['post'] = $this->posts_model->getPostById($idPost);
			var_dump($data['post']);
		} else {
			redirect('home', 'refresh');
		}
	}
}
