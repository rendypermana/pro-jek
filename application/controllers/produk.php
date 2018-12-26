<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Produk extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Maaf, anda belum login!');
			redirect('login');
		}

		//load model produk
		$this->load->model('model_produk');
		//load model kategori
		$this->load->model('model_kategori');
		
	}

	//controller untuk menampilkan semua produk
	public function index()
	{
		$data['produk'] = $this->model_produk->semua_produk();
		$this->load->view('admin/produk_index', $data);
	}

	//controller untuk menambah produk
	public function tambah()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('diskon', 'Diskon');
		//$this->form_validation->set_rules('userfile', 'Gambar Produk', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['kategoris'] = $this->model_kategori->semua_kategori();
			$this->load->view('admin/produk_tambah',$data);
		} else {
			
			$config['upload_path'] = './uploads/produk/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']	= '3000'; 
			$config['max_width']  = '5000'; 
			$config['max_height']  = '5000'; 

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$data['kategoris'] = $this->model_kategori->semua_kategori();
				$this->load->view('admin/produk_tambah',$data);
			} else {
				
				$image = $this->upload->data();
				$desc = htmlspecialchars_decode($this->input->post('deskripsi'));
				$data_produk =	array(
					'id_kategori'	=> set_value('id_kategori'),
					'nama_produk'	=> set_value('nama_produk'),
					'harga'			=> set_value('harga'),
					'deskripsi'		=> $desc,
					'image'			=> $image['file_name'],
					'diskon'		=> set_value('diskon')
				);
				$this->model_produk->tambah_produk($data_produk);
				$this->session->set_flashdata('add','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil ditambah</div>');
					redirect('produk');
			}
			
		}	
			
	}

	public function detail($id_produk){
		$data['produk'] = $this->model_produk->find_id($id_produk);
		$this->load->view('admin/produk_detail',$data);
	}


	//controller untuk merubah barang
	public function ubah($id_produk)
	{
		
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga');
		$this->form_validation->set_rules('diskon', 'Diskon');
		if ($this->form_validation->run() == FALSE)
		{
			
			$data['kategoris'] = $this->model_kategori->semua_kategori();
			$data['produk'] = $this->model_produk->find_id($id_produk);
			$this->load->view('admin/produk_edit', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				$config['upload_path'] = './uploads/produk/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '3000'; 
				$config['max_width']  = '5000'; 
				$config['max_height']  = '5000'; 

				$this->load->library('upload', $config);
			
			
				if ( ! $this->upload->do_upload())
				{
					$data['produk'] = $this->model_produk->find_id($id_produk);
					$this->load->view('admin/produk_edit', $data);
				} else {
					$image = $this->upload->data();
					$desc = htmlspecialchars_decode($this->input->post('deskripsi'));
					$data_produk =	array(
						'id_kategori'	=> set_value('id_kategori'),
						'nama_produk'	=> set_value('nama_produk'),
						'harga'			=> set_value('harga'),
						'deskripsi'		=> $desc,
						'image'			=> $image['file_name'],
						'diskon'		=> set_value('diskon')
					);
					$this->model_produk->rubah($id_produk, $data_produk);
					$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
					redirect('produk');
				}
			} else {
				//form submit dengan gambar dikosongkan
				$desc = htmlspecialchars_decode($this->input->post('deskripsi'));
				$data_produk =	array(
						'id_kategori'	=> set_value('id_kategori'),
						'nama_produk'	=> set_value('nama_produk'),
						'harga'			=> set_value('harga'),
						'deskripsi'		=> $desc,
						'diskon'		=> set_value('diskon')
				);
				$this->model_produk->rubah($id_produk, $data_produk);
				$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
				redirect('produk');
			}
		}	
	}

	//controller untuk menghapus produk
	public function hapus($id_produk)
	{
		$this->model_produk->hapus($id_produk);
		$this->session->set_flashdata('delete','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil dihapus</div>');
		redirect('produk');
	}
	
	//promo
	public function promo(){
		$data['promo']=$this->model_produk->promotion();
		// var_dump($data['promo']);
		// exit();
		$this->load->view('admin/promo', $data);
	}

	//promo edit
	public function edit_promo($id_produk)
	{
		
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga');
		$this->form_validation->set_rules('diskon', 'Diskon');
		if ($this->form_validation->run() == FALSE)
		{
			
			$data['kategoris'] = $this->model_kategori->semua_kategori();
			$data['produk'] = $this->model_produk->find_id($id_produk);
			$this->load->view('admin/produk_edit', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				$config['upload_path'] = './uploads/produk/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '3000'; 
				$config['max_width']  = '5000'; 
				$config['max_height']  = '5000'; 

				$this->load->library('upload', $config);
			
			
				if ( ! $this->upload->do_upload())
				{
					$data['produk'] = $this->model_produk->find_id($id_produk);
					$this->load->view('admin/produk_edit', $data);
				} else {
					$image = $this->upload->data();
					$desc = htmlspecialchars_decode($this->input->post('deskripsi'));
					$data_produk =	array(
						'id_kategori'	=> set_value('id_kategori'),
						'nama_produk'	=> set_value('nama_produk'),
						'harga'			=> set_value('harga'),
						'deskripsi'		=> $desc,
						'image'			=> $image['file_name'],
						'diskon'		=> set_value('diskon')
					);
					$this->model_produk->rubah($id_produk, $data_produk);
					$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
					redirect('produk');
				}
			} else {
				//form submit dengan gambar dikosongkan
				$desc = htmlspecialchars_decode($this->input->post('deskripsi'));
				$data_produk =	array(
						'id_kategori'	=> set_value('id_kategori'),
						'nama_produk'	=> set_value('nama_produk'),
						'harga'			=> set_value('harga'),
						'deskripsi'		=> $desc,
						'diskon'		=> set_value('diskon')
				);
				$this->model_produk->rubah($id_produk, $data_produk);
				$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
				redirect('produk');
			}
		}	
	}


}

