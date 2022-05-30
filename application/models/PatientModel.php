<?php

class PatientModel extends CI_Model
{
	public function getPatients()
	{
		$query = $this->db->get('patient');

		return $query->result_array();
	}
}
