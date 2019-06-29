<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;

class MmemberEL extends Eloquent 
{

	protected $table = "member";
	protected $primaryKey = 'id_member';	

}

/* End of file MmemberEL.php */
/* Location: ./application/models/MmemberEL.php */