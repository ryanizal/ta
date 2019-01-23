<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkopi extends CI_Model {

	function view_kopi()
	{
		$get = $this->db->get("kopi");
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
		$this->db->where('id_kopi', $id_kopi);
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

	function tampil_kopi_roaster($limit,$idr)
	{
		$this->db->where('id_roaster', $idr);
		$this->db->order_by('id_kopi', 'desc');
		$data = $this->db->get('kopi', $limit);
		return $data->result_array();
	}

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

	function profile_roast()
	{
		$profile_roast = array("Light", "Light to Medium", "Medium", "Medium to Dark", "Dark");
		return $profile_roast;
	}
}

/* End of file Mkopi.php */
/* Location: ./application/models/Mkopi.php */