<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PatientController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('patientModel');
	}

	public function index()
	{
		$patients = $this->patientModel->getPatients();
		var_dump($patients);
		die();
		$this->load->view('patient_list');
	}
}
