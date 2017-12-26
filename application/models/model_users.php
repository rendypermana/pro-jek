<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model {

	public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');
		
		$hasil = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->limit(1)
						  ->get('users');
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

	
	
	public function all(){
		//query semua record di table user
		$hasil = $this->db->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}
	
	public function find_users($id_users){
		$hasil = $this->db->where('id_users', $id_users)
						  ->limit(1)
						  ->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	
	public function create($data_users){
		//Query INSERT INTO
		$this->db->insert('users', $data_users);
	}
	
	public function update($id_users, $data_users){
		//Query UPDATE FROM ... WHERE id=...
		$this->db->where('id_users', $id_users)
				 ->update('users', $data_users);
	}
	
	public function get_users_by_id($id_users)
    {
		$hasil = $this->db->where('id_users',$id_users)->get('users');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    //fungsi untuk mengecek kebtersediaan username aya euwehna
    function username_ada($username) {
    $this->db->select('id_users');
    $this->db->where('username', $username);
    $query = $this->db->get('users');

	    if ($query->num_rows() > 0) {
	        return true;
	    } else {
	        return false;
	    }


	}

	//all customer
	public function client(){
		$hasil = $this->db->where('group', 2)
						  ->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}

}