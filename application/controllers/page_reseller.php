<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Page_reseller extends CI_Controller {

	public function __construct(){
		parent::__construct();

		//load model produk
		$this->load->model('model_produk');
		//load model kategori
		$this->load->model('model_kategori');
		//load model blog
		$this->load->model('model_blog');
		//load model reseller
		$this->load->model('model_users');
		
	}

	//controller untuk detail
	public function index(){
		
		$this->load->view('reseller');
	}

	//menampilkan data per kategori
	public function koleksi($id_kategori){
		$data['ket'] = $this->model_kategori->find_id($id_kategori);
		$data['top'] = $this->model_produk->top_koleksi();
		$data['kategori'] = $this->model_kategori->semua_kategori();
		$data['produk'] = $this->model_produk->find_prod($id_kategori);
		$this->load->view('kategori_produk',$data);
	}

    //daftar
	public function daftar(){
        $this->form_validation->set_rules('nama_users','nama', 'required');
        $this->form_validation->set_rules('telp','nomor telepon', 'callback_input_nomor');
        $this->form_validation->set_rules('alamat','alamat', 'required');
        $this->form_validation->set_rules('email','email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[6]|valid_username|is_unique[users.username]');
        $this->form_validation->set_rules('password','password', 'trim|required|min_length[6]|md5');
        $this->form_validation->set_rules('password-conf', 'konfirmasi password', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('reseller_signup');	
		}else{
			$data_users = array(
					'nama_users'	=> set_value('nama_users'),
					'telp'			=> set_value('telp'),
					'alamat'		=> set_value('alamat'),
					'email'			=> set_value('email'),
					'username'		=> set_value('username'),
					'password'		=> set_value('password')
				);
				$this->model_users->create($data_users);
				$this->session->set_flashdata('success','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil disimpan silahkan login</div>');
					redirect('page_reseller/daftar');		
		}
    }

    //reseller login
	public function reseller_login(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|md5');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('reseller');
		} else {
			$this->load->model('model_users');
			$valid_user = $this->model_users->check_credential();
			
			if($valid_user == FALSE)
			{
				$this->session->set_flashdata('error','<div class="alert alert-danger">Username / Password Salah!</div>');
				redirect('page_reseller');
			} else {
				// if the username and password is a match
				$this->session->set_userdata('id_users', $valid_user->id_users);
				$this->session->set_userdata('nama_users', $valid_user->nama_users);
				$this->session->set_userdata('username', $valid_user->username);
				$this->session->set_userdata('group', $valid_user->group);
				
				switch($valid_user->group){
					case 2 : //admin
								redirect('reseller/home'); 
								break;
					
				}
			}
		}
	}

    function input_nomor ($str){
    return preg_match('/^[0-9,]+$/', $str);
	}

	
}

