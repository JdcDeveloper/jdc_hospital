<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

	// public $data;
	
	public function checkUser($email, $password)
	{
		$this->db->select( 'password' );
		$this->db->from( 'dev.users' );
		$this->db->where( 'email', $email );
		$hash = $this->db->get()->row('password');		
		
		return $this->verifyHash( $password, $hash );
		
	}

	public function verifyHash( $password, $hash )
	{
		return password_verify( $password, $hash );

	}

	public function userSession($email)
	{
		$this->db->select( 'A.first_name,A.last_name,A.email,B.role,A.created_date' );
		$this->db->from( 'dev.users AS A' );
		$this->db->join( 'dev.roles AS B', 'A.id_role = B.id_role', 'inner' );
		$this->db->where( 'A.email', $email );
		$query = $this->db->get()->result();

		return $query;		
		
	}

	public function lastAccess($email,$params)
	{
		$this->db->where('email', $email);
		$this->db->update('dev.users', $params);		
	}
	


}