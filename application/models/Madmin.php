<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	
	function login_admin($input)
	{
		$username = $input['username_admin'];
		$password = $input['password_admin'];

		$this->db->where('username_admin', $username);
		$this->db->where('password_admin', $password);

		$data = $this->db->get('admin');
		$cari = $data->num_rows();

		if ($cari==1) 
		{
			$data_login = $data->row_array();
			$this->session->set_userdata('admin', $data_login); 
			return "sukses";
		}
		else 
		{
			return "gagal";

		}
	}

}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */
