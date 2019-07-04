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
		$this->load->view('admin/header');
		

		$data['roaster']=MroasterEL::with(['kopi'=>function($query)
			{
				$query->where('roaster_id_roaster','id_roaster')->count();
			}])->get();
		// print_r($data['roaster']);
		// die();
		$this->load->view('admin/roaster/tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$input = $this->input->post();
		if($input)
		{
			$this->Mroaster->save_roaster($input);
			redirect('administrator/roaster');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/roaster/tambah_roaster'); 
		$this->load->view('admin/footer');
	}

	function detail($id_roaster){


		$get['r'] = $this->Mroaster->get_roaster($id_roaster);
		$this->load->view('admin/header'); 
		$this->load->view('admin/roaster/roaster_detail', $get);
		$this->load->view('admin/footer');

	}

	function hapus($id_roaster){
		$this->Mroaster->hapus_roaster($id_roaster);
		redirect('administrator/roaster');


	}

	function edit($id_roaster){

		$input = $this->input->post(); 

		if($input){
			
			$this->Mroaster->edit_roaster($input, $id_roaster);
			redirect('administrator/roaster');
		}
		$data['r'] = $this->Mroaster->get_roaster($id_roaster);

		$this->load->view('admin/header');
		$this->load->view('admin/roaster/edit_roaster',$data);
		$this->load->view('admin/footer');
	}

}

/* End of file Roaster.php */
/* Location: ./application/controllers/administrator/Roaster.php */