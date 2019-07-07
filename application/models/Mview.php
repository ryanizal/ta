<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mview extends CI_Model 
{

	function hitung($idr)
	{
		$sql= "SELECT COUNT(*) FROM view AS v INNER JOIN kopi AS o ON v.kopi_id_kopi = o.id_kopi INNER JOIN roaster AS r ON o.roaster_id_roaster = r.id_roaster WHERE id_roaster=?;";
		$jml = $this->db->query($sql, $idr);
		$array = $jml->result_array();

		return $array;
	}	

}

/* End of file Mview.php */
/* Location: ./application/models/Mview.php */