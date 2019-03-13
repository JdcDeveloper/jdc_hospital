<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends JDC_Controller {


	public function __construct()
	{		
		parent::__construct();			
		
	}


	public function index()
	{
		
		echo "Api Rest";

	}

	

	public function getCountrys()
	{

		$data= $this->Api_Model->getCountrys();

		echo json_encode($data);

	}


	public function getStates()
	{

		$data= $this->Api_Model->getStates();

		echo json_encode($data);

	}

	public function getRoles()
	{

		$data= $this->Api_Model->getRoles();

		echo json_encode($data);

	}


	public function getUsers()
	{

		$data = $this->Users_Model->getUsers();

		echo json_encode($data);

	}

	public function countUsers()
	{

		$data = $this->Api_Model->countUsers();

		echo json_encode($data);

	}

	public function imgProfile()
	{	

		$data = $this->Api_Model->imgProfile($this->userInfo['email']);

		// print_r($this->userInfo['email']);

		echo json_encode($data);

	}
	

	public function getCombo()
	{
		$country=$_GET["countryVal"];

		$data = $this->Users_Model->getStatesCombo($country);

		echo json_encode($data);

	}










}
