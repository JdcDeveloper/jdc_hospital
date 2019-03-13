<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Register extends JDC_Controller {	


	public function __construct()
	{		
		parent::__construct();		
		
	}


	public function index()
	{

		$data[ 'title' ] = 'register';

		$this->load->view('inc/navbar');
		$this->load->view('layouts/header',$data);		
		$this->load->view('register');
		$this->load->view('layouts/footer');
		

	}	

	public function add(){


		
		$users=array(			
			'img' => 'user.png',
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),			
			'email' => $this->input->post('email'),
			'password' =>  $password = password_hash($this->input->post('password'),PASSWORD_BCRYPT),
			'id_country' => $this->input->post('country'),
			'id_state' => $this->input->post('state'),
			'id_role' => 2,	  	
			'created_date' => $date = date('Y-m-d'),
			'update_date' => null,
			'last_access' => null
		);


		$this->db->insert('users', $users);

		redirect(base_url("login"));


	}



}

