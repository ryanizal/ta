<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
use \Illuminate\Database\Eloquent\Model as Eloquent;

class Mproses extends Eloquent 
{

	use HasEagerLimit;
	protected $table = "proses_kopi";
	protected $primaryKey = 'id_proses_kopi';	

}

/* End of file Mproses.php */
/* Location: ./application/models/Mproses.php */