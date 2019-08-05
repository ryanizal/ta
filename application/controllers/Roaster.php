 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Roaster extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		if (!@$_SESSION['roaster']['id_roaster']) {
			//echo "<script>alert('Belum Login');</script>";
 			$this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Logged Out / Not Login yet
 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 				<span aria-hidden="true">&times;</span>
 				</button>
 				</div>');
 			redirect('Welcome/login_roaster');
 			exit;
 		}

 		$this->load->model('Mroaster');
 		$this->load->model('Mkopi');
 		$this->load->model('Mkomentar');
 		$this->load->model('Mview');
 		// $this->load->helper('form');
 	}

 	public function index()
 	{
 		$data['nama_roaster'] = $_SESSION['roaster']['nama_roaster'];
 		$idr = $_SESSION['roaster']['id_roaster'];

 		$data['new'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'=>function($query)
 		{
 			$query->limit(5); 
 		}])->where('roaster_id_roaster', $idr)->orderBy('id_kopi','desc')->skip($this->uri->segment(3))->take(5)->get();

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
 		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
 		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
 		$config['num_tag_open'] = '<li class="page-item">';
 		$config['num_tag_close'] = '</li>';

		// $config['full_tag_open'] = '<p>';
		// $config['full_tag_close'] = '</p>';
		$config['base_url'] = site_url('roaster/index/');//http://example.com/index.php/test/page/';
		$config['total_rows'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->count();
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();


		// print_r($data);

		// $data['new'] = $this->Mkopi->tampil_kopi_roaster(2,$idr);

		$data['total_produk'] = MkopiEL::where('roaster_id_roaster', $idr)->count();
		$data['total_komentar'] = $this->Mkomentar->hitung($idr);
		$data['total_view'] = $this->Mview->hitung($idr);
		

		// MkomentarEL::with(['kopi', 'roaster'=>function($query)
		// {
		// 	$query->where('roaster_id', $idr);
		// }])->count();
		// print_r($data['total_komentar'] );
		// die();

		// $data['total_view'] = MkopiEL::with('view')->where('roaster_id_roaster', $idr)->count();
		// print_r($total_produk);
		// die();

		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/main', $data);
		$this->load->view('user/roaster/footer');
	}

	function tambah_kopi()
	{
		$input = $this->input->post();
		$idr = $_SESSION['roaster']['id_roaster'];

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
			$input['roaster_id_roaster'] = $idr;
			$this->Mkopi->save_kopi($input, $_FILES);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Submit Succsessfull!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('roaster/list_kopi');
		} else {
			$data['eror']=validation_errors();
		}

		$data['profile_roast'] = $this->Mkopi->profile_roast();
		$data['jenis_kopi'] = $this->Mkopi->jenis_kopi();
		$data['proses_kopi'] = $this->Mkopi->proses_kopi();
		$data['tastes'] = $this->Mkopi->tastes();


		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/tambah_kopi',$data);
		$this->load->view('user/roaster/footer');
	}

	function list_kopi()
	{
		$idr = $_SESSION['roaster']['id_roaster'];

		$this->load->view('user/roaster/header');
		// $data['new'] = $this->Mkopi->tampil_kopi_roaster_list($idr);
		$data['new'] = MkopiEL::with(['profil','jenis','proses','foto','roaster'])->where('roaster_id_roaster', $idr)->orderBy('id_kopi', 'desc')->get();
		$this->load->view('user/roaster/daftar_kopi', $data);
		$this->load->view('user/roaster/footer');
	}

	function profile()
	{

		$id_roaster= $_SESSION['roaster']['id_roaster'];
		$data['roaster'] = $this->Mroaster->view_roaster_m($id_roaster);
		// $r['profile']=$this->Mroaster->get_roaster($id_roaster);

		// $r['id_roaster'] = $_SESSION['roaster']['id_roaster'];
		// $r['nama_roaster'] = $_SESSION['roaster']['nama_roaster'];
		// $r['username_roaster'] = $_SESSION['roaster']['username_roaster'];
		// $r['deskripsi_roaster'] = $_SESSION['roaster']['deskripsi_roaster'];
		// $r['alamat_roaster'] = $_SESSION['roaster']['alamat_roaster'];
		// $r['telp_roaster'] = $_SESSION['roaster']['telp_roaster'];
		// $r['foto_roaster'] = $_SESSION['roaster']['foto_roaster'];
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/profile',$data);
		$this->load->view('user/roaster/footer');
	}

	function edit_profile()
	{
		$input = $this->input->post(); 

		if($input) {
			$id_roaster= $_SESSION['roaster']['id_roaster'];
			$this->Mroaster->edit_roaster($input, $id_roaster);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Edit Succsessfull!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
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
		$get['kopi'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'=>function($query)
		{
			$query->limit(5);
		}])->where('id_kopi',$id_kopi)->get();

		$get['komentar'] = MkomentarEL::with(['kopi', 'roaster', 'member'])->where('kopi_id_kopi', $id_kopi)->get();

		$get['id_roaster'] = $_SESSION['roaster']['id_roaster'];

		$input = $this->input->post(); 
		if ($input)
		{
			$input['waktu_komentar'] = date("Y-m-d H:i:s");
			$input['roaster_id_roaster'] = $_SESSION['roaster']['id_roaster'];
			$input['kopi_id_kopi'] = $id_kopi;

			$this->Mkopi->simpan_komentar($input);
			redirect('Roaster/detail_kopi/'.$id_kopi.'','refresh');

		}

		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/detail_kopi',$get);
		$this->load->view('user/roaster/footer');
	}

	function hapus_komentar($id_kopi, $id_komentar)
	{
		$this->Mkopi->hapus_komentar($id_komentar);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Comment Deleted!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('Roaster/detail_kopi/'.$id_kopi.'','refresh');
	}

	function edit_kopi($id_kopi) 
	{

		$this->form_validation->set_rules('nama_kopi', 'Coffee name', 'required');
		$this->form_validation->set_rules('origin', 'Place Of Origin', 'required');
		$this->form_validation->set_rules('roast_prof_id_roast_prof', 'Roast Profile', 'required');
		$this->form_validation->set_rules('proses_kopi_id_proses_kopi', 'Process', 'required');
		$this->form_validation->set_rules('jenis_kopi_id_jenis_kopi', 'Variety', 'required');
		$this->form_validation->set_rules('tastes[]', 'Taste Notes', 'required');
		// $this->form_validation->set_rules('photos', 'Photo', 'required');


		$input = $this->input->post(); 
		$data['profile_roast'] = Mprofil::get();
		$data['jenis_kopi'] = MjenisEL::get();
		$data['proses_kopi'] = Mproses::get();
		$data['tastes'] = MtastesEL::get();
		$data['kopi'] = $kopi = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->findOrFail($id_kopi);

		if ($this->form_validation->run() == TRUE)
		{
			$input['tastes'] = $input['tastes'];
			
			$this->Mkopi->edit_kopi($input, $_FILES, $id_kopi);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Edit Succsessfull!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('Roaster/list_kopi');
		} else{
			$data['eror']=validation_errors();
		}
		// $data['k'] = $this->Mkopi->get_kopi($id_kopi); 
		// $data['profile_roast'] = $this->Mkopi->profile_roast();
		// $data['jenis_kopi'] = $this->Mkopi->jenis_kopi();
		// $data['proses_kopi'] = $this->Mkopi->proses_kopi();

		$data['photos'] = $this->Mkopi->convertToFileuploader($kopi->foto);

		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/edit_kopi',$data);
		$this->load->view('user/roaster/footer');
	}



	function hapus_kopi($id_kopi){
		$this->Mkopi->hapus_kopi($id_kopi);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Coffee Deleted!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('Roaster/list_kopi');


	}

	function logout()
	{
		$this->session->unset_userdata('roaster');
		redirect('welcome','refresh');
	}

	function cari_kopi($keyword = null)
	{
		// var_dump('hai');die();
		$keyword = $this->input->post('keyword');
		// $data['kopi']=$this->Mkopi->cari_kopi($keyword);
		$data['k'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->where('nama_kopi', 'like', '%' . $keyword . '%')->get();

		$k = $keyword;
		$ceks=count($data['k']);
		// print_r($ceks);
		// die();
		if ($ceks!=0) {
			$this->load->view('user/roaster/header');
			$this->load->view('user/roaster/hasil_cari',$data);
			$this->load->view('user/roaster/footer');
		} 
		else {
			echo "<script>alert('No data Found!');</script>";
			redirect('','refresh');
		}
		


	}

}

/* End of file Roaster.php */
/* Location: ./application/controllers/Roaster.php */