<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Model_gallery extends CI_Model {
	
	//model fungsi untuk menampilkan semua data gallery
	public function semua_gallery(){
		$hasil = $this->db->get('gallery');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}

	//model fungsi untuk menambah semua data gallery
	public function tambah_gallery($data_gallery){
		$this->db->insert('gallery', $data_gallery);
	}

	//model fungsi mendapatkan produk per ID
	public function find_id($id_gallery)
    {
    	
       $hasil = $this->db->where('id_gallery',$id_gallery)
       					 ->limit(1)->get('gallery');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    //model fungsi untuk merubah data gallery
	public function rubah($id_gallery, $data_gallery){
		$this->db->where('id_gallery', $id_gallery)
				 ->update('gallery', $data_gallery);
	}

	//model fungsi untuk menghapus data berdasarkan ID
	public function hapus($id_gallery){
		$this->db->where('id_gallery',$id_gallery);
     	$query = $this->db->get('gallery');
     	$row = $query->row();

     	unlink("./uploads/gallery/$row->photo");

     	$this->db->delete('gallery', array('id_gallery' => $id_gallery));
		
	}

	//frontend

	//model fungsi mendapatkan gallery di home
    public function tampil_gallery(){
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->limit('4');
		$query = $this->db->get();
		return $query->result();
	}


}