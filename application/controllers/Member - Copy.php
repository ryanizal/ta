<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mkopi');
		$this->load->model('Mmember');
	}

	public function index()
	{
		$data['nama_member'] = $_SESSION['member']['nama_member'];
		$idm = $_SESSION['member']['id_member'];
		$data['kopi'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','tastes'=>function($query)
		{
			$query->limit(5);
		}])->orderBy('id_kopi','desc')->get();

//belum selesai
		$data['last'] = MkopiEL::with(['profil','jenis','proses','foto','roaster','view'=>function($query)
			{
				$idm = $_SESSION['member']['id_member'];
				$query->where('member_id_member', $idm)->orderBy('waktu_view','desc');
			},'tastes'=>function($query)
		{
			$query->limit(5);
		}])->get();



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

		$get['komentar'] = MkopiEL::with(['komentar_member'=>function($query)
			{
				$query->where('kopi_id_kopi', 14);
			}])->get();
		print_r($get['komentar']);
		die();

		$get['id_member'] = $_SESSION['member']['id_member'];

		$this->Mkopi->simpan_view($id_kopi, $get['id_member'], date("Y-m-d H:i:s"));
		$input = $this->input->post(); 

		if ($input)
		{
			$input['waktu_komentar'] = date("Y-m-d H:i:s");
			$input['member_id_member'] = $_SESSION['member']['id_member'];
			$input['kopi_id_kopi'] = $id_kopi;

			$this->Mkopi->simpan_komentar($input);
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

		for ($i=1;$i<=4;$i++){
			$jumlah[$i] = 0;
		}
		for ($i=1;$i<=4;$i++){
			for ($j=1;$j<=4;$j++){
				if ($i == $j) {
					$matriks_nilai_kriteria[$i][$j] = 1;
				} else if ($i < $j){
					$matriks_nilai_kriteria[$i][$j] = $this->input->post('kriteria_'.$i.'_'.$j);
				} else {
					$matriks_nilai_kriteria[$i][$j] = 1 / $this->input->post('kriteria_'.$j.'_'.$i);
				}
				$jumlah[$j]+=$matriks_nilai_kriteria[$i][$j];
			}	
		}

		$matriks_hasil_normalisasi = array();
		for ($i=1;$i<=4;$i++){
			for ($j=1;$j<=4;$j++){
				$matriks_hasil_normalisasi[$i][$j]=$matriks_nilai_kriteria[$i][$j]/$jumlah[$j];
			}	
		}

		$eigen = array();
		for ($i=1;$i<=4;$i++){
			$eigen[$i]=array_sum($matriks_hasil_normalisasi[$i])/count($matriks_nilai_kriteria[$i]);	
		}

		$rasio = array();
		$jumlah_baris = array();
		$jumlah_baris_eigen = array();
		for ($i=1;$i<=4;$i++){
			$jumlah_baris[$i]=0;
			for ($j=1;$j<=4;$j++){
				$rasio[$i][$j]=$matriks_nilai_kriteria[$i][$j]*$eigen[$j];
				$jumlah_baris[$i]+=$rasio[$i][$j];
			}	
			$jumlah_baris_eigen[$i] = $jumlah_baris[$i] + $eigen[$i];
		}
		$lambda_max = array_sum($jumlah_baris_eigen);
		$ri = 0.9;
		$ci = ($lambda_max - 4) / 3;
		$cr = $ci/$ri;

		$matriks_bobot_alternatif = array();
		$datakopi = $this->Mkopi->view_kopi();

		$i=0;
		foreach ($datakopi as $row) {
			for ($j=1;$i<=4;$i++){
				$matriks_bobot_alternatif[]
			}
			$i++;
		}


		print_r($matriks_nilai_kriteria);
		print_r($jumlah);
		print_r($matriks_hasil_normalisasi);
		print_r($eigen);
		print_r($rasio);
		print_r($jumlah_baris);
		print_r($jumlah_baris_eigen);
		print_r($lambda_max);
		print_r($ri);
		print_r($ci);
		print_r($cr);



		// $this->load->view('user/member/header');
		// $this->load->view('user/member/hasil_rekomendasi');
		// $this->load->view('user/member/footer');

	}

	function cari_kopi($keyword = null)
	{
		// var_dump('hai');die();
		$keyword = $this->input->post('keyword');
		$data['kopi']=$this->Mkopi->cari_kopi($keyword);
		$k = $keyword;
		$this->load->view('user/member/header');
		$this->load->view('user/member/hasil_cari',$data);
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