<?php
class VolumeModel extends CI_Model {

	function setTambahVolumetrikigip($data)
	{
		$this->db->insert('volumetrikigip',$data);		
	}
	function setTambahVolumetrikioip($data)
	{
		$this->db->insert('volumetrikioip',$data);		
	}
	function getDataVolumetrikigip()
	{
		$query=$this->db->select('luaspengeringan,ketebalanrata,porositasbatuan,swi,bgi,igip')
				->from('volumetrikigip')
				->get();
			return $query->result_array();
	}
	function getDataVolumetrikioip()
	{
		$query=$this->db->select('luaspengeringann,ketebalanrataa,porositasbatuann,swi,boi,ioip')
				->from('volumetrikioip')
				->get();
			return $query->result_array();
	}
}	
?>