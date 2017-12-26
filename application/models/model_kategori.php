<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Model_kategori extends CI_Model {
	
	//model fungsi untuk menampilkan semua data kategori 
	public function semua_kategori(){
		$hasil = $this->db->get('d_kategori');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}

	//model fungsi untuk menambah semua data kategori
	public function tambah_kategori($data_kategori){
		$this->db->insert('d_kategori', $data_kategori);
	}

		//model fungsi mendapatkan kategori per ID
	public function find_id($id_kategori)
    {
        $hasil = $this->db->where('id_kategori',$id_kategori)->limit(1)->get('d_kategori');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    //model fungsi untuk merubah data kategori
	public function rubah($id_kategori, $data_kategori){
		$this->db->where('id_kategori', $id_kategori)
				 ->update('d_kategori', $data_kategori);
	}

	//model fungsi untuk menghapus data berdasarkan ID
	public function hapus($id_kategori){
		$this->db->where('id_kategori', $id_kategori)->delete('d_kategori');
		
	}

	//FRONTEND
	

}