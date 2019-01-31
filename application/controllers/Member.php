<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mkopi');
		$this->load->model('Mmember');
	}

	public function index()
	{
		$data['nama_member'] = $_SESSION['member']['nama_member'];
		$data['kopi']=$this->Mkopi->view_kopi();
		$data['new'] = $this->Mkopi->tampil_kopi_member(0);


		$this->load->view('user/member/header');
		$this->load->view('user/member/main', $data);
		$this->load->view('user/member/footer');
	}

	function profile()
	{
		$id_member= $_SESSION['member']['id_member'];
		$m['profile']=$this->Mmember->get_member($id_member);
		// $m['nama_member'] = $_SESSION['member']['nama_member'];
		// $m['username_member'] = $_SESSION['member']['username_member'];
		// $m['keterangan_member'] = $_SESSION['member']['keterangan_member'];

		$this->load->view('user/member/header');
		$this->load->view('user/member/profile',$m);
		$this->load->view('user/member/footer');
	}

	function edit_profile()
	{
		$input = $this->input->post(); 
		$id_member= $_SESSION['member']['id_member'];

		if($input)
		{

			$this->Mmember->edit_member($input, $id_member);
			redirect('Member/profile');
		}

		// $m['id_member'] = $_SESSION['member']['id_member'];
		// $m['nama_member'] = $_SESSION['member']['nama_member'];
		// $m['username_member'] = $_SESSION['member']['username_member'];
		// $m['password_member'] = $_SESSION['member']['password_member'];
		// $m['keterangan_member'] = $_SESSION['member']['keterangan_member'];
		// $m['foto_member'] = $_SESSION['member']['foto_member'];
		$m['profile'] = $this->Mmember->get_member($id_member);
		$this->load->view('user/member/header');
		$this->load->view('user/member/edit_profile',$m);
		$this->load->view('user/member/footer');
	}

	function detail_kopi($id_kopi)
	{
		$get['komentar'] = $this->Mkopi->tampil_komentar($id_kopi);
		$get['k'] = $this->Mkopi->get_kopi($id_kopi);
		$get['id_member'] = $_SESSION['member']['id_member'];

		$this->Mkopi->simpan_view($id_kopi, $get['id_member'], date("Y-m-d H:i:s"));
		$input = $this->input->post(); 

		if ($input)
		{
			$input['waktu_komentar'] = date("Y-m-d H:i:s");
			$input['id_member'] = $_SESSION['member']['id_member'];
			$input['id_kopi'] = $id_kopi;

			$this->Mkopi->simpan_komentar($input);
		}


		$this->load->view('user/member/header');
		$this->load->view('user/member/detail_kopi',$get);
		$this->load->view('user/member/footer');
	}

	function logout()
	{
		$this->session->unset_userdata('member');
		redirect('welcome','refresh');
	}

	function hapus_komentar($id_kopi, $id_komentar)
	{
		$this->Mkopi->hapus_komentar($id_komentar);
		redirect('Member/detail_kopi/'.$id_kopi.'','refresh');
	}

	function rekomendasi()
	{
		$this->load->view('user/member/header');
		$this->load->view('user/member/rekomendasi');
		$this->load->view('user/member/footer');

	}

	function hasil_rekomendasi()
	{
		$this->load->view('user/member/header');
		$this->load->view('user/member/hasil_rekomendasi');
		$this->load->view('user/member/footer');

	}

	// function edit_profile(){
	// 	// $id_member
	// 	// $input = $this->input->post(); 

	// 	// if($input){

	// 	// $this->Mmember->edit_member($input, $id_member);
	// 	// redirect('administrator/Member');
	// 	// }
	// 	// $data['m'] = $this->Mmember->get_member($id_member);

	// 	$this->load->view('user/member/header');
	// 	$this->load->view('user/member/edit_profile');
	// 	$this->load->view('user/member/footer');
	// }

}

/* End of file Member.php */
/* Location: ./application/controllers/pengguna/Member.php */