<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* --------------------------------------------
Author : Rendy Permana
Email  : rendypermana153@gmail.com 
-----------------------------------------------*/

class Page_produk extends CI_Controller {

	public function __construct(){
		parent::__construct();

		//load model produk
		$this->load->model('model_produk');
		//load model kategori
		$this->load->model('model_kategori');
		//load model blog
		$this->load->model('model_blog');
		//load model setting
		$this->load->model('model_setting');
		$this->load->library('Rest_ongkir');
		$this->load->model('model_setting');
		$this->load->model('model_slide');
		
	}

	//controller untuk detail
	public function detail($id_produk){
		$data['telpon'] = $this->model_setting->telpon();
		$data['top'] = $this->model_produk->top_koleksi();
		$data['kategori'] = $this->model_kategori->semua_kategori();
		$data['other'] = $this->model_produk->lainnya();
		$data['produk'] =$this->model_produk->detail_produk($id_produk);
		$this->load->view('detail_produk',$data);
	}

	//menampilkan data per kategori
	public function koleksi($id_kategori){
		$data['ket'] = $this->model_kategori->find_id($id_kategori);
		$data['top'] = $this->model_produk->top_koleksi();
		$data['kategori'] = $this->model_kategori->semua_kategori();
		$data['produk'] = $this->model_produk->find_prod($id_kategori);
		$this->load->view('kategori_produk',$data);
	}

	//komentari
	public function komentar(){
		if($this->session->userdata('group') != '2'){
			$this->session->set_flashdata('error','Maaf, anda belum login!');
			redirect('login');
		}else{
		$komen = array(
			'id_komen' 	=> set_value('id_komen'),
			'id_produk'	=> set_value('id_produk'),
			'komen'		=> set_value('komen')
		);
		$this->model_produk->komentari($komen);
		$this->load->view('home');
		}
	}

	//cari
	public function cari(){
		$data['search']="";
		$post_kata = $this->input->post('search');
		if(!empty($post_kata)){
	  	$data['search'] = $this->input->post('search');
	  	$this->session->set_userdata('pencarian_produk', $data['search']);
		}else{
	  	$data['search'] = $this->session->userdata('pencarian_produk');
    	}
    
		$data['search_produk'] = $this->model_produk->cari_produk($data['search']);
		$data['top'] = $this->model_produk->top_koleksi();
		$data['kategori'] = $this->model_kategori->semua_kategori();
		$this->load->view('pencarian', $data);

	}

	//add to cart
	public function add_to_cart($id_produk)
	{
		$produk = $this->model_produk->detail_produk($id_produk);
		$data = array(
					   'id_produk'      => $produk->id_produk,
					   'harga'   => $produk->harga,
					   'nama_produk'    => $produk->nama_produk
					);
		$respon = $this->cart->insert($data);
		// var_dump($respon);
		// exit();

		$this->cart->insert($data);
		redirect(base_url());
	}

	//cart
	public function cart(){
		// displays what currently inside the cart
		//print_r($this->cart->contents());
		$this->load->view('show_cart');
	}

	public function jne(){
		$this->load->view('jne');
	}

	public  function get_cost($from, $to){
		$rest = new REST_Ongkir(array(
        'server' => 'http://api.ongkir.info/'
    	));
    
	    $result = $rest->post('cost/find', array(

	        'from' 	=> $from,
			'to' 	=> $to,
			'weight' => 1000,
			'courier' => 'jne',
	        'API-Key' 	=> 'a8f16b7fcc6492351877066287736867'
	        
					   // 'from'      => $from,
					   // 'to'     => $to,
					   // 'weight'	=> 1000,
					   // 'courier'	=> 'jne',
					   // 'API-Key' 	=> 'a8f16b7fcc6492351877066287736867'
					
	    ));


    
	    try{
	        $status = $result['status'];
	        
	        // Handling the data
	        if ($status->code == 0)
	        {
	            $prices = $result['price'];
	            $city	= $result['city'];
	            
	            echo 'Ongkos kirim dari ' . $city->origin . ' ke ' . $city->destination . '<br /><br />';
	            
	            foreach ($prices->item as $item)
	            {
	                echo 'Layanan: ' . $item->service . ', dengan harga : Rp. ' . $item->value . ',- <br />';
	            }	
	        }
	        else
	        {
	            echo 'Tidak ditemukan ';
	        }
	        
	    }
	    catch (Exception $e)
	    {
	        echo 'Processing error.';
	    }

	}





}

