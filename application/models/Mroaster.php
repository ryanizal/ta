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

		$this->upload->initialize($config);
		$u = $this->upload->do_upload("foto_roaster");

		if ($u)
		{
			$data_upload = $this->upload->data();
			$input['foto_roaster'] = $data_upload['file_name'];
		}
		$this->db->insert("roaster", $input);
	}

	function get_roaster($id_roaster)
	{
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

	function edit_roaster($input,$id_roaster)
	{
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

		if (file_exists("./assets/img/roaster".$old))
		{
			unlink("./assets/img/roaster".$old);
		}
		$this->db->where('id_roaster', $id_roaster);
		$this->db->update('roaster', $input);
	}

	function login_roaster($input)
	{
		$username = $input['username_roaster'];
		$password = $input['password_roaster'];

		$this->db->where('username_roaster', $username);
		$this->db->where('password_roaster', $password);

		$data = $this->db->get('roaster');
		$cari = $data->num_rows();

		if ($cari==1) 
		{
			$data_login = $data->row_array();
			$this->session->set_userdata('roaster', $data_login); 
			return "sukses";
		}
		else 
		{
			return "gagal";

		}
	}

	function jumlah_roaster()
	{
		$query = $this->db->query("SELECT * from roaster");
		$row = $query->num_rows();
		return $row;
	}

	function jumlah_kopi()
	{
		$jml=MkopiEL::with(['roaster'])->where('roaster_id_roaster', 3)->get()->count();
		return $jml;

	}

	function view_roaster_m($id_roaster)
	{
		$this->db->select('*');
		$this->db->from('roaster');
		$this->db->where('id_roaster',$id_roaster);
		return $this->db->get()->result_array();
	}
}

/* End of file Mroaster.php */
/* Location: ./application/models/Mroaster.php */