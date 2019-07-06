<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mkopi extends CI_Model 
{

	function view_kopi()
	{

		// $this->db->select('*');
		// $this->db->from('kopi k');
		// $this->db->join('roaster r', 'r.id_roaster = k.roaster_id_roaster','inner');
		// $this->db->join('foto f', 'f.kopi_id_kopi = k.id_kopi','inner');
		// $this->db->join('jenis_kopi j', 'j.id_jenis_kopi = k.jenis_kopi_id_jenis_kopi','inner');
		// $this->db->join('roast_prof p', 'p.id_roast_prof = k.roast_prof_id_roast_prof','inner');
		// $this->db->join('proses_kopi o', 'o.id_proses_kopi = k.proses_kopi_id_proses_kopi','inner');
		// $this->db->where('k.id_kopi', $id_kopi);

		$get = $this->db->get("kopi");
		$array = $get->result_array();
		return $array;
	}

	// function view_jenis()
	// {
	// 	$get = $this->db->get("jenis_kopi");
	// 	$array = $get->result_array();
	// 	return $array;
	// }

	// function view_profile()
	// {
	// 	$get = $this->db->get("roast_prof");
	// 	$array = $get->result_array();
	// 	return $array;
	// }

	// function view_proses()
	// {
	// 	$get = $this->db->get("proses_kopi");
	// 	$array = $get->result_array();
	// 	return $array;
	// }

	function save_kopi($input, $files)
	{
		$this->db->insert('kopi', array_intersect_key($input, array_flip([
			'nama_kopi', 'acidity', 'sweet', 'bitter', 'savory', 'origin', 'deskripsi_kopi', 'roaster_id_roaster', 'roast_prof_id_roast_prof', 'jenis_kopi_id_jenis_kopi', 'proses_kopi_id_proses_kopi'
		])));

		$id_kopi = $this->db->insert_id();

		$extractFileDetail = function ($files, $index) {
			$data = [
				'name' => '',
				'type' => '',
				'tmp_name' => '',
				'error' => 0,
				'size' => 0,
			];

			foreach ($data as $key => $value) {
				$data[$key] = array_key_exists($key, $files)
				? (array_key_exists($index, $files[$key]) ? $files[$key][$index] : $data[$key])
				: $data[$key];
			}

			return $data;
		};

		if (array_key_exists('nama_foto', $files)) {
			foreach ($files['nama_foto']['name'] as $index => $value)
			{
				if (empty($value)) {
					break;
				}

				$fileKey = $this->uuid->v4();
				$uploadDir = 'assets/img/coffee';

				$uploadPath = FCPATH . $uploadDir;
				$fileExt = pathinfo($value, PATHINFO_EXTENSION);
				$fileName = $this->uuid->v4() . '.' . $fileExt;
				$fullpath = $uploadPath . '/' . $fileName;
				$urlPath = $uploadDir . '/' . $fileName;

				while (is_file($fullpath)) {
					$fileName = $this->uuid->v4() . '.' . $fileExt;
					$fullpath = $uploadPath . '/' . $fileName;
				}

				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png';
				$config['file_name'] = $fileName;

				$this->upload->initialize($config);

				$_FILES[$fileKey] = $extractFileDetail($files['nama_foto'], $index);

				$u = $this->upload->do_upload($fileKey);

				if ($u) {
					$data_upload = $this->upload->data();
				} else {
					var_dump($this->upload->display_errors());die();
					throw new Exception("Gagal Upload foto ke $index");
				}

				$this->db->insert('foto', [
					'path_foto' => $urlPath,
					'kopi_id_kopi' => $id_kopi,
				]);
			}
		}
		// print_r($input);
		// die();

		$this->db->insert('kopi_has_tastes', [
			'kopi_id_kopi' => $id_kopi,
			'tastes_id_tastes' => $input['tastes'],
		]);
	}

	function get_kopi($id_kopi)
	{
		$this->db->select('*');
		$this->db->from('kopi k');
		$this->db->join('roaster r', 'r.id_roaster = k.roaster_id_roaster');
		$this->db->join('foto f', 'f.kopi_id_kopi = k.id_kopi');
		$this->db->join('roast_profile p', 'p.id_roast_prof = k.roast_prof_id_roast_prof');
		$this->db->join('jenis_kopi j', 'j.id_jenis_kopi = k.jenis_kopi_id_jenis_kopi');
		$this->db->join('proses_kopi o', 'o.id_proses_kopi = k.proses_kopi_id_proses_kopi');
		$this->db->where('k.id_kopi', $id_kopi);

		$ambil = $this->db->get('kopi');

		$data_kopi = $ambil->row_array();

		return $data_kopi;
	}

	

	function hapus_kopi($id_kopi){

		$detail_kopi = $this->get_kopi($id_kopi);
		$old = $detail_kopi['foto_1'];
		$old = $detail_kopi['foto_2'];
		$old = $detail_kopi['foto_3'];


		if (file_exists("./assets/img/kopi".$old)) {
			unlink("./assets/img/kopi".$old);
		}

		$this->db->where('id_kopi', $id_kopi);
		$this->db->delete('kopi');

	}

	function edit_kopi($input,$file,$id_kopi)
	{
		$detail_kopi = $this->get_kopi($id_kopi);
		foreach ($file as $nama_foto => $atribut) 
		{
			
			if (!empty($atribut["tmp_name"])) 
			{
				$foto_lama = $detail_kopi[$nama_foto];

				if (file_exists("assets/img/coffee/".$foto_lama)) 
				{
					unlink("assets/img/coffee/".$foto_lama);
				}
				$config['upload_path'] = './assets/img/coffee';
				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);
				$u = $this->upload->do_upload($nama_foto);


				if ($u)
				{
					$data_upload = $this->upload->data();
					$input[$nama_foto] = $data_upload['file_name'];

				}
			}

			$this->db->where('id_kopi', $id_kopi);
			$this->db->update('kopi', $input);
		}
	}

	// function tampil_kopi_roaster($limit,$idr)
	// {
	// 	$this->db->where('id_roaster', $idr);
	// 	$this->db->order_by('id_kopi', 'desc');
	// 	$data = $this->db->get('kopi', $limit);
	// 	return $data->result_array();
	// }

	function tampil_kopi_roaster_list($idr)
	{
		$this->db->where('roaster_id_roaster', $idr);
		$data = $this->db->get('kopi');
		return $data->result_array();

	}

	function tampil_kopi_member($limit)
	{
		$this->db->order_by('id_kopi', 'desc');
		$data = $this->db->get('kopi', $limit);
		return $data->result_array();
	}

	function last_seen_member($limit, $id_member)
	{
		$this->db->select('*');
		$this->db->from('view v');
		$this->db->join('kopi k', 'k.id_kopi = v.kopi_id_kopi');
		$this->db->where('v.member_id_member', $id_member);
		$this->db->order_by('v.waktu_view', 'desc');
		$this->db->group_by('v.kopi_id_kopi');
		$data = $this->db->get('',$limit);

		
		// print_r($data->result_array());
		// die();
		return $data->result_array(); 

	}

	function profile_roast()
	{
		$this->db->select('*');
		$this->db->from('roast_prof');
		$query = $this->db->get(); 
		if ($query->num_rows() >0)
		{ 
			foreach ($query->result() as $data) {
				$profile_roast[] = $data;
			}
			return $profile_roast;
		}
	}


	function jenis_kopi()
	{
		$this->db->select('*');
		$this->db->from('jenis_kopi');

		$query = $this->db->get(); 
		if ($query->num_rows() >0)
		{ 
			foreach ($query->result() as $data) {
				$jenis_kopi[] = $data;
			}
			return $jenis_kopi;
		}
	}

	function proses_kopi()
	{
		$this->db->select('*');
		$this->db->from('proses_kopi');

		$query = $this->db->get(); 
		if ($query->num_rows() >0)
		{ 
			foreach ($query->result() as $data) {
				$proses_kopi[] = $data;
			}
			return $proses_kopi;
		}
	}

	function tastes()
	{
		$this->db->select('*');
		$this->db->from('tastes');

		$query = $this->db->get(); 
		if ($query->num_rows() >0)
		{ 
			foreach ($query->result() as $data) {
				$tastes[] = $data;
			}
			return $tastes;
		}
	}

	function simpan_komentar($input)
	{
		$this->db->insert('komentar', $input);
	}

	function simpan_view($id_kopi, $member, $waktu)
	{
		$input["kopi_id_kopi"] = $id_kopi;
		$input["member_id_member"] = $member;
		$input["waktu_view"] = $waktu;
		$this->db->insert('view', $input);
	}

	// function tampil_komentar($kopi)
	// {
	// 	$this->db->join('member', 'member.id_member = komentar.id_member');
	// 	$this->db->where('id_kopi', $kopi);
	// 	$data = $this->db->get('komentar');
	// 	return $data->result_array(); 
	// }

	function hapus_komentar($id_komentar)
	{
		$this->db->where('id_komentar', $id_komentar);
		$this->db->delete('komentar');
	}

	function most_view($id_member)	
	{

	}

	function cari_kopi($keyword)
	{
		$this->db->select('*');
		$this->db->from('kopi');
		$this->db->like('nama_kopi',$keyword);
		return $this->db->get()->result_array();
	}

	function jumlah_kopi()
	{
		$query = $this->db->query("SELECT * from kopi");
		$row = $query->num_rows();
		return $row;

	}
	// function simpan_view($id_kopi, $member, $waktu)
	// {
	// 	$input['id_kopi'] = $id_kopi;
	// 	$input['id_member'] = $member;
	// 	$input['waktu_view'] = $waktu;
	// 	$this->db->insert('view', $input);
	// }
}


/* End of file Mkopi.php */
/* Location: ./application/models/Mkopi.php */