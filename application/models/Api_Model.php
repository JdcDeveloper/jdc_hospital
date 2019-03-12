<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Model extends CI_Model {
	
	public function getCountrys()
	{
		// una forma de usar distict
		$this->db->distinct();
		$this->db->select("id_country,country");
		$this->db->from("dev.countrys");
		$this->db->order_by("country", "asc");
		$query = $this->db->get();	

		return $query->result();
		
	}

	public function getStates()
	{
		
		$this->db->distinct();
		$this->db->select("id_state,state");
		$this->db->from("dev.states");
		$this->db->order_by("state", "asc");
		$query = $this->db->get();		

		return $query->result();
		
	}

	public function getRoles()
	{
		// $query = $this->db->get('dev.roles');
		$this->db->distinct();
		$this->db->select("id_role,role");
		$this->db->from("dev.roles");
		$this->db->order_by("role", "asc");
		$query = $this->db->get();

		return $query->result();
		
	}

	public function countUsers()
	{
		// 1 es admin
		// 2 es teacher
		// 3 es student

		$this->db->select("COUNT(id_role) AS totalAdmins");
		$this->db->from("dev.users");
		$this->db->where("id_role", 1);			
		$admins = $this->db->get()->row();
		
		$this->db->select("COUNT(id_role) AS totalUsers");
		$this->db->from("dev.users");		
		$users = $this->db->get()->row();

		$this->db->select("COUNT(id_role) AS totalTeachers");
		$this->db->from("dev.users");
		$this->db->where("id_role", 2);		
		$teachers = $this->db->get()->row();

		$this->db->select("COUNT(id_role) AS totalStudents");
		$this->db->from("dev.users");
		$this->db->where("id_role", 3);		
		$students = $this->db->get()->row();

		// paso de una vez las 3 consultas en un array clave,valor
		$query = array(
			'totalAdmins' => $admins,
			'totalUsers' => $users,
			'totalTeachers' => $teachers,
			'totalStudents' => $students
		);

		return $query;		
	}

	public function imgProfile($email){

		$this->db->select( 'img' );
		$this->db->from( 'dev.users' );
		$this->db->where("email", $email);		
		$query = $this->db->get()->row();

		return $query;

	}





}