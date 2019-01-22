<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function index()
	{
		$this->load->view('user/member/header');
		$this->load->view('user/member/main');
		$this->load->view('user/member/footer');
	}

	function profile()
	{
		$this->load->view('user/member/header');
		$this->load->view('user/member/profile');
		$this->load->view('user/member/footer');
	}

	function update()
	{
		$this->load->view('user/member/header');
		$this->load->view('user/member/edit_profile');
		$this->load->view('user/member/footer');
	}

	function tampil_kopi()
	{
		$this->load->view('user/member/header');
		$this->load->view('user/member/detail_kopi');
		$this->load->view('user/member/footer');
	}

	function edit_profile(){
		// $id_member
		// $input = $this->input->post(); 

		// if($input){

		// $this->Mmember->edit_member($input, $id_member);
		// redirect('administrator/Member');
		// }
		// $data['m'] = $this->Mmember->get_member($id_member);

		$this->load->view('user/member/header');
		$this->load->view('user/member/edit_profile');
		$this->load->view('user/member/footer');
	}

}

/* End of file Member.php */
/* Location: ./application/controllers/pengguna/Member.php */