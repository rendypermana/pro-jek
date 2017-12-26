<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Reseller extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('group') != '2'){
			$this->session->set_flashdata('error','<div class="alert alert-info">Maaf, anda belum login!</div>');
			redirect('page_reseller');
		}

		//load model produk
		$this->load->model('model_produk');
		//load model kategori
		$this->load->model('model_kategori');
		//load model blog
		$this->load->model('model_blog');
		//load model reseller
		$this->load->model('model_users');
		
	}

	public function koleksi(){
		$data['produk'] = $this->model_produk->semua_produk();
		$this->load->view('reseller_koleksi',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('page_reseller');
	}

	public function home(){
		$this->load->view('reseller_home');
	}

}

