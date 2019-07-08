<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;
use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;


class Mprofil extends Eloquent 
{

	use HasEagerLimit;
	protected $table = "roast_prof";
	protected $primaryKey = 'id_roast_prof';	

}

/* End of file Mprofil.php */
/* Location: ./application/models/Mprofil.php */