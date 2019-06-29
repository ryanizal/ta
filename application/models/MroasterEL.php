<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;

class MroasterEL extends Eloquent 
{

	protected $table = "roaster";
	protected $primaryKey = 'id_roaster';

}

/* End of file MroasterEL.php */
/* Location: ./application/models/MroasterEL.php */