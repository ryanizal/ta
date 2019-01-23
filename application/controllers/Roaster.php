<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roaster extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mroaster');
		$this->load->model('Mkopi');
	}

	public function index()
	{
		$data['nama_roaster'] = $_SESSION['roaster']['nama_roaster'];
		$idr = $_SESSION['roaster']['id_roaster'];
		// print_r($data);

		$data['new'] = $this->Mkopi->tampil_kopi_roaster(2,$idr);

		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/main', $data);
		$this->load->view('user/roaster/footer');
	}

	function tambah_kopi()
	{
		$input = $this->input->post();
		$idr = $_SESSION['roaster']['id_roaster'];


		if($input)
		{
			$input['id_roaster'] = $idr;
			$this->Mkopi->save_kopi($input, $_FILES);
			redirect('roaster/list_kopi');
		}

		$data['profile_roast'] = $this->Mkopi->profile_roast();

		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/tambah_kopi',$data);
		$this->load->view('user/roaster/footer');
	}

	function list_kopi()
	{
		$idr = $_SESSION['roaster']['id_roaster'];

		$this->load->view('user/roaster/header');
		$data['new'] = $this->Mkopi->tampil_kopi_roaster_list($idr);
		// $data['kopi']=$this->Mkopi->view_kopi();
		$this->load->view('user/roaster/daftar_kopi', $data);
		$this->load->view('user/roaster/footer');
	}

	function profile()
	{
		$r['id_roaster'] = $_SESSION['roaster']['id_roaster'];
		$r['nama_roaster'] = $_SESSION['roaster']['nama_roaster'];
		$r['username_roaster'] = $_SESSION['roaster']['username_roaster'];
		$r['deskripsi_roaster'] = $_SESSION['roaster']['deskripsi_roaster'];
		$r['alamat_roaster'] = $_SESSION['roaster']['alamat_roaster'];
		$r['telp_roaster'] = $_SESSION['roaster']['telp_roaster'];
		$r['foto_roaster'] = $_SESSION['roaster']['foto_roaster'];
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/profile',$r);
		$this->load->view('user/roaster/footer');
	}

	function edit_profile()
	{
		$input = $this->input->post(); 

		if($input){
			
			$this->Mroaster->edit_roaster($input, $id_roaster);
			redirect('roaster/profile');
		}
		$r['id_roaster'] = $_SESSION['roaster']['id_roaster'];
		$r['nama_roaster'] = $_SESSION['roaster']['nama_roaster'];
		$r['username_roaster'] = $_SESSION['roaster']['username_roaster'];
		$r['password_roaster'] = $_SESSION['roaster']['password_roaster'];
		$r['deskripsi_roaster'] = $_SESSION['roaster']['deskripsi_roaster'];
		$r['alamat_roaster'] = $_SESSION['roaster']['alamat_roaster'];
		$r['telp_roaster'] = $_SESSION['roaster']['telp_roaster'];
		$r['foto_roaster'] = $_SESSION['roaster']['foto_roaster'];
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/edit_profile',$r);
		$this->load->view('user/roaster/footer');
	}

	function detail_kopi($id_kopi)
	{
		$get['k'] = $this->Mkopi->get_kopi($id_kopi);
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/detail_kopi',$get);
		$this->load->view('user/roaster/footer');
	}

	function edit_kopi($id_kopi){
		$input = $this->input->post(); 

		if($input)
		{
			
			$this->Mkopi->edit_kopi($input, $_FILES, $id_kopi);
			redirect('Roaster/list_kopi');
		}
		$data['k'] = $this->Mkopi->get_kopi($id_kopi);
		$data['profile_roast'] = $this->Mkopi->profile_roast();
		

		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/edit_kopi',$data);
		$this->load->view('user/roaster/footer');
	}

	

	function hapus_kopi($id_kopi){
		$this->Mkopi->hapus_kopi($id_kopi);
		redirect('Roaster/list_kopi');


	}

	function logout()
	{
		$this->session->unset_userdata('roaster');
		redirect('welcome','refresh');
	}

}

/* End of file Roaster.php */
/* Location: ./application/controllers/Roaster.php */