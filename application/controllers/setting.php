<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Setting extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Maaf, anda belum login!');
			redirect('login');
		}

		//load model setting
		$this->load->model('model_setting');
		
	}

	//controller untuk menampilkan semua kategori
	public function index()
	{
		$data['atur'] = $this->model_setting->semua_setting();
		$this->load->view('admin/setting_index', $data);
	}


	//controller untuk merubah setting
	public function ubah($id_setting)
	{
		$this->form_validation->set_rules('value', 'Konten', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['atur'] = $this->model_setting->find_id($id_setting);
			$this->load->view('admin/setting_edit', $data);
		} else {
					$data_setting =	array(
						'value'	=> set_value('value')
					);
					$this->model_setting->rubah($id_setting, $data_setting);
					$this->session->set_flashdata('edit','<div class="alert alert-success"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Data berhasil diubah</div>');
					redirect('setting');
				
		}  
			
	}


}

