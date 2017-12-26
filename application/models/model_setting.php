<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Model_setting extends CI_Model {
	
	//model fungsi untuk menampilkan semua data setting
	public function semua_setting(){
		$hasil = $this->db->get('d_setting');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}


	//model fungsi mendapatkan setting per ID
	public function find_id($id_setting)
    {
    	
       $hasil = $this->db->where('id_setting',$id_setting)->limit(1)->get('d_setting');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }


    //model fungsi untuk merubah data setting
	public function rubah($id_setting, $data_setting){
		$this->db->where('id_setting', $id_setting)
				 ->update('d_setting', $data_setting);
	}


	//front: detail kontak
	public function telpon()
    {
    	
       $hasil = $this->db->where('id_setting', 1)->limit(1)->get('d_setting');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    public function alamat()
    {
    	
       $hasil = $this->db->where('id_setting', 2)->limit(1)->get('d_setting');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }

    }


    public function email()
    {
    	
       $hasil = $this->db->where('id_setting', 3)->limit(1)->get('d_setting');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }

    }

    public function meta_deskripsi()
    {
        
       $hasil = $this->db->where('id_setting', 4)->limit(1)->get('d_setting');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }

    }



}

