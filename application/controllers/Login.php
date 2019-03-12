<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends JDC_Controller {

	public function __construct()
	{	
		parent::__construct();

		// $this->title = 'dashboard';		
		
	}
	
	public function index()
	{
		$data[ 'title' ] = 'login';

		$this->load->view('inc/navbar');
		$this->load->view('layouts/header',$data);		
		$this->load->view('login');
		$this->load->view('layouts/footer');
	}
}
