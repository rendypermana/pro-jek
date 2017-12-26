<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Maaf, anda belum login!');
			redirect('login');
		}

		//load model kategori
		$this->load->model('model_kategori');
		
	}

	//controller untuk menampilkan semua kategori
	public function index()
	{
		$data['kategoris'] = $this->model_kategori->semua_kategori();
		$this->load->view('admin/kategori_index', $data);
	}

	//controller untuk tambah kategori
	public function tambah()
	{
		$this->form_validation->set_rules('nama_kategori', 'Kategori', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/kategori_tambah');	
		}else{
			$data_kategori = array(
					'nama_kategori'	=> set_value('nama_kategori')
				);
				$this->model_kategori->tambah_kategori($data_kategori);
				$this->session->set_flashdata('add','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil ditambah</div>');
				redirect('kategori');		
		}
	}

	//controller untuk merubah kategori
	public function ubah($id_kategori)
	{
		$this->form_validation->set_rules('nama_kategori', 'Kategori', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['item'] = $this->model_kategori->find_id($id_kategori);
			$this->load->view('admin/kategori_edit', $data);
		 } else {
					$data_kategori =	array(
						'nama_kategori'	=> set_value('nama_kategori')
					);
					$this->model_kategori->rubah($id_kategori, $data_kategori);
					$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
					redirect('kategori');
				
			}  
			
	}

	//controller untuk menghapus kategori
	public function hapus($id_kategori)
	{
		$this->model_kategori->hapus($id_kategori);
		$this->session->set_flashdata('delete','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil dihapus</div>');
		redirect('kategori');
	}
}

