<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Gallery extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Maaf, anda belum login!');
			redirect('login');
		}

		
		//load model gallery
		$this->load->model('model_gallery');
		
	}

	//controller untuk menampilkan semua gallery
	public function index()
	{
		$data['gallery'] = $this->model_gallery->semua_gallery();
		$this->load->view('admin/gallery_index', $data);
	}

	//controller untuk menambah gallery
	public function tambah()
	{
		$this->form_validation->set_rules('caption', 'Keterangan', 'required');
		//$this->form_validation->set_rules('photo', 'Photo Gallery', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/gallery_tambah');
		} else {
			
			$config['upload_path'] = './uploads/gallery/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']	= '3000'; 
			$config['max_width']  = '5000'; 
			$config['max_height']  = '5000'; 

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('admin/gallery_tambah');
			} else {
				
				$image = $this->upload->data();
				$capt = htmlspecialchars_decode($this->input->post('caption'));
				$data_gallery =	array(
					'caption'		=> $capt,
					'photo'			=> $image['file_name']
				);
				$this->model_gallery->tambah_gallery($data_gallery);
				$this->session->set_flashdata('add','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil ditambah</div>');
					redirect('gallery');
			}
			
		}	
			
	}

	public function detail($id_produk){
		$data['produk'] = $this->model_produk->find_id($id_produk);
		$this->load->view('admin/produk_detail',$data);
	}


	//controller untuk merubah gallery
	public function ubah($id_gallery)
	{
		
		$this->form_validation->set_rules('caption', 'Keterangan', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			
			$data['gallery'] = $this->model_gallery->find_id($id_gallery);
			$this->load->view('admin/gallery_edit', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				$config['upload_path'] = './uploads/gallery/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '3000'; 
				$config['max_width']  = '5000'; 
				$config['max_height']  = '5000'; 

				$this->load->library('upload', $config);
			
			
				if ( ! $this->upload->do_upload())
				{
					$data['gallery'] = $this->model_gallery->find_id($id_produk);
					$this->load->view('admin/produk_edit', $data);
				} else {
					$image = $this->upload->data();
					$capt = htmlspecialchars_decode($this->input->post('caption'));
					$data_gallery =	array(
						'caption'		=> $capt,
						'photo'			=> $image['file_name']
					);
					$this->model_gallery->rubah($id_gallery, $data_gallery);
					$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
					redirect('gallery');
				}
			} else {
				//form submit dengan gambar dikosongkan
				$capt = htmlspecialchars_decode($this->input->post('caption'));
				$data_gallery =	array(
						'caption'		=> $capt
				);
				$this->model_gallery->rubah($id_gallery, $data_gallery);
				$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
				redirect('gallery');
			}
		}	
	}

	//controller untuk menghapus gallery
	public function hapus($id_gallery)
	{
		$this->model_gallery->hapus($id_gallery);
		$this->session->set_flashdata('delete','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil dihapus</div>');
		redirect('gallery');
	}
	
}

