<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;

class MkopiEL extends Eloquent {

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

	function last_seen_member($limit, $id_member)
	{
		$this->db->select('*');
		$this->db->from('view v');
		$this->db->join('kopi k', 'k.id_kopi = v.kopi_id_kopi');
		$this->db->where('v.member_id_member', $id_member);
		$this->db->order_by('v.waktu_view', 'desc');
		$this->db->group_by('v.kopi_id_kopi');
		$data = $this->db->get('',$limit);

		
		// print_r($data->result_array());
		// die();
		return $data->result_array(); 

	}


}

/* End of file MkopiEL.php */
/* Location: ./application/models/MkopiEL.php */