<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!@$_SESSION['member']['id_member']) {
			//echo "<script>alert('Belum Login');</script>";
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Logged Out / Not Login yet
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('Welcome/login');
			exit;
		}
		
		$this->load->model('Mkopi');
		$this->load->model('Mmember');
		$this->load->model('Mroaster');

	}

	public function index()
	{
		$data['nama_member'] = $_SESSION['member']['nama_member'];
		$idm = $_SESSION['member']['id_member'];
		// $data['kopi'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'=>function($query)
		// {
		// 	$query->limit(5);
		// }])->orderBy('id_kopi','desc')->limit(2, 5)->get();
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
		$config['base_url'] = site_url('member/index/');//http://example.com/index.php/test/page/';
		$config['total_rows'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->count();
		$config['per_page'] = 6;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

//belum selesai
		$idm = $_SESSION['member']['id_member']; //$this->session->userdata('member')['id_member'];
		$data['last'] = MmemberEL::find($idm)->kopi()->with(['profil','jenis','proses','foto','roaster','tastes'=>function($query)
		{
			$query->limit(5);
		}])->orderBy('pivot_kopi_id_kopi','desc')->groupBy('pivot_kopi_id_kopi')->limit(6)->get();

		// print_r($data['last']->toArray());
		// die();



		// $data['new'] = $this->Mkopi->tampil_kopi_member(0);
		// $data['last'] = $this->Mkopi->last_seen_member(5, $id_member);
		// $data['kopi']=$this->Mkopi->view_kopi();
		

		$this->load->view('user/member/header');
		$this->load->view('user/member/main', $data);
		$this->load->view('user/member/footer');
	}

	function profile()
	{
		$id_member= $_SESSION['member']['id_member'];
		$m['profile']=$this->Mmember->get_member($id_member);
		$m['nama_member'] = $_SESSION['member']['nama_member'];
		$m['username_member'] = $_SESSION['member']['username_member'];
		$m['keterangan_member'] = $_SESSION['member']['keterangan_member'];

		$this->load->view('user/member/header');
		$this->load->view('user/member/profile',$m);
		$this->load->view('user/member/footer');
	}

	function edit_profile()
	{
		$input = $this->input->post(); 
		$id_member= $_SESSION['member']['id_member'];

		if($input)
		{

			$this->Mmember->edit_member($input, $id_member);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Profile Updated!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('Member/profile');
		}

		// $m['id_member'] = $_SESSION['member']['id_member'];
		// $m['nama_member'] = $_SESSION['member']['nama_member'];
		// $m['username_member'] = $_SESSION['member']['username_member'];
		// $m['password_member'] = $_SESSION['member']['password_member'];
		// $m['keterangan_member'] = $_SESSION['member']['keterangan_member'];
		// $m['foto_member'] = $_SESSION['member']['foto_member'];
		$m['profile'] = $this->Mmember->get_member($id_member);
		$this->load->view('user/member/header');
		$this->load->view('user/member/edit_profile',$m);
		$this->load->view('user/member/footer');
	}

	function detail_kopi($id_kopi)
	{
		

		$get['kopi'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'=>function($query)
		{
			$query->limit(5);
		}])->where('id_kopi',$id_kopi)->get();

		$get['komentar'] = MkomentarEL::with(['kopi', 'roaster', 'member'])->where('kopi_id_kopi', $id_kopi)->get();
		// print_r($get['komentar']);
		// die();


		$get['id_member'] = $_SESSION['member']['id_member'];
		// $get['user_auth'] = $_SESSION['member']['id_member'];


		$this->Mkopi->simpan_view($id_kopi, $get['id_member'], date("Y-m-d H:i:s"));
		$input = $this->input->post(); 

		if ($input)
		{
			$input['waktu_komentar'] = date("Y-m-d H:i:s");
			$input['member_id_member'] = $_SESSION['member']['id_member'];
			$input['kopi_id_kopi'] = $id_kopi;

			$this->Mkopi->simpan_komentar($input);
			redirect('Member/detail_kopi/'.$id_kopi.'','refresh');

		}


		$this->load->view('user/member/header');
		$this->load->view('user/member/detail_kopi',$get);
		$this->load->view('user/member/footer');
	}

	function logout()
	{
		$this->session->unset_userdata('member');
		redirect('welcome','refresh');
	}

	function hapus_komentar($id_kopi, $id_komentar)
	{
		$this->Mkopi->hapus_komentar($id_komentar);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Comment Deleted!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('Member/detail_kopi/'.$id_kopi.'','refresh');
	}

	function rekomendasi()
	{
		$this->load->view('user/member/header');
		$this->load->view('user/member/rekomendasi');
		$this->load->view('user/member/footer');

	}

	function hasil_rekomendasi()
	{
		$matriks_nilai_kriteria = array();
		$jumlah = array();

		for ($i=0;$i<=3;$i++){
			$jumlah[$i] = 0;
		}
		for ($i=0;$i<=3;$i++){
			for ($j=0;$j<=3;$j++){
				if ($i == $j) {
					$matriks_nilai_kriteria[$i][$j] = 1;
				} else if ($i < $j){
					$matriks_nilai_kriteria[$i][$j] = $this->input->post('kriteria_'.($i+1).'_'.($j+1));
				} else {
					$matriks_nilai_kriteria[$i][$j] = 1 / $this->input->post('kriteria_'.($j+1).'_'.($i+1));
				}
				$jumlah[$j]+=$matriks_nilai_kriteria[$i][$j];
			}	
		}

		$matriks_hasil_normalisasi = array();
		for ($i=0;$i<=3;$i++){
			for ($j=0;$j<=3;$j++){
				$matriks_hasil_normalisasi[$i][$j]=$matriks_nilai_kriteria[$i][$j]/$jumlah[$j];
			}	
		}

		$eigen = array();
		for ($i=0;$i<=3;$i++){
			$eigen[$i]=array_sum($matriks_hasil_normalisasi[$i])/count($matriks_nilai_kriteria[$i]);	
		}

		$rasio = array();
		$jumlah_baris = array();
		$jumlah_baris_eigen = array();
		for ($i=0;$i<=3;$i++){
			$jumlah_baris[$i]=0;
			for ($j=0;$j<=3;$j++){
				$rasio[$i][$j]=$matriks_nilai_kriteria[$i][$j]*$eigen[$j];
				$jumlah_baris[$i]+=$rasio[$i][$j];
			}	
			$jumlah_baris_eigen[$i] = $jumlah_baris[$i] + $eigen[$i];
		}
		$lambda_max = array_sum($jumlah_baris_eigen);

		$ri = 0.9;
		$ci = ($lambda_max - 4) / 3;
		$cr = $ci/$ri;

		if ($cr>$ri) {
			echo "<script>alert('Input Not Consistent. Try Again! ')</script>";
			redirect('Member/rekomendasi','refresh');
		}


		$matriks_bobot_alternatif = array();
		$datakopi = $this->Mkopi->view_kopi();

		$i=0;
		$id_kopi = array();
		foreach ($datakopi as $row) {
			// sampel kopi kriteria
			// if ($i>=3) { break; }
			$id_kopi[$i] = $row['id_kopi'];
			$matriks_bobot_alternatif[$i][0] = $row['acidity'];
			$matriks_bobot_alternatif[$i][1] = $row['sweet'];
			$matriks_bobot_alternatif[$i][2] = $row['savory'];
			$matriks_bobot_alternatif[$i][3] = $row['bitter']; 
			$i++;
		}

		$matriks_hasil = array();
		$hasil_akhir = array();
		for ($i=0;$i<count($matriks_bobot_alternatif);$i++){
			for ($j=0;$j<=3;$j++){
				$matriks_hasil[$i][$j]=$matriks_bobot_alternatif[$i][$j]*$eigen[$j];
			}	
			$hasil_akhir[$i] = array_sum($matriks_hasil[$i]);
		}

		// $hasil_rangking = array(array());
		// $i=0;
		// foreach ($datakopi as $row) {
		// 	if ($i>=3) { break; }
		// 	$hasil_rangking[] = array("id_kopi"=>$row['id_kopi'], "nilai"=>$hasil_akhir[$i]);
		// 	$i++;
		// }

		// $nilai = array_column($hasil_rangking, 'nilai');
		// @array_multisort($nilai, SORT_ASC, $hasil_rangking);


		$id_rangking = array();
		$hasil_rangking = array();

		$i=0;
		for ($i=0;$i<count($id_kopi);$i++){
			$id_rangking[$i] = $id_kopi[$i];
			$hasil_rangking[$i] = $hasil_akhir[$i];
		}

		for ($i=0;$i<count($id_kopi);$i++){
			for ($j=$i;$j<count($id_kopi);$j++){
				if ($hasil_rangking[$i] < $hasil_rangking[$j]) {
					$tmp_id_kopi = $id_rangking[$i];
					$tmp_hasil_rangking = $hasil_rangking[$i];

					$id_rangking[$i] = $id_rangking[$j];
					$hasil_rangking[$i] = $hasil_rangking[$j];

					$id_rangking[$j] = $tmp_id_kopi;
					$hasil_rangking[$j] = $tmp_hasil_rangking;
				}
			}
		}

		for($i=0;$i<count($id_rangking);$i++) {
			$kopi_rangking[$i] = MkopiEL::with(['profil','jenis','proses','foto','roaster'])->where('id_kopi',$id_rangking[$i])->take(5)->get();
		}

		// print_r($matriks_nilai_kriteria);
		// print_r($jumlah);
		// print_r($matriks_hasil_normalisasi);
		// print_r($eigen);
		// print_r($rasio);
		// print_r($jumlah_baris);
		// print_r($jumlah_baris_eigen);
		// print_r($lambda_max);
		// print_r($ri);
		// print_r($ci);
		// print_r($cr);
		// die();

		// print_r($matriks_bobot_alternatif);
		// print_r($matriks_hasil);
		// print_r($id_kopi);
		// print_r($hasil_akhir);

		// print_r($id_rangking);
		// print_r($hasil_rangking);



		$data['kopi_rangking'] = $kopi_rangking;
		$data['hasil_rangking'] = $hasil_rangking;

		$this->load->view('user/member/header');
		$this->load->view('user/member/hasil_rekomendasi', $data);
		$this->load->view('user/member/footer');

	}

	function cari_kopi($keyword = null)
	{
		// var_dump('hai');die();
		$keyword = $this->input->post('keyword');
		// $data['kopi']=$this->Mkopi->cari_kopi($keyword);
		$data['k'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'])->where('nama_kopi', 'like', '%' . $keyword . '%')->get();
		$k = $keyword;
		$ceks=count($data['k']);
		if ($ceks!=0) {
			$this->load->view('user/member/header');
			$this->load->view('user/member/hasil_cari',$data);
			$this->load->view('user/member/footer');
		} 
		else {
			echo "<script>alert('No data Found!');</script>";
			redirect('Member','refresh');
		}
	}

	function tampil_roaster($id_roaster)
	{
		$data['roaster'] = $this->Mroaster->view_roaster_m($id_roaster);
		$data['kopi'] = MkopiEL::with('roaster','foto')->where('roaster_id_roaster', $id_roaster)->orderBy('id_kopi', 'desc')->get();
		
		$this->load->view('user/member/header');
		$this->load->view('user/member/tampil_roaster',$data);
		$this->load->view('user/member/footer');

	}



	// function edit_profile(){
	// 	// $id_member
	// 	// $input = $this->input->post(); 

	// 	// if($input){

	// 	// $this->Mmember->edit_member($input, $id_member);
	// 	// redirect('administrator/Member');
	// 	// }
	// 	// $data['m'] = $this->Mmember->get_member($id_member);

	// 	$this->load->view('user/member/header');
	// 	$this->load->view('user/member/edit_profile');
	// 	$this->load->view('user/member/footer');
	// }

}

/* End of file Member.php */
/* Location: ./application/controllers/pengguna/Member.php */