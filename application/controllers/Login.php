<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

		$this->form_validation->set_rules('pass', 'Password', 'required|trim');

		if( $this->form_validation->run() == false){
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['logincss'] = $this->load->view('include/login.php', NULL, TRUE);
			$this->load->view('loginview', $data);
        } else{
			$this->_login();
        }

	}

	private function _login(){
		$email = $this->input->post("email");
		$pass = $this->input->post("pass");

		$user = $this->db->get_where("user",['email' => $email])->row_array();

		if($user){
			if(password_verify($pass, $user['pass'])){
				$data = [
				 	'email' => $user['email'],
					'role' => $user['role']
				];
				$this->session->set_userdata($data);
				if($user['role'] == 1){
					redirect(base_url('index.php/Admin'));
				}else{
					redirect(base_url());
				}

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong password</div>');
				
				redirect(base_url('index.php/login'));
			}
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email is not registered</div>');
            redirect(base_url('index.php/login'));
        }
	}

	public function registration(){

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has aleardy registered!'
        ]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('notelp', 'NoTelp', 'required|trim|numeric');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]',[
            'matches' => 'password dont match',
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if( $this->form_validation->run() == false){
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$this->load->view('registrationview', $data);
        } else{
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'notelp' => htmlspecialchars($this->input->post('notelp', true)),
                'pass' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => 2
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! Your account has been created. Please login</div>');
            redirect(base_url('index.php/login'));
        }
	}

	public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">you have been logout!</div>');
        redirect(base_url('index.php/login'));
    }
}
