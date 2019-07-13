 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roaster extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Mroaster');
		$this->load->model('Mkopi');
		$this->load->model('Mkomentar');
		$this->load->model('Mview');
	}

	public function index()
	{
		$data['nama_roaster'] = $_SESSION['roaster']['nama_roaster'];
		$idr = $_SESSION['roaster']['id_roaster'];

		$data['new'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'=>function($query)
		{
			$query->limit(5); 
		}])->where('roaster_id_roaster', $idr)->orderBy('id_kopi','desc')->take(5)->get();


		
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


		if($input)
		{
			
			$input['tastes'] = $input['tastes[]'];
			// print_r($input);
			// die();
			$input['roaster_id_roaster'] = $idr;
			$this->Mkopi->save_kopi($input, $_FILES);
			redirect('roaster/list_kopi');
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
		redirect('Roaster/detail_kopi/'.$id_kopi.'','refresh');
	}

	function edit_kopi($id_kopi)
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
			redirect('Roaster/list_kopi');
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
		$this->load->view('user/roaster/header');
		$this->load->view('user/roaster/hasil_cari',$data);
		$this->load->view('user/roaster/footer');


	}

}

/* End of file Roaster.php */
/* Location: ./application/controllers/Roaster.php */