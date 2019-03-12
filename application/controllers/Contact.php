<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function index()
	{
		$data[ 'title' ] = 'contact';

		$this->load->view('inc/navbar');
		$this->load->view('layouts/header',$data);	
		$this->load->view('contact');
		$this->load->view('layouts/footer');
	}
}
