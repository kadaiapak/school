<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('backend/login');
	}

	public function check_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array('email' => $email, 'password' => $password);
		$query = $this->db->get_where('admin', $data);
		
		if($query->num_rows() > 0){
			$row = $query->row();

			$this->session->set_userdata('login_type', 'admin');
			$this->session->set_userdata('admin_login', '1');
			$this->session->set_userdata('admin_id', $row->admin_id);
			$this->session->set_userdata('login_user_id', $row->admin_id);
			$this->session->set_userdata('name', $row->name);

			$this->session->set_flashdata('flash_message', get_phrase('Login Successfull'));
			redirect(base_url().'admin/dashboard');
		}
		$this->session->set_flashdata('error_message', get_phrase('Invalid Login Details'));
		redirect(base_url().'login', 'refresh');
	}
}
