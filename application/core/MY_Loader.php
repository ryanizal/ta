<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;

class MY_Loader extends CI_Loader {

	public function initialize()
	{
		parent::initialize();

		$capsule = new Capsule;

		$capsule->addConnection(array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'kopi',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
			'strict'	=> false
		));
		$capsule->setAsGlobal();
		$capsule->bootEloquent();
	}

}

/* End of file MY_Loader.php */
/* Location: ./application/core/MY_Loader.php */