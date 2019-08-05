<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mroaster');
		$this->load->model('Mmember');
		$this->load->model('Mkopi');
		$this->load->model('Mkomentar');

		// $this->load->model('MkopiEL');
		// $this->load->model('MroasterEL');
		// $this->load->model('MtastesEL');

	}

	public function index()
	{ 
		// $data['kopi'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','five_tastes'])->orderBy('id_kopi', 'desc')->get();

		$data['kopi'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->orderBy('id_kopi','desc')->skip($this->uri->segment(3))->take(6)->get();

		$this->load->library('pagination');
		
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		// $config['full_tag_open'] = '<p>';
		// $config['full_tag_close'] = '</p>';
		$config['base_url'] = site_url('welcome/index/');//http://example.com/index.php/test/page/';
		$config['total_rows'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->count();
		$config['per_page'] = 6;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();
		// print_r($data['kopi']->toArray());
		// die();
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
		$this->form_validation->set_rules('username_member', 'Username', 'required|is_unique[member.username_member]');
		// $this->form_validation->set_rules('username_member', 'Username', 'is_unique[member.username_member]');
		$this->form_validation->set_rules('password_member', 'Password', 'required');
		$this->form_validation->set_rules('nama_member', 'Fullname', 'required');
		// $this->form_validation->set_rules('foto_member', 'Profile Picture', 'required');
		$this->form_validation->set_message('is_unique', '%s has already registered. Choose another username');

		// if ($inputan($_FILES['userfile']['name']))
		// {
		// 	$this->form_validation->set_rules('userfile', 'Document', 'required');
		// }

		if ($this->form_validation->run() == TRUE) 
		{
			$this->Mmember->save_member($inputan);
			echo "<script>alert('Registration success, please login');</script>";

			redirect('Welcome/login','refresh');
		}

		else
		{
			$data['eror']=validation_errors();
		}
		$this->load->view('user/signup',$data);
	}

	public function signup_roaster()
	{
		$this->form_validation->set_rules('username_roaster', 'Username', 'required|is_unique[roaster.username_roaster]');
		// $this->form_validation->set_rules('username_roaster', 'Username', 'is_unique[roaster.username_roaster]');
		$this->form_validation->set_rules('password_roaster', 'Password', 'required');
		$this->form_validation->set_rules('nama_roaster', 'Fullname', 'required');
		$this->form_validation->set_rules('foto_roaster', 'Profile Picture', 'required');
		$this->form_validation->set_message('is_unique', '%s has already registered. Choose another username');

		$inputan=$this->input->post();
		if ($this->form_validation->run() == TRUE) 
		{
			$this->Mroaster->save_roaster($inputan);
			echo "<script>alert('Registration success, please login');</script>";
			redirect('Welcome/login_roaster','refresh');
		}
		else
		{
			$data['eror']=validation_errors();

		}
		$this->load->view('user/roaster/signup', $data);
	}

	function detail_kopi($id_kopi)
	{

		$data['k'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->where('id_kopi', $id_kopi)->get();
		$data['komentar'] = MkomentarEL::with(['kopi', 'roaster', 'member'])->where('kopi_id_kopi', $id_kopi)->get();
		
		$this->load->view('user/detail_kopi',$data);
		$this->load->view('user/footer');
	}

	function cari_kopi($keyword = null)
	{
		// var_dump('hai');die();
		$keyword = $this->input->post('keyword');
		$data['k'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->where('nama_kopi', 'like', '%' . $keyword . '%')->get();
		// $k = $keyword;
		$ceks=count($data['k']);
		// print_r($ceks);
		// die();
		if ($ceks!=0) {
			$this->load->view('user/hasil_cari',$data);
		} 
		else {
			echo "<script>alert('No data Found!');</script>";
			redirect('','refresh');
		}

	}
}
