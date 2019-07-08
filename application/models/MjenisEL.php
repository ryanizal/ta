<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;
use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


class MjenisEL extends Eloquent
{

	use HasEagerLimit;
	protected $table = "jenis_kopi";
	protected $primaryKey = 'id_jenis_kopi';

}

/* End of file MjenisEL.php */
/* Location: ./application/models/MjenisEL.php */