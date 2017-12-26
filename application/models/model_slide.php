<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Model_slide extends CI_Model {
	
	//model fungsi untuk menampilkan semua data slide
	public function semua_slide(){
		$hasil = $this->db->get('d_slider');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}

	//model fungsi untuk menambah semua data produk
	public function tambah_produk($data_produk){
		$this->db->insert('d_produk', $data_produk);
	}

	//model fungsi untuk menambah semua data slide
	public function tambah_slide($data_slide){
		$this->db->insert('d_slider', $data_slide);
	}
	
	//model fungsi mendapatkan slide per ID
	public function find_id($id_slider){
        $hasil = $this->db->where('id_slider',$id_slider)->limit(1)->get('d_slider');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    //model fungsi untuk merubah data slide
	public function rubah($id_slider, $data_slide){
		$this->db->where('id_slider', $id_slider)
				 ->update('d_slider', $data_slide);
	}

	//model fungsi untuk menghapus data berdasarkan ID
	public function hapus($id_slider){
		$this->db->where('id_slider', $id_slider)->delete('d_slider');
		
	}


}

