<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Page_kontak extends CI_Controller {

	public function __construct(){
		parent::__construct();

		//load model produk
		$this->load->model('model_produk');
		//load model kategori
		$this->load->model('model_kategori');
		//load model blog
		$this->load->model('model_blog');
		//load model blog
		$this->load->model('model_setting');
		
	}

	//controller untuk detail
	public function index(){
		$data['telpon'] = $this->model_setting->telpon();
		$data['alamat'] = $this->model_setting->alamat();
		$data['email'] = $this->model_setting->email();
		$this->load->view('kontak',$data);
	}


	

}

