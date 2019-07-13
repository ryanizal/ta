<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;
use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

class Mfoto extends Eloquent
{

	use HasEagerLimit;
	protected $table = "foto";
	protected $primaryKey = 'id_foto';
}



/* End of file Mfoto.php */
/* Location: ./application/models/Mfoto.php */