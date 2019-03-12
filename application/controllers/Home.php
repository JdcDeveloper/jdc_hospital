<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$data[ 'title' ] = 'home';

		$this->load->view('inc/navbar');
		$this->load->view('layouts/header',$data);		
		$this->load->view('home');
		$this->load->view('layouts/footer');
	}
}
