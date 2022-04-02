<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
	}

    public function index(){
        $data['admin'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['js'] = $this->load->view('include/js.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['dashboardcss'] = $this->load->view('include/dashboard.php', NULL, TRUE);
        $this->load->view('aboutus', $data);
    }

    public function user(){
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['admin'] = NULL;
        $data['js'] = $this->load->view('include/js.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['homecss'] = $this->load->view('include/home.php', NULL, TRUE);
        $this->load->view('user/aboutusUser', $data);
    }

}