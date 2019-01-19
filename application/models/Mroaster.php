<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mroaster extends CI_Model {

	function view_roaster()
	{
		$get = $this->db->get("roaster");
		$array = $get->result_array();
		return $array;
	}

	function save_roaster($input)
	{
		$config['upload_path'] = './assets/img/roaster';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		$u = $this->upload->do_upload("foto_roaster");

		if ($u)
		{
			$data_upload = $this->upload->data();
			$input['foto_roaster'] = $data_upload['file_name'];
		}
		$this->db->insert("roaster", $input);
	}

	function get_roaster($id_roaster){
		$this->db->where('id_roaster', $id_roaster);
		$ambil = $this->db->get('roaster');

		$data_roaster = $ambil->row_array();

		return $data_roaster;
	}

	function hapus_roaster($id_roaster){

		$detail_roaster = $this->get_roaster($id_roaster);
		$old = $detail_roaster['foto_roaster'];

		if (file_exists("./assets/img/roaster".$old)) {
			unlink("./assets/img/roaster".$old);
		}

		$this->db->where('id_roaster', $id_roaster);
		$this->db->delete('roaster');

	}

	function edit_roaster($input,$id_roaster){
		$config['upload_path'] = './assets/img/roaster';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		$u = $this->upload->do_upload("foto_roaster");

		if ($u){
			$data_upload = $this->upload->data();
			$input['foto_roaster'] = $data_upload['file_name'];
		}

		$detail_roaster = $this->get_roaster($id_roaster);
		$old = $detail_roaster['foto_roaster'];

		if (file_exists("./assets/img/roaster".$old)) {
			unlink("./assets/img/roaster".$old);
		}
		$this->db->where('id_roaster', $id_roaster);
		$this->db->update('roaster', $input);
	}
}

/* End of file Mroaster.php */
/* Location: ./application/models/Mroaster.php */