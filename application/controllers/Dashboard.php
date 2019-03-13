<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends JDC_Controller {

	

	public function __construct()
	{
		
		// el parent::__construct() es obligatorio
		// para poder cargar lo del constructor padre,
		// osea de JDC_Controller
		parent::__construct();

		// $this->title = 'dashboard';
		

		// pequeño midleware para rutas
		$this->auth();
		
	}


	public function index()
	{
		// selecciono una vista a mostrar segun el role del usuario
		switch ($this->userInfo['role']) {
			case "admin":
			$this->dashboardAdmin();
			break;
			case "teacher":
			$this->dashboardUsers();
			break;

		}


	}

	public function dashboardAdmin()
	{		

		// se pasa las variables de info de usuario,
		// para poder usarlas en vistas y javascript
		// $this->load->view('admin/inc/navbar',$this->userInfo);
		// $this->load->view('admin/inc/sidebar',$this->userInfo);
		// $this->load_layout('admin/dashboard',array('title' => $this->title));

		$data[ 'title' ] = 'dashboard';		

		// $data = $this->Users_Model->getUsers();

		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('layouts/header',$data);	
		$this->load->view('admin/dashboard');
		$this->load->view('layouts/footer');


	}

	public function dashboardUsers()
	{		

		// $this->load->view('users/teachers/inc/navbar',$this->userInfo);
		// $this->load->view('users/teachers/inc/sidebar',$this->userInfo);
		// $this->load_layout('users/teachers/dashboard',array('title' => $this->title));
		$data[ 'title' ] = 'dashboard';		

		// $data = $this->Users_Model->getUsers();

		$this->load->view('users/inc/navbar');
		$this->load->view('users/inc/sidebar');
		$this->load->view('layouts/header',$data);	
		$this->load->view('users/users/users');
		$this->load->view('layouts/footer');


	}

	


}

