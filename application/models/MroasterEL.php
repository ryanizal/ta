<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
use \Illuminate\Database\Eloquent\Model as Eloquent;

class MroasterEL extends Eloquent 
{

	use HasEagerLimit;
	protected $table = "roaster";
	protected $primaryKey = 'id_roaster';

	public function kopi()
	{

		return $this->belongsTo('MkopiEL', 'roaster_id_roaster','id_kopi');

	}
}

/* End of file MroasterEL.php */
/* Location: ./application/models/MroasterEL.php */