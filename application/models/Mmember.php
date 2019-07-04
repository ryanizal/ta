<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmember extends CI_Model {

	function view_member()
	{
		$get = $this->db->get("member");
		$array = $get->result_array();
		return $array;
	}

	function save_member($input)
	{
		$config['upload_path'] = './assets/img/member';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		$u = $this->upload->do_upload("foto_member");

		if ($u)
		{
			$data_upload = $this->upload->data();
			$input['foto_member'] = $data_upload['file_name'];
		}
		$this->db->insert("member", $input);
	}

	function get_member($id_member){
		$this->db->where('id_member', $id_member);
		$ambil = $this->db->get('member');

		$data_member = $ambil->row_array();

		return $data_member;
	}

	function hapus_member($id_member){

		$detail_member = $this->get_member($id_member);
		$old = $detail_member['foto_member'];

		if (file_exists("./assets/img/member".$old)) {
			unlink("./assets/img/member".$old);
		}

		$this->db->where('id_member', $id_member);
		$this->db->delete('member');

	}

	function edit_member($input,$id_member){
		$config['upload_path'] = './assets/img/member';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->upload->initialize($config);
		$u = $this->upload->do_upload("foto_member");

		if ($u){
			$data_upload = $this->upload->data();
			$input['foto_member'] = $data_upload['file_name'];
		}

		$detail_member = $this->get_member($id_member);
		$old = $detail_member['foto_member'];

		if (file_exists("./assets/img/member".$old)) {
			unlink("./assets/img/member".$old);
		}
		$this->db->where('id_member', $id_member);
		$this->db->update('member', $input);
	}

	function login_member($input)
	{
		$username = $input['username_member'];
		$password = $input['password_member'];

		$this->db->where('username_member', $username);
		$this->db->where('password_member', $password);

		$data = $this->db->get('member');
		$cari = $data->num_rows();

		if ($cari==1) 
		{
			$data_login = $data->row_array();
			$this->session->set_userdata('member', $data_login); 
			return "sukses";
		}
		else 
		{
			return "gagal";

		}
	}

	function jumlah_member()
	{
		$query = $this->db->query("SELECT * from member");
		$row = $query->num_rows();
		return $row;
	}
}

/* End of file Mmember.php */
/* Location: ./application/models/Mmember.php */