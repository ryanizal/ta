<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;

class MtastesEL extends Eloquent 
{

	protected $table = "tastes";
	protected $primaryKey = 'id_tastes';

}

/* End of file MtastesEL.php */
/* Location: ./application/models/MtastesEL.php */