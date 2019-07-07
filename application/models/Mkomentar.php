<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkomentar extends CI_Model 
{
	function hitung($idr)
	{
		$sql= "SELECT COUNT(id_komentar) FROM komentar AS k INNER JOIN kopi AS o ON k.kopi_id_kopi = o.id_kopi INNER JOIN roaster AS r ON o.roaster_id_roaster = r.id_roaster WHERE id_roaster=?";
		$jml = $this->db->query($sql, $idr);
		$array = $jml->result_array();

		return $array;
	}
	

}

/* End of file Mkomentar.php */
/* Location: ./application/models/Mkomentar.php */