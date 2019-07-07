<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;

class MviewEL extends Eloquent 
{

	protected $table = "view";
	protected $primaryKey = null;
	public $incrementing = false;	

}

/* End of file Mproses.php */
/* Location: ./application/models/Mproses.php */