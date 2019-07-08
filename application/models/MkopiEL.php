<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;
use \Illuminate\Database\Eloquent\Model as Eloquent;

class MkopiEL extends Eloquent 
{
	// use HasEagerLimit;

	protected $table = "kopi";
	protected $primaryKey = 'id_kopi';

	public function foto()
	{
		return $this->hasMany('Mfoto', 'kopi_id_kopi', 'id_kopi');
	}

	public function roaster()
	{
		return $this->belongsTo('MroasterEL', 'roaster_id_roaster', 'id_roaster');
	}

	public function tastes()
	{
		return $this->belongsToMany('MtastesEL', 'kopi_has_tastes', 'kopi_id_kopi', 'tastes_id_tastes');
	}

	public function five_tastes()
	{
		return $this->belongsToMany('MtastesEL', 'kopi_has_tastes', 'kopi_id_kopi', 'tastes_id_tastes')->limit(5);

	}

	public function komentar_member()
	{
		return $this->hasMany('MmemberEL', 'kopi_id_kopi', 'id_kopi');
	}

	public function komentar_roaster()
	{
		return $this->hasMany('MroasterEL', 'kopi_id_kopi', 'id_kopi');
	}

	public function profil()
	{
		return $this->belongsTo('Mprofil', 'roast_prof_id_roast_prof', 'id_roast_prof');
	}

	public function jenis()
	{

		return $this->belongsTo('MjenisEL', 'jenis_kopi_id_jenis_kopi', 'id_jenis_kopi');
		
	}

	public function proses()
	{

		return $this->belongsTo('Mproses', 'proses_kopi_id_proses_kopi', 'id_proses_kopi');
		
	}

	// public function view()
	// {
	// 	return $this->belongsTo('Mproses', 'proses_kopi_id_proses_kopi', 'id_proses_kopi');

	// }

	public function komentar()
	{
		return $this->hasMany('MkomentarEL', 'kopi_id_kopi', 'id_kopi');

	}



	

	


}

/* End of file MkopiEL.php */
/* Location: ./application/models/MkopiEL.php */