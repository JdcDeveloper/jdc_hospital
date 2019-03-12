<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends JDC_Controller {

	public function __construct()
	{	
		parent::__construct();

		// $this->title = 'dashboard';		
		
	}
	
	public function index()
	{
		$data[ 'title' ] = 'home';

		$this->load->view('inc/navbar');
		$this->load->view('layouts/header',$data);		
		$this->load->view('home');
		$this->load->view('layouts/footer');
	}
}
