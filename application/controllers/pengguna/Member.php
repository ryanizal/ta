<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function index()
	{
		$this->load->view('user/member/header');
		$this->load->view('user/member/main');
		$this->load->view('user/member/footer');
	}

}

/* End of file Member.php */
/* Location: ./application/controllers/pengguna/Member.php */