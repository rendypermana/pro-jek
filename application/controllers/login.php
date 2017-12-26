<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|md5');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/login');
		} else {
			$this->load->model('model_users');
			$valid_user = $this->model_users->check_credential();
			
			if($valid_user == FALSE)
			{
				$this->session->set_flashdata('error','<div class="alert alert-danger">Username / Password Salah!</div>');
				redirect('login');
			} else {
				// if the username and password is a match
				$this->session->set_userdata('id_users', $valid_user->id_users);
				$this->session->set_userdata('nama_users', $valid_user->nama_users);
				$this->session->set_userdata('username', $valid_user->username);
				$this->session->set_userdata('group', $valid_user->group);
				
				switch($valid_user->group){
					case 1 : //admin
								redirect('home'); 
								break;
					
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('admin/login');
	}
}