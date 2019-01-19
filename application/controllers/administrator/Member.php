<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmember');
	}
	public function index()
	{
		$this->load->view('admin/header');
		$data['member']=$this->Mmember->view_member();
		$this->load->view('admin/member/tampil', $data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$input = $this->input->post();
		if($input)
		{
			$this->Mmember->save_member($input);
			redirect('administrator/member');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/member/tambah_member');
		$this->load->view('admin/footer');
	}

	function detail($id_member){


		$get['m'] = $this->Mmember->get_member($id_member);
		$this->load->view('admin/header'); 
		$this->load->view('admin/member/member_detail', $get);
		$this->load->view('admin/footer');

	}

	function hapus($id_member){
			$this->Mmember->hapus_member($id_member);
			redirect('administrator/Member');


	}

	function edit($id_member){

		$input = $this->input->post(); 

		if($input){
			
		$this->Mmember->edit_member($input, $id_member);
		redirect('administrator/Member');
		}
		$data['m'] = $this->Mmember->get_member($id_member);

		$this->load->view('admin/header');
		$this->load->view('admin/member/edit_member',$data);
		$this->load->view('admin/footer');
	}

}
