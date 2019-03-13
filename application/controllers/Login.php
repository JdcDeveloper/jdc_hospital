<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends JDC_Controller {

	public function __construct()
	{	
		parent::__construct();			
		
	}


	
	public function index()
	{

		
		$data[ 'title' ] = 'login';

		$this->load->view('inc/navbar');
		$this->load->view('layouts/header',$data);		
		$this->load->view('login');
		$this->load->view('layouts/footer');
	}


	public function signIn()
	{
		$this->form_validation->set_rules('email', 'email', 'required|max_length[25]');
		$this->form_validation->set_rules('password', 'password', 'required|max_length[15]');		 

		if ($this->form_validation->run() == FALSE){

			// para el form validation es mejor cargar vistas
			// por que si no, se pierde la validacion con los redirect
			$data[ 'title' ] = 'login';

			$this->load->view('inc/navbar');
			$this->load->view('layouts/header',$data);		
			$this->load->view('login');
			$this->load->view('layouts/footer');
			
		}else{
			
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			

			if ($this->Login_Model->checkUser($email, $password)) {
				

				$userData = $this->Login_Model->userSession($email);				

				$data=array(		
					'first_name' => $userData[0]->first_name,
					'last_name' => 	$userData[0]->last_name,	
					'email' => $userData[0]->email,		
					'role' => $userData[0]->role,
					'created_date' => $userData[0]->created_date							
				);
				

				// se establece o agrega la info del usuario para la session
				$this->session->set_userdata('user',$data);

				// utlizo la info del usuario con session iniciada
				$userInfo = $this->session->userdata('user');
				

				// metodo para cargar vista segun nivel de usuario
				$this->nivUsers($userInfo);

				// metodo para actualizar el ultimo acceso
				$this->lastAccess($email);




			}else{  //end password verify
				// validacion ei existe un usuario con ese hash de contraseña
				$this->session->set_flashdata('passwordCheck', 'check your username and password');
				
				redirect(base_url());

			}


	}//end validation form


}


// funcion para cargar vistas segun nivel de usuario
public function nivUsers($userInfo)
{

	switch ($userInfo['role']) {
		case "admin":

		$data[ 'title' ] = 'dashboard';
		$this->load->view('admin/inc/navbar',$userInfo);
		$this->load->view('admin/inc/sidebar',$userInfo);
		$this->load->view('layouts/header', $userInfo);	
		$this->load->view('admin/dashboard',$userInfo);
		$this->load->view('layouts/footer');
		break;
		case "user":

		$data[ 'title' ] = 'dashboard';
		$this->load->view('users/inc/navbar',$userInfo);
		$this->load->view('users/inc/sidebar',$userInfo);
		$this->load->view('layouts/header',$userInfo);	
		$this->load->view('users/dashboard',$userInfo);
		$this->load->view('layouts/footer');
		
		break;						
	}


}



public function lastAccess($email)
{

	$params=array(
		'last_access' => date('H-i-s')			
	);

	$this->Login_Model->LastAccess($email,$params);
}


public function signOut()
{ 
	
	// primero elimino la info del usuario de la session,
	// osea la variable user
	$this->session->unset_userdata('user');

	// ahora verifico que no exista el usuario,para poder hacer un flashdata
	// en la vista, flash data no funciona con sess_destroy
	if ($this->session->userdata('user') === NULL) {				

		$this->session->set_flashdata('closeSession', 'you have closed session');

		redirect(base_url());		

	}

	// Para borrar la sesión actual por completo
	$this->session->sess_destroy();		

}





}
