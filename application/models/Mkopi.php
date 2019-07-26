<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use finfo as Finfo;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

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
		$this->db->insert('kopi', Arr::only($input, [
			'nama_kopi', 'acidity', 'sweet', 'bitter', 'savory', 'origin', 'deskripsi_kopi', 'roaster_id_roaster', 'roast_prof_id_roast_prof', 'jenis_kopi_id_jenis_kopi', 'proses_kopi_id_proses_kopi'
		]));

		$id_kopi = $this->db->insert_id();

		foreach ($input['tastes'] as $t) 
		{
			$this->db->query("INSERT INTO kopi_has_tastes (kopi_id_kopi, tastes_id_tastes) values ('{$id_kopi}','{$t}')");
		}

		if (array_key_exists('photos', $files)) {
			$this->save_foto((array) $files['photos'], $id_kopi, Arr::get($input, 'selected-photos'));
		}
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

		// $this->db->where('k.id_kopi', $id_kopi);

		// $detail_kopi = $this->get_kopi($id_kopi);
		// $old = $detail_kopi['foto_1'];
		// $old = $detail_kopi['foto_2'];
		// $old = $detail_kopi['foto_3'];


		// if (file_exists("./assets/img/kopi".$old)) {
		// 	unlink("./assets/img/kopi".$old);
		// }

		$this->db->where('kopi_id_kopi', $id_kopi);
		$this->db->delete('komentar');
		$this->db->where('kopi_id_kopi', $id_kopi);
		$this->db->delete('view');
		$this->db->where('kopi_id_kopi', $id_kopi);
		$this->db->delete('foto');
		$this->db->where('kopi_id_kopi', $id_kopi);
		$this->db->delete('kopi_has_tastes');
		$this->db->where('id_kopi', $id_kopi);
		$this->db->delete('kopi');

	}

	function edit_kopi($input, $files, $id_kopi)
	{
		 $this->db->where('kopi_id_kopi', $id_kopi);
         $this->db->delete('kopi_has_tastes');
		foreach ($input['tastes'] as $t) 
		{
			$this->db->query("INSERT INTO kopi_has_tastes (kopi_id_kopi, tastes_id_tastes) values ('{$id_kopi}','{$t}')");
		}
		if (array_key_exists('photos', $files)) {
			$this->save_foto((array) $files['photos'], $id_kopi, Arr::get($input, 'selected-photos'));
		}

		$this->db->where('id_kopi', $id_kopi);
		$this->db->update('kopi', Arr::only($input, [
			'nama_kopi', 'acidity', 'sweet', 'bitter', 'savory', 'origin', 'deskripsi_kopi', 'roaster_id_roaster', 'roast_prof_id_roast_prof', 'jenis_kopi_id_jenis_kopi', 'proses_kopi_id_proses_kopi'
		]));
	}

	function convertFromFileuploader($file = [])
	{
		$entry = Arr::get($file, 'name', []);
		$result = [];

		$i = 0;
		foreach ($entry as $f) {
			$tmpName = Arr::get($file, "tmp_name.{$i}");

			if (! file_exists($tmpName)) {
				continue;
			}

			$result[] = [
				'name' => Arr::get($file, "name.{$i}"),
				'tmp_name' => $tmpName,
				'type' => Arr::get($file, "type.{$i}"),
				'error' => Arr::get($file, "error.{$i}"),
				'size' => Arr::get($file, "size.{$i}"),
			];

			$i++;
		}

		return $result;
	}

	function convertToFileuploader($files = [])
	{
		return Collection::make($files)->map(function ($file, $key) {
			$path = FCPATH . Arr::get($file, 'path_foto');

			if (! file_exists($path)) {
				return;
			}

			$finfo = new Finfo(FILEINFO_MIME_TYPE);
        	$mimetype = $finfo->file($path);
        	$key++;

			return [
				'name' => "Foto {$key}",
				'size' => filesize($path),
				'type' => $mimetype,
				'file' => base_url($file->path_foto),
				'data' => [
					'source_id' => $file->id_foto,
				]
			];
		})->filter()->values();
	}

	function save_foto($foto, $id_kopi, $selectedIds = [])
	{
		$selectedIds = array_filter(Arr::wrap($selectedIds));
		$kopi = MkopiEL::findOrFail($id_kopi);

		$current = $kopi->foto->whereNotIn('id_foto', $selectedIds);

		$foto = $this->convertFromFileuploader($foto);

		foreach ($current as $oldFoto) {
			$path_foto = FCPATH . $oldFoto->path_foto;
			if (file_exists($path_foto)) {
				unlink($path_foto);
			}
		}

		$kopi->foto()->whereNotIn('id_foto', $selectedIds)->delete();

		$mimes = new \Mimey\MimeTypes;

		$i = 0;
		foreach ($foto as $f) {
			if (array_key_exists('tmp_name', $f)) {
				if (! file_exists($f['tmp_name'])) {
					break;
				}

				$fileKey = $this->uuid->v4();
				$uploadDir = 'assets/img/coffee';

				$uploadPath = FCPATH . $uploadDir;
				$ext = $mimes->getExtension($f['type']);
				$fileExt = $ext ? $ext : pathinfo($f['tmp_name'], PATHINFO_EXTENSION);
				$fileName = $this->uuid->v4() . '.' . $fileExt;
				$fullpath = $uploadPath . '/' . $fileName;
				$urlPath = $uploadDir . '/' . $fileName;

				while (is_file($fullpath)) {
					$fileName = $this->uuid->v4() . '.' . $fileExt;
					$fullpath = $uploadPath . '/' . $fileName;
				}

				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'jpg|png|jpeg|image/jpeg|image/png';
				$config['file_name'] = $fileName;

				$this->upload->initialize($config);

				$_FILES[$fileKey] = $f;

				$u = $this->upload->do_upload($fileKey);

				if ($u) {
					$data_upload = $this->upload->data();
				} else {
					$idx = $i + 1;
					// var_dump($this->upload->display_errors());die();
					throw new Exception("Gagal Upload foto ke $idx");
				}

				$this->db->insert('foto', [
					'path_foto' => $urlPath,
					'kopi_id_kopi' => $id_kopi,
				]);

				$i++;
			}
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