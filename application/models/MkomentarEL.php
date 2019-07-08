<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Illuminate\Database\Eloquent\Model as Eloquent;
use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

class MkomentarEL extends Eloquent 
{

	use HasEagerLimit;
	protected $table = "komentar";
	protected $primaryKey = 'id_komentar';

	public function roaster()
	{
		return $this->belongsTo('MroasterEL', 'roaster_id_roaster', 'id_roaster');
	}

	public function kopi()
	{
		return $this->belongsTo('MkopiEL', 'kopi_id_kopi', 'id_kopi');
	}

	public function member()
	{
		return $this->belongsTo('MmemberEL', 'member_id_member', 'id_member');
	}

}

/* End of file MkomentarEL.php */
/* Location: ./application/models/MkomentarEL.php */