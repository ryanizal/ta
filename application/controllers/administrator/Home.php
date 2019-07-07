<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Mkopi');
		$this->load->model('Mroaster');
		$this->load->model('Mmember');

		$data['kopi']= $this->Mkopi->jumlah_kopi();
		$data['member']= $this->Mmember->jumlah_member();
		$data['roaster']= $this->Mroaster->jumlah_roaster();
		

		$this->load->view('admin/header');
		$this->load->view('admin/home', $data);
		$this->load->view('admin/footer');
	}

	function logout()
	{
		$this->session->unset_userdata('admin');
		redirect('welcome','refresh');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/administrator/Home.php */