<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('user/main');
		$this->load->view('user/footer');
	}

	public function konten()
	{
		$this->load->view('user/header');
		$this->load->view('user/tampil_kopi');
		$this->load->view('user/footer');
	}

	public function login()
	{
		$this->load->view('user/login');
	}

	public function login_roaster()
	{
		$this->load->view('user/roaster/login');
	}

	public function signup()
	{
		$this->load->view('user/signup');
	}

	public function signup_roaster()
	{
		$this->load->view('user/roaster/signup');
	}
}
