<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Mproses extends Eloquent 
{

	protected $table = "proses_kopi";
	protected $primaryKey = 'id_proses_kopi';	

}

/* End of file Mproses.php */
/* Location: ./application/models/Mproses.php */