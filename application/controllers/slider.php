<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Slider extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Maaf, anda belum login!');
			redirect('login');
		}

		//load model slider
		$this->load->model('model_slide');
		
	}

	//controller untuk menampilkan semua slide
	public function index()
	{
		$data['slider'] = $this->model_slide->semua_slide();
		$this->load->view('admin/slider_index', $data);
	}

	//controller untuk menambah slide
	public function tambah(){
		$this->form_validation->set_rules('gambar', 'Gambar');
		$this->form_validation->set_rules('title', 'Title Slide','required');
		$this->form_validation->set_rules('alt', 'Alt Slide','required');
		//$this->form_validation->set_rules('userfile', 'Gambar Produk', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/slider_tambah');
		} else {
			
			$config['upload_path'] = './uploads/slide/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']	= '3000'; 
			$config['max_width']  = '5000'; 
			$config['max_height']  = '5000'; 

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('admin/slider_tambah');
			} else {
				
				$image = $this->upload->data();
				$data_slide =	array(
					'title'		=> set_value('title'),
					'alt'		=> set_value('alt'),
					'gambar'			=> $image['file_name']
				);
				$this->model_slide->tambah_slide($data_slide);
				$this->session->set_flashdata('add','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil ditambah</div>');
					redirect('slider');
			}
			
		}	
			
	}

	//controller untuk merubah data slide
	public function ubah($id_slider){
		$this->form_validation->set_rules('gambar', 'Gambar');
		$this->form_validation->set_rules('title', 'Title Slide','required');
		$this->form_validation->set_rules('alt', 'Alt Slide','required');
		if ($this->form_validation->run() == FALSE)
		{
			
			$data['slide'] = $this->model_slide->find_id($id_slider);
			$this->load->view('admin/slider_edit',$data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				$config['upload_path'] = './uploads/slide/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '3000'; 
				$config['max_width']  = '5000'; 
				$config['max_height']  = '5000'; 

				$this->load->library('upload', $config);
			
			
				if ( ! $this->upload->do_upload())
				{
					$data['slide'] = $this->model_slide->find_id($id_slider);
					$this->load->view('admin/slider_edit', $data);
				} else {
					$image = $this->upload->data();
					$data_slide =	array(
						'title'		=> set_value('title'),
						'alt'		=> set_value('alt'),
						'gambar'	=> $image['file_name']
					);
					$this->model_slide->rubah($id_slider, $data_slide);
					$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
					redirect('slider');
				}
			} else {
				//form submit dengan gambar dikosongkan
				$data_slide =	array(
						'title'		=> set_value('title'),
						'alt'		=> set_value('alt')
				);
				$this->model_slide->rubah($id_slider, $data_slide);
				$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
				redirect('slider');
			}
		}	
	}

	//controller untuk menghapus slide
	public function hapus($id_slider)
	{
		$this->model_slide->hapus($id_slider);
		$this->session->set_flashdata('delete','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil dihapus</div>');
		redirect('slider');
	}

	
	
}

