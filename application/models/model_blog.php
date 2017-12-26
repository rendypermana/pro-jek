<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Model_blog extends CI_Model {
	
	//model fungsi untuk menampilkan semua data blog
	public function semua_blog(){
		$this->db->select('*');
		$this->db->from('d_blog');
		$this->db->join('users', 'users.id_users = d_blog.id_users');	
		$query = $this->db->get();
		return $query->result();
	}

	//model fungsi untuk menambah semua data blog
	public function tambah_blog($data_blog){
		$this->db->insert('d_blog', $data_blog);
	}

	//model fungsi mendapatkan produk per ID
	public function find_id($id_blog)
    {
    	
       $hasil = $this->db->where('id_blog',$id_blog)
       					 ->limit(1)->get('d_blog');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    //model fungsi untuk merubah data blog
	public function rubah($id_blog, $data_blog){
		$this->db->where('id_blog', $id_blog)
				 ->update('d_blog', $data_blog);
	}

	//model fungsi untuk menghapus data berdasarkan ID
	public function hapus($id_blog){
		$this->db->where('id_blog',$id_blog);
     	$query = $this->db->get('d_blog');
     	$row = $query->row();

     	unlink("./uploads/blog/$row->gambar");

     	$this->db->delete('d_blog', array('id_blog' => $id_blog));
		
	}

	//frontend

	//model fungsi menampilkan blog di home
    public function tampil_blog(){
		$this->db->select('*');
		$this->db->from('d_blog');
		$this->db->order_by('id_blog','desc');
		$this->db->limit('5');
		$query = $this->db->get();
		return $query->result();
	}

	//model fungsi untuk paging1
	public function lihat($sampai,$dari){
		$query = $this->db->order_by('id_blog','desc')->get('d_blog',$sampai,$dari);
		return $query->result();
	}
	
	//model fungsi untuk paging2
	public function jumlah(){
		$query = $this->db->get('d_blog');
		return $query->num_rows();
	}


}