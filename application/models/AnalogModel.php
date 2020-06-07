<?php
class AnalogModel extends CI_Model {

	function setTambah($data)
	{
		$this->db->insert('metodeanalog',$data);		
	}
	function getData()
	{
		$query=$this->db->select('phi,hitungswi,rf,boi,baf')
				->from('metodeanalog')
				->get();
			return $query->result_array();
	}
}	
?>