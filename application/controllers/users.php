<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login');
		}
		
		//load model -> model_users
		$this->load->model('model_users');
	}
	
	public function index()
	{
		$data['users'] = $this->model_users->all();
		$this->load->view('backend/view_all_users', $data);
	}

	public function lihat($id_users)
	{
		$data['users'] = $this->model_users->find_users($id_users);
		$this->load->view('admin/users_profil', $data);
	}
	
	public function create(){
		$this->form_validation->set_rules('nama_users', 'Nama User', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		$this->form_validation->set_rules('group', 'Group', 'required|integer');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_users');	
		}else{
			$data_users =	array(
					'nama_users'	=> set_value('nama_users'),
					'username'		=> set_value('username'),
					'password'		=> set_value ('password'),
					'group'			=> set_value('group')
				);
				$this->model_users->create($data_users);
				redirect('admin/users');
		}
	
	}

	public function update($id_users){
		$this->form_validation->set_rules('nama_users', 'Nama Users', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['users'] = $this->model_users->find_users($id_users);
			$this->load->view('admin/users_profil', $data);
		 } else {
					$data_users =	array(
						'nama_users'	=> set_value('nama_users'),
						'username'		=> set_value('username')
					);
					$this->model_users->update($id_users, $data_users);
					$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
					redirect('home');
				
			} 
			
	}

	//lihat semua customer
	public function all_customer(){
		$data['customer'] = $this->model_users->client();
		$this->load->view('admin/all_customer',$data);
	}
	
	//ganti password
	public function update_password($id_users){
	$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
	$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password]|md5');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['users'] = $this->model_users->find_users($id_users);
			$this->load->view('admin/users_cpass', $data);
		 } else {
				
						$data_users =	array(
						
						'password'		=> set_value ('password')
						
						);
						$this->model_users->update($id_users, $data_users);
						$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
						redirect('home');
					
					
				}	
		
	}
	
	public function ganti_pass($id_users){
		$data['users'] = $this->model_users->find_users($id_users);
		$this->load->view('backend/form_ganti_password');
	}
	
	public function delete($id){
		$this->model_users->delete($id);
		redirect('users');
	}


}