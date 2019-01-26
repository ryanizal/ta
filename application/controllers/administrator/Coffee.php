<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coffee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mkopi');
	}

	public function index()
	{
		$this->load->view('admin/header');
		$data['kopi']=$this->Mkopi->view_kopi();
		$this->load->view('admin/coffee/tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$input = $this->input->post();
		if($input)
		{
			$this->Mkopi->save_kopi($input, $_FILES);
			redirect('administrator/coffee');
		}
		$data['profile_roast'] = $this->Mkopi->profile_roast();
		$data['jenis_kopi'] = $this->Mkopi->jenis_kopi();
		$data['proses_kopi'] = $this->Mkopi->proses_kopi();
		$this->load->view('admin/header');
		$this->load->view('admin/coffee/tambah_kopi', $data); 
		$this->load->view('admin/footer');
	}

	function detail($id_kopi){

		
		$get['k'] = $this->Mkopi->get_kopi($id_kopi);
		$this->load->view('admin/header'); 
		$this->load->view('admin/coffee/detail_kopi',$get);
		
		$this->load->view('admin/footer');

	}

	function hapus($id_kopi){
		$this->Mkopi->hapus_kopi($id_kopi);
		redirect('administrator/Coffee');


	}

	function edit($id_kopi){
		$input = $this->input->post(); 

		if($input){
			
			$this->Mkopi->edit_kopi($input, $_FILES, $id_kopi);
			redirect('administrator/Coffee');
		}
		$data['k'] = $this->Mkopi->get_kopi($id_kopi);
		$data['profile_roast'] = $this->Mkopi->profile_roast();
		$data['jenis_kopi'] = $this->Mkopi->jenis_kopi();
		$data['proses_kopi'] = $this->Mkopi->proses_kopi();

		$this->load->view('admin/header');
		$this->load->view('admin/coffee/edit_kopi',$data);
		$this->load->view('admin/footer');
	}

}
