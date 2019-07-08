<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
use \Illuminate\Database\Eloquent\Model as Eloquent;

class MmemberEL extends Eloquent 
{

	use HasEagerLimit;
	protected $table = "member";
	protected $primaryKey = 'id_member';

	public function kopi()
	{
		return $this->belongsToMany('MkopiEL', 'view', 'member_id_member', 'kopi_id_kopi' );
	}	

}

/* End of file MmemberEL.php */
/* Location: ./application/models/MmemberEL.php */