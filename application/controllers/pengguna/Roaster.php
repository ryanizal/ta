<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roaster extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mroaster');
	}

	public function index()
	{
		
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/main');
		$this->load->view('user/roaster/footer');
	}

	function tambah_kopi()
	{
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/tambah_kopi');
		$this->load->view('user/roaster/footer');
	}

	function list_kopi()
	{
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/daftar_kopi');
		$this->load->view('user/roaster/footer');
	}

}

/* End of file Roaster.php */
/* Location: ./application/controllers/pengguna/Roaster.php */