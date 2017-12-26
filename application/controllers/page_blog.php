<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Page_blog extends CI_Controller {

	public function __construct(){
		parent::__construct();

		//load model produk
		$this->load->model('model_produk');
		//load model kategori
		$this->load->model('model_kategori');
		//load model blog
		$this->load->model('model_blog');
		
	}

	//controller untuk menampilkan list blog
	public function index(){
		$jumlah= $this->model_blog->jumlah();
		$config['base_url'] = site_url('page_blog/index');
		$config['total_rows'] = $this->model_blog->jumlah();
		$config['total_rows'] = $jumlah; //menghitung total baris
		$config['per_page'] = 5; //mengatur total data yang tampil per halamannya
		
		$config['full_tag_open'] = '<ul class="pagination" >';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = ' <li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last ';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		
  
  
		$dari = $this->uri->segment('3');
		$data['package'] = $this->model_blog->lihat($config['per_page'],$dari);
		$this->pagination->initialize($config);

		$dari = $this->uri->segment('3');
		$data['blog'] = $this->model_blog->lihat($config['per_page'],$dari);
		$this->pagination->initialize($config); 
  		
  		$data['top'] = $this->model_produk->top_koleksi();
  		$data['kategori'] = $this->model_kategori->semua_kategori();
		$this->load->view('list_blog',$data);

	}

	public function detail($id_blog){
		$data['kategori'] = $this->model_kategori->semua_kategori();
		$data['top'] = $this->model_produk->top_koleksi();
		$data['blog'] = $this->model_blog->find_id($id_blog);
		$this->load->view('detail_blog',$data);
	}
	
	public function api_blog(){
		$data=$this->model_blog->semua_blog();
		header('Content-Type: application/json');
		echo json_encode($data);
		//$this->load->view('list_blog',$data);
		
	}
	
	
}

