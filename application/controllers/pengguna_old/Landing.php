<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
	
	}

	function tampil()
	{
		$this->load->view('user/header');
		$this->load->view('user/tampil_kopi');
		$this->load->view('user/footer');
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/user/Main.php */