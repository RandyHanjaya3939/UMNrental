<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('CustomerModel');
		$this->load->model('BarangModel');
		$this->load->model('OrderModel');
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['admin'] = NULL;
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['dashboardcss'] = $this->load->view('include/dashboard.php', NULL, TRUE);
			$data['homecss'] = $this->load->view('include/home.php', NULL, TRUE);
			$this->load->view('user/homeuser', $data);
		} else {
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['homecss'] = $this->load->view('include/home.php', NULL, TRUE);
			$this->load->view('dashboardview', $data);
		}
	}

	public function admin()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = NULL;
		$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['homecss'] = $this->load->view('include/home.php', NULL, TRUE);
		$this->load->view('user/homeuser', $data);
	}
	public function rent()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['admin'] = NULL;
		$data['barang'] = $this->BarangModel->ShowData();
		$data['test'] = $this->OrderModel->cartLama($data['user']);
		if($data['test'] == NULL){
			$data['test'] = NULL;
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
			$this->load->view('user/rent', $data);
		}else{
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
			$this->load->view('user/rent', $data);
		}
	}
	public function rentAdmin()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = NULL;
		$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
		$this->load->view('user/rent', $data);
	}
	public function cartAdd($id_barang,$lamasewa = 0)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['admin'] = NULL;
		if($lamasewa == 0){
			$lamasewa = $this->input->post("lamasewa");
		}
		$data['check'] = $this->OrderModel->check($data['user'],$id_barang);
		if($data['check'] == NULL){
			// $lamasewa = $this->input->post('lamasewa');
			$data['cart'] = $this->OrderModel->cartData($id_barang,$lamasewa,$data['user']);
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
			$this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">Berhasil memasukkan barang ke Cart!!</div>');
			$this->load->view('user/cart', $data);
		}else{
			$data['cart'] = $this->OrderModel->cartShow($data['user']);
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
			$this->session->set_flashdata('alert','<div class="alert alert-danger" role="alert">Hanya bisa memesan satu barang untuk setiap user!!</div>');
			$this->load->view('user/cart',$data);
		}
	}
	public function cart()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['admin'] = NULL;
		$data['cart'] = $this->OrderModel->cartShow($data['user']);
		$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
		$this->load->view('user/cart', $data);
	}

	public function deleteCart($id_cart){
		$this->OrderModel->DeleteCart($id_cart);
		redirect(base_url('index.php/welcome/cart'));
	}
	public function cartAdmin()
	{
		$data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = NULL;
		$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
		$this->load->view('user/cart', $data);
	}
	public function orderAdd(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['admin'] = NULL;
		$data['cart'] = $this->OrderModel->cartOrder($data['user']);
		$banyak = count($data['cart']);
		for($i = 0 ; $i < $banyak; $i++){
			$this->OrderModel->addOrder($data['cart'][$i]);
			$this->OrderModel->kosongCart($data['cart'][$i]);
		}
		$data['order'] = $this->OrderModel->ShowOrderUser($data['user']);
		$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
		$this->load->view('user/order', $data);
	}

	public function order(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['admin'] = NULL;
		$data['order'] = $this->OrderModel->ShowOrderUser($data['user']);
		$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
		$this->load->view('user/order', $data);
	}
	public function profile()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['detail'] = $this->CustomerModel->DetailCustomer($data['user']);
		$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['homecss'] = $this->load->view('include/home.php', NULL, TRUE);
		$this->load->view('user/profileuser', $data);
	}

	public function search(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['admin'] = NULL;
		$kata = $this->input->post('lokasi');
		$data['barang'] = $this->BarangModel->searchBarang($kata);
		$data['test'] = $this->OrderModel->cartLama($data['user']);
		if($data['test'] == NULL){
			$data['test'] = NULL;
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
			$this->load->view('user/rent', $data);
		}else{
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
			$this->load->view('user/rent', $data);
		}
	}

	public function changeStatus($id_order){
		$status = $this->input->post('status');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['admin'] = NULL;
		$this->OrderModel->ChangeOrderStatus($id_order,$status);
		$data['order'] = $this->OrderModel->ShowOrderUser($data['user']);
		$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['carouselcss'] = $this->load->view('include/carousel.php', NULL, TRUE);
		$this->load->view('user/order', $data);
	}
}
