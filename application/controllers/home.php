<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login');
		}
		
		//load model -> model_users
		$this->load->model('model_users');
		//load model -> model_blog
		$this->load->model('model_blog');
		
	}
	
	public function index()
	{
		$this->load->view('admin/home');
	}

	
}