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
		
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/main');
		$this->load->view('user/roaster/footer');
	}

	function tambah_kopi()
	{
		$input = $this->input->post();
		if($input)
		{
			$this->Mkopi->save_kopi($input, $_FILES);
			redirect('pengguna/roaster/list_kopi');
		}

		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/tambah_kopi');
		$this->load->view('user/roaster/footer');
	}

	function list_kopi()
	{
		$this->load->view('user/roaster/header');
		$data['kopi']=$this->Mkopi->view_kopi();
		$this->load->view('user/roaster/daftar_kopi', $data);
		$this->load->view('user/roaster/footer');
	}

	function profile()
	{
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/profile');
		$this->load->view('user/roaster/footer');
	}

	function update_profile()
	{
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/edit_profile');
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

		if($input){
			
			$this->Mkopi->edit_kopi($input, $_FILES, $id_kopi);
			redirect('pengguna/Roaster/list_kopi');
		}
		$data['k'] = $this->Mkopi->get_kopi($id_kopi);

		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/edit_kopi',$data);
		$this->load->view('user/roaster/footer');
	}

	function edit_profile(){

		// $input = $this->input->post(); 

		// if($input){
			
		// $this->Mmember->edit_member($input, $id_member);
		// redirect('administrator/Member');
		// }
		// $data['m'] = $this->Mmember->get_member($id_member);

		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/edit_profile');
		$this->load->view('user/roaster/footer');
	}

	function hapus_kopi($id_kopi){
		$this->Mkopi->hapus_kopi($id_kopi);
		redirect('pengguna/Roaster/list_kopi');


	}

}

/* End of file Roaster.php */
/* Location: ./application/controllers/pengguna/Roaster.php */