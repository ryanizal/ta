<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkopi extends CI_Model {

	function view_kopi()
	{
		$get = $this->db->get("kopi");
		$array = $get->result_array();
		return $array;
	}

	function view_jenis()
	{
		$get = $this->db->get("jenis_kopi");
		$array = $get->result_array();
		return $array;
	}

	function view_profile()
	{
		$get = $this->db->get("roast_prof");
		$array = $get->result_array();
		return $array;
	}

	function view_proses()
	{
		$get = $this->db->get("proses_kopi");
		$array = $get->result_array();
		return $array;
	}



	

	function save_kopi($input, $file)
	{
		foreach ($file as $nama_foto => $atribut) {

			$config['upload_path'] = './assets/img/coffee';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->upload->initialize($config);
			
			$u = $this->upload->do_upload($nama_foto);

			if ($u)
			{
				$data_upload = $this->upload->data();
				$input[$nama_foto] = $data_upload['file_name'];
				
			}
		}
		$this->db->insert("kopi", $input);
	}

	function get_kopi($id_kopi)
	{
		$this->db->select('*');
		$this->db->from('kopi k');
		$this->db->join('roaster r', 'r.id_roaster = k.id_roaster','left');
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
		$this->db->where('id_roaster', $idr);
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
		$this->db->join('kopi k', 'k.id_kopi = v.id_kopi');
		$this->db->where('v.id_member', $id_member);
		$this->db->order_by('v.id_view', 'desc');
		$this->db->group_by('v.id_kopi');
		$data = $this->db->get('',$limit);

		
		// print_r($data->result_array());
		// die();
		return $data->result_array(); 

	}

	function profile_roast()
	{
		$profile_roast = array("Light", "Light to Medium", "Medium", "Medium to Dark", "Dark");
		return $profile_roast;
	}

	function jenis_kopi()
	{
		$jenis_kopi = array("Arabica", "Robusta", "Blend");
		return $jenis_kopi;
	}

	function proses_kopi()
	{
		$proses_kopi = array("Natural", "Washed", "Semi Washed");
		return $proses_kopi;
	}

	function simpan_komentar($input)
	{
		$this->db->insert('komentar', $input);
	}

	function simpan_view($id_kopi, $member, $waktu)
	{
		$input["id_kopi"] = $id_kopi;
		$input["id_member"] = $member;
		$input["waktu_view"] = $waktu;
		$this->db->insert('view', $input);
	}

	function tampil_komentar($kopi)
	{
		$this->db->join('member', 'member.id_member = komentar.id_member');
		$this->db->where('id_kopi', $kopi);
		$data = $this->db->get('komentar');
		return $data->result_array(); 
	}

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