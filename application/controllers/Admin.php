<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('backend/login');
	}

	public function dashboard()
	{
        $page_data['page_name'] = 'dashboard';
        $page_data['page_title'] = 'Admin Dashboard';
		$this->load->view('backend/index', $page_data);
	}
}
