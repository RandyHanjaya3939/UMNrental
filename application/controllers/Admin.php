<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('BarangModel');
        $this->load->model('CustomerModel');
		$this->load->model('OrderModel');
	}


    public function index(){
        $data['admin'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['js'] = $this->load->view('include/js.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['barang'] = $this->BarangModel->ShowData();
		$data['orderan'] = $this->OrderModel->ShowData();
        $data['dashboardcss'] = $this->load->view('include/dashboard.php', NULL, TRUE);
        $this->load->view('admin/dashboardviewadmin', $data);
    }

    public function barangview(){
        $data['barang'] = $this->BarangModel->ShowData();
        $data['admin'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['js'] = $this->load->view('include/js.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['dashboardcss'] = $this->load->view('include/dashboard.php', NULL, TRUE);
        $this->load->view('admin/crudbarang', $data);
    }

    public function customer(){
        $data['customer'] = $this->CustomerModel->ShowData();
        $data['admin'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['js'] = $this->load->view('include/js.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['dashboardcss'] = $this->load->view('include/dashboard.php', NULL, TRUE);
        $this->load->view('admin/customer', $data);
    }

    public function order(){
		$data['orderan'] = $this->OrderModel->ShowData();
        $data['admin'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['js'] = $this->load->view('include/js.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['dashboardcss'] = $this->load->view('include/dashboard.php', NULL, TRUE);
        $this->load->view('admin/order', $data);
    }

    public function addBarang(){
        $this->form_validation->set_rules('namabarang','Nama Barang', 'required');
		$this->form_validation->set_rules('harga','Harga','required|numeric',[
			'numeric' => '*You should input a number not string']);
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		$this->form_validation->set_rules('stock','Stock','required');


		if($this->form_validation->run() == false){
            $data['admin'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
            $data['js'] = $this->load->view('include/js.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $data['dashboardcss'] = $this->load->view('include/dashboard.php', NULL, TRUE);
			
			$this->load->view('admin/addbarang',$data);
		}else{

			$namabarang = $this->input->post('namabarang');
			$harga = $this->input->post('harga');
			$deskripsi = $this->input->post('deskripsi');
			$stock = $this->input->post('stock');

			$config['upload_path']          = './assets/barang/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']            = $namabarang;
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 7680;
				
			$this->load->library('upload', $config);

			if($this->upload->do_upload('gambar')){
				$gambar = $this->upload->data("file_name");
			}

			$this->BarangModel->AddBarang($namabarang,$harga,$deskripsi,$stock,$gambar);

			redirect(base_url('index.php/admin/barangview'));
		}
    }

    public function editBarang($param){
        $this->form_validation->set_rules('namabarang','Nama Barang', 'required');
		$this->form_validation->set_rules('harga','Harga','required|numeric',[
			'numeric' => '*You should input a number not string',
		]);
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		$this->form_validation->set_rules('stock','Stock','required');

		if($this->form_validation->run() == false){

            $data['admin'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
            $data['barang'] = $this->BarangModel->ShowDetail($param);
            $data['js'] = $this->load->view('include/js.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $data['dashboardcss'] = $this->load->view('include/dashboard.php', NULL, TRUE);
			
			$this->load->view('admin/editbarang',$data);
		}else{
			$nama = $this->input->post('namabarang');
			$harga = $this->input->post('harga');
			$deskripsi = $this->input->post('deskripsi');
			$stock = $this->input->post('stock');

			$config['upload_path']          = './assets/barang/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']            = $nama;
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 7680;
				
			$this->load->library('upload', $config);

			if($this->upload->do_upload('gambar')){
				$gambar = $this->upload->data("file_name");
			}

			$this->BarangModel->editBarang($param,$nama,$harga,$deskripsi,$stock,$gambar);
			redirect(base_url('index.php/admin/barangview'));
		}
    }

	public function detailBarang($param){
		$data['admin'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->BarangModel->ShowDetail($param);
		$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
		$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['dashboardcss'] = $this->load->view('include/dashboard.php', NULL, TRUE);
		$this->load->view('admin/detailbarang',$data);
	}

	public function editOrder($param){

		$this->form_validation->set_rules('status','Status', 'required');

		if($this->form_validation->run() == false){

            $data['admin'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
            $data['order'] = $this->OrderModel->ShowDetail($param);
            $data['js'] = $this->load->view('include/js.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $data['dashboardcss'] = $this->load->view('include/dashboard.php', NULL, TRUE);
			
			$this->load->view('admin/editorder',$data);
		}else{
			$status = $this->input->post('status');
			$id_barang = $this->input->post('id_barang');
			$this->OrderModel->editOrder($param,$status,$id_barang);
			redirect(base_url('index.php/admin/order'));
		}

	}

    public function deleteBarang($param){
        $this->BarangModel->DeleteBarang($param);
		redirect(base_url('index.php/admin/barangview'));
    }

	public function deleteCustomer($param){
		$this->CustomerModel->DeleteCustomer($param);
		redirect(base_url('index.php/admin/customer'));
	}

	public function deleteOrder($param){
		$this->OrderModel->DeleteOrder($param);
		redirect(base_url('index.php/admin/order'));
	}
}