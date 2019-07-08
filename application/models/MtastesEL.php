<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;
use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

class MtastesEL extends Eloquent 
{
	use HasEagerLimit;

	protected $table = "tastes";
	protected $primaryKey = 'id_tastes';

}

/* End of file MtastesEL.php */
/* Location: ./application/models/MtastesEL.php */