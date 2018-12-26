<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Model_produk extends CI_Model {
	
	//model fungsi untuk menampilkan semua data produk
	public function semua_produk(){
		$this->db->select('*');
		$this->db->from('d_produk');
		$this->db->join('d_kategori', 'd_kategori.id_kategori = d_produk.id_kategori');	
		$query = $this->db->get();
		return $query->result();
	}

	//model fungsi untuk menambah semua data produk
	public function tambah_produk($data_produk){
		$this->db->insert('d_produk', $data_produk);
	}

	//model fungsi mendapatkan produk per ID
	public function find_id($id_produk)
    {
    	
       $hasil = $this->db->join('d_kategori', 'd_kategori.id_kategori = d_produk.id_kategori')
       					 ->where('id_produk',$id_produk)
       					 ->limit(1)->get('d_produk');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }


    //model fungsi untuk merubah data produk
	public function rubah($id_produk, $data_produk){
		$this->db->where('id_produk', $id_produk)
				 ->update('d_produk', $data_produk);
	}

	//model fungsi untuk menghapus data berdasarkan ID
	public function hapus($id_produk){
		$this->db->where('id_produk',$id_produk);
     	$query = $this->db->get('d_produk');
     	$row = $query->row();

     	unlink("./uploads/produk/$row->image");

     	$this->db->delete('d_produk', array('id_produk' => $id_produk));
		
	}

	//promo
	public function promotion(){
		$this->db->select('*');
		$this->db->from('d_promo');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}	

	//FRONTEND QUERY
	// tampil home
	public function tampil_home(){
		$this->db->select('*');
		$this->db->from('d_produk');
		$this->db->join('d_kategori', 'd_kategori.id_kategori = d_produk.id_kategori');	
		$this->db->limit(8,'desc');
		$query = $this->db->get();
		return $query->result();
	}
	//promo tampil
	public function colek_omo(){
		$this->db->select('*');
		$this->db->from('d_promo');
		$this->db->join('d_produk', 'd_produk.id_produk = d_promo.id_produk');	
		$this->db->join('d_kategori', 'd_kategori.id_kategori = d_produk.id_produk');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}
	//promo aktif
	public function promo_aktif(){
		$hasil = $this->db->where('status', 'aktif')
						  ->get('d_promo');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}

	//model fungsi mendapatkan produk perkategori
	public function find_prod($id_kategori)
    {
		$hasil = $this->db->where('id_kategori',$id_kategori)
		 				  ->get('d_produk');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    //model fungsi detail produk
    public function detail_produk($id_produk)
    {
		$this->db->query("update d_produk set dilihat=dilihat+1 where id_produk='$id_produk'");
		 $hasil = $this->db->join('d_kategori', 'd_kategori.id_kategori = d_produk.id_kategori')
       					 ->where('id_produk',$id_produk)
       					 ->limit(1)->get('d_produk');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }

    }

   


    //model fungsi mendapatkan produk di home
    public function tampil_produk($sampai,$dari){
		$this->db->select('*');
		$this->db->from('d_produk');
		$this->db->join('d_kategori', 'd_kategori.id_kategori = d_produk.id_kategori');	
		$this->db->order_by('id_produk','desc',$sampai,$dari);
		$this->db->limit('8');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
        $results = $query->result();
    	}
    	return $results;
	}

	//model fungsi untuk paging1
	public function lihat($sampai,$dari){
		$query = $this->db->order_by('id_produk','desc')->get('d_produk',$sampai,$dari);
		return $query->result();
	}
	
	//model fungsi untuk paging2
	public function jumlah(){
		$query = $this->db->get('d_produk');
		return $query->num_rows();
	}

	//model fungsi untuk produk lainnya
	public function lainnya(){
		$this->db->select('*');
		$this->db->from('d_produk');
		$this->db->join('d_kategori', 'd_kategori.id_kategori = d_produk.id_kategori');
		$this->db->order_by('id_produk','desc');
		$this->db->limit('3');
		$query = $this->db->get();
		return $query->result();

	}

	//model fungsi top koleksi
	public function top_koleksi(){
		$this->db->select('*');
		$this->db->from('d_produk');
		$this->db->join('d_kategori', 'd_kategori.id_kategori = d_produk.id_kategori');	
		$this->db->order_by('dilihat','desc');
		$this->db->limit('3');
		$query = $this->db->get();
		return $query->result();
	}


	//model fungsi mendapatkan produk didetail produk sejenis
    public function kat_prod(){
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori');	
		$this->db->order_by('id_produk','desc');
		$this->db->limit('3');
		$query = $this->db->get();
		return $query->result();
    }

    //modelpencarian
    public function cari_produk($keyword){
    	$this->db->select('*');
    	$this->db->from('d_produk');
    	$this->db->like('nama_produk', $keyword);
		$query = $this->db->get();
		return $query;
    }

    //model komentar
    public function komentari($komen){
    	$this->db->insert('d_komentar', $komen);
    }


}

