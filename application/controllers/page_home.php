<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Page_home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		//load model produk
		$this->load->model('model_produk');
		//load model kategori
		$this->load->model('model_kategori');
		//load model blog
		$this->load->model('model_blog');
		$this->load->model('model_setting');
		$this->load->model('model_slide');
		
	}

	//controller untuk menampilkan semua produk home
	public function index()
	{
		// pagination non aktif
		// $jumlah= $this->model_produk->jumlah();
		// $config['base_url'] = site_url('page_home/index');
		// $config['total_rows'] = $this->model_produk->jumlah();
		// $config['total_rows'] = $jumlah; 
		// $config['per_page'] = 6; 
		
		// $config['full_tag_open'] = '<ul class="pagination" >';
		// $config['full_tag_close'] = '</ul>';
		// $config['first_link'] = '<<';
		// $config['first_tag_open'] = ' <li class="page-item">';
		// $config['first_tag_close'] = '</li>';
		// $config['last_link'] = '>> ';
		// $config['last_tag_open'] = '<li class="next page">';
		// $config['last_tag_close'] = '</li>';
		// $config['next_link'] = '>';
		// $config['next_tag_open'] = '<li class="next page">';
		// $config['next_tag_close'] = '</li>';
		// $config['prev_link'] = '<';
		// $config['prev_tag_open'] = '<li class="prev page">';
		// $config['prev_tag_close'] = '</li>';
		// $config['cur_tag_open'] = '<li class="active"><a href="">';
		// $config['cur_tag_close'] = '</a></li>';
		// $config['num_tag_open'] = '<li class="page">';
		// $config['num_tag_close'] = '</li>';
		
  
  

		// $dari = $this->uri->segment('3');
		// $data['produk'] = $this->model_produk->lihat($config['per_page'],$dari);
		// $this->pagination->initialize($config); 
  		
  		$data['blog'] = $this->model_blog->tampil_blog(); //untuk menampilkan postingan blog
  		$data['slider'] = $this->model_slide->semua_slide();
  		$data['produk'] = $this->model_produk->tampil_home();
  		$data['promo'] = $this->model_produk->colek_omo();
  		 // var_dump($data['promo']);
  		 // exit();
		$this->load->view('home',$data);
	}

	
	
}

