<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mroaster');
		$this->load->model('Mmember');
		$this->load->model('Mkopi');
		// $this->load->model('MkopiEL');
		// $this->load->model('MroasterEL');
		// $this->load->model('MtastesEL');

	}

	public function index()
	{
		$data['kopi'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'=>function($query)
		{
			$query->limit(5);
		}])->get();
// print_r($data);
// die();
		// $data['kopi']=$this->Mkopi->view_kopi();
		$data['new'] = $this->Mkopi->tampil_kopi_member(0);
		$this->load->view('user/main',$data);
		$this->load->view('user/footer');
	}

	// public function konten()
	// {
	// 	$this->load->view('user/header');
	// 	$this->load->view('user/tampil_kopi');
	// 	$this->load->view('user/footer');
	// }

	public function login()
	{
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$cek = $this->Mmember->login_member($inputan);

			
			// print_r ($cek);
			
			if ($cek == "sukses") 
			{
				
				redirect('member','refresh');
			}
			else
			{
				echo "<script>alert('Username and Password didnt match');</script>";
			}
		} 
		$this->load->view('user/login');
	}

	public function login_roaster()
	{
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$cek = $this->Mroaster->login_roaster($inputan);

			
			// print_r ($cek);
			
			if ($cek == "sukses") 
			{
				
				redirect('roaster/','refresh');
			}
			else
			{
				echo "<script>alert('username and Password Didnt match');</script>";
			}
		} 
		$this->load->view('user/roaster/login');
	}

	public function signup()
	{
		$inputan=$this->input->post();
		if ($inputan) 
		{
			$this->Mmember->save_member($inputan);
			echo "<script>alert('Registration success, please login');</script>";

			redirect('Welcome/login','refresh');
		}
		$this->load->view('user/signup');
	}

	public function signup_roaster()
	{
		$inputan=$this->input->post();
		if ($inputan) 
		{
			$this->Mroaster->save_roaster($inputan);
			redirect('Welcome/login_roaster','refresh');
		}
		$this->load->view('user/roaster/signup');
	}

	function detail_kopi($id_kopi)
	{
		$get['k'] = $this->Mkopi->get_kopi($id_kopi);

		$this->load->view('user/detail_kopi',$get);
		$this->load->view('user/footer');
	}

	function cari_kopi($keyword = null)
	{
		// var_dump('hai');die();
		$keyword = $this->input->post('keyword');
		$data['kopi']=$this->Mkopi->cari_kopi($keyword);
		$k = $keyword;
		$this->load->view('user/hasil_cari',$data);

	}
}
