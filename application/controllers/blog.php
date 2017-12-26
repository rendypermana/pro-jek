<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Maaf, anda belum login!');
			redirect('login');
		}

		
		//load model blog
		$this->load->model('model_blog');
		
	}

	//controller untuk menampilkan semua blog
	public function index()
	{
		$data['blog'] = $this->model_blog->semua_blog();
		$this->load->view('admin/blog_index', $data);

	}

	//controller untuk menambah blog
	public function tambah()
	{
		$this->form_validation->set_rules('id_users', 'Author', 'required');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('konten', 'Konten Artikel', 'required');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('tgl_post', 'Tanggal', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/blog_tambah');
		} else {
			
			$config['upload_path'] = './uploads/blog/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']	= '3000'; 
			$config['max_width']  = '5000'; 
			$config['max_height']  = '5000'; 

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('admin/blog_tambah');
			} else {
				
				$image = $this->upload->data();
				$konten = htmlspecialchars_decode($this->input->post('konten'));
				$data_blog =	array(
					'id_users'	=> set_value('id_users'),
					'judul'		=> set_value('judul'),
					'konten'	=> $konten,
					'gambar'	=> $image['file_name'],
					'tgl_post'	=> set_value('tgl_post')
				);
				$this->model_blog->tambah_blog($data_blog);
				$this->session->set_flashdata('add','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil ditambah</div>');
					redirect('blog');
			}
			
		}	
			
	}

	//controller untuk merubah blog
	public function ubah($id_blog)
	{
		
		$this->form_validation->set_rules('id_users', 'Author', 'required');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('konten', 'Konten Artikel', 'required');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('tgl_post', 'Tanggal', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			
			$data['blog'] = $this->model_blog->find_id($id_blog);
			$this->load->view('admin/blog_edit', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				$config['upload_path'] = './uploads/blog/';
				$config['allowed_types'] = 'jpg|png|gif';
				$config['max_size']	= '3000'; 
				$config['max_width']  = '5000'; 
				$config['max_height']  = '5000';  

				$this->load->library('upload', $config);
			
			
				if ( ! $this->upload->do_upload())
				{
					$data['blog'] = $this->model_blog->find_id($id_blog);
					$this->load->view('admin/blog_edit', $data);
				} else {
					$image = $this->upload->data();
					$konten = htmlspecialchars_decode($this->input->post('konten'));
					$data_blog =	array(
						'id_users'	=> set_value('id_users'),
						'judul'		=> set_value('judul'),
						'konten'	=> $konten,
						'gambar'	=> $image['file_name'],
						'tgl_post'	=> set_value('tgl_post')
					);
					$this->model_blog->rubah($id_blog, $data_blog);
					$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
					redirect('blog');
				}
			} else {
				//form submit dengan blog dikosongkan
				$konten = htmlspecialchars_decode($this->input->post('konten'));
				$data_blog =	array(
						'id_users'	=> set_value('id_users'),
						'judul'		=> set_value('judul'),
						'konten'	=> $konten,
						'tgl_post'	=> set_value('tgl_post')
				);
				$this->model_blog->rubah($id_blog, $data_blog);
				$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
				redirect('blog');
			}
		}	
	}

	//controller untuk menghapus blog
	public function hapus($id_blog)
	{
		$this->model_blog->hapus($id_blog);
		$this->session->set_flashdata('delete','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil dihapus</div>');
		redirect('blog');
	}
	
}

