<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->model('Madmin');
		$inputan = $this->input->post();

		if ($inputan) 
		{
			$cek = $this->Madmin->login_admin($inputan);

			
			// print_r ($cek);
			
			if ($cek == "sukses") 
			{
				
				redirect('administrator/Home','refresh');
			}
			else
			{
				echo "<script>alert('Username and Password didnt match');</script>";
			}
		} 
		
		$this->load->view('admin/login');
		$this->load->view('admin/footer');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/administrator/Login.php */