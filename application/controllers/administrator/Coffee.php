<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coffee extends CI_Controller { 

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mkopi');
		$this->load->model('Mroaster');
	}

	public function index()
	{
		$data['kopi'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'=>function($query)
		{
			$query->limit(5);
		}])->get();

		$this->load->view('admin/header');
		$this->load->view('admin/coffee/tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah()
	{
		$input = $this->input->post();

		$this->form_validation->set_rules('nama_kopi', 'Coffee name', 'required');
		$this->form_validation->set_rules('origin', 'Place Of Origin', 'required');
		$this->form_validation->set_rules('roast_prof_id_roast_prof', 'Roast Profile', 'required');
		$this->form_validation->set_rules('proses_kopi_id_proses_kopi', 'Process', 'required');
		$this->form_validation->set_rules('jenis_kopi_id_jenis_kopi', 'Variety', 'required');

 		// $this->form_validation->set_rules('tastes[]', 'Tastes Notes at Least 1', 'required');
 		// $this->form_validation->set_rules('photos', 'Photos', 'required');

		if($this->form_validation->run() == TRUE)
		{

			$input['tastes'] = $input['tastes'];
			//print_r($input['tastes']);
			// print_r($_POST['tastes']);
			//die();
			$this->Mkopi->save_kopi($input, $_FILES);
			redirect('administrator/coffee');			
		} else {
			$data['eror']=validation_errors();
		}
		
		$data['profile_roast'] = $this->Mkopi->profile_roast();
		$data['jenis_kopi'] = $this->Mkopi->jenis_kopi();
		$data['proses_kopi'] = $this->Mkopi->proses_kopi();
		$data['tastes'] = $this->Mkopi->tastes(); 
		$data['roaster'] = $this->Mroaster->view_roaster(); 
		$this->load->view('admin/header');
		$this->load->view('admin/coffee/tambah_kopi', $data); 
		$this->load->view('admin/footer');
	}

	function detail($id_kopi){

		
		$data['k'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'=>function($query)
		{
			$query->limit(5);
		}])->where('id_kopi', $id_kopi)->get();

		//print_r($data['k']);
		// die();
		// $data['photos'] = $this->Mkopi->convertToFileuploader($kopi->foto);
		
		$this->load->view('admin/header'); 
		$this->load->view('admin/coffee/detail_kopi',$data);
		
		$this->load->view('admin/footer');

	}

	function hapus($id_kopi){
		$this->Mkopi->hapus_kopi($id_kopi);
		redirect('administrator/Coffee');


	}

	// function edit($id_kopi){
	// 	$input = $this->input->post(); 

	// 	if($input){
			
			// $this->Mkopi->edit_kopi($input, $_FILES, $id_kopi);
	// 		redirect('administrator/Coffee');
	// 	}

	// 	$data['kopi'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->where('id_kopi',$id_kopi)->get();

	// 	$data['profile_roast'] = $this->Mkopi->profile_roast();
	// 	$data['jenis_kopi'] = $this->Mkopi->jenis_kopi();
	// 	$data['proses_kopi'] = $this->Mkopi->proses_kopi();
	// 	$data['tastes'] = $this->Mkopi->tastes();

	// 	$this->load->view('admin/header');
	// 	$this->load->view('admin/coffee/edit_kopi',$data);
	// 	$this->load->view('admin/footer');
	// }

		function edit($id_kopi)
	{
		$input = $this->input->post(); 
		$data['profile_roast'] = Mprofil::get();
		$data['jenis_kopi'] = MjenisEL::get();
		$data['proses_kopi'] = Mproses::get();
		$data['tastes'] = MtastesEL::get();
		$data['kopi'] = $kopi = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->findOrFail($id_kopi);

		if ($input)
		{
			$this->Mkopi->edit_kopi($input, $_FILES, $id_kopi);
			redirect('administrator/Coffee');
		}
		// $data['k'] = $this->Mkopi->get_kopi($id_kopi);
		// $data['profile_roast'] = $this->Mkopi->profile_roast();
		// $data['jenis_kopi'] = $this->Mkopi->jenis_kopi();
		// $data['proses_kopi'] = $this->Mkopi->proses_kopi();

		$data['photos'] = $this->Mkopi->convertToFileuploader($kopi->foto);

		$this->load->view('admin/header');
		$this->load->view('admin/coffee/edit_kopi',$data);
		$this->load->view('admin/footer');
	}

}
