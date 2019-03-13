<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {
	

	public function getUsers()
	{
		$this->db->select( 'A.id_user,A.img,A.first_name,A.last_name,C.country,D.state,B.role,A.created_date' );
		$this->db->from( 'users AS A' );
		$this->db->join( 'roles AS B', 'A.id_role = B.id_role', 'inner' );
		$this->db->join( 'countrys AS C', 'A.id_country = C.id_country', 'inner' );
		$this->db->join( 'states AS D', 'A.id_state = D.id_state', 'inner' );
		
		$query = $this->db->get()->result();
		
		return $query;	
	}




	public function getUsersById($id)
	{
		$this->db->select( 'A.id_user,A.first_name,A.last_name,A.email,C.country,D.state,B.role' );
		$this->db->from( 'users AS A' );
		$this->db->join( 'roles AS B', 'A.id_role = B.id_role', 'inner' );
		$this->db->join( 'countrys AS C', 'A.id_country = C.id_country', 'inner' );
		$this->db->join( 'states AS D', 'A.id_state = D.id_state', 'inner' );
		$this->db->where( 'A.id_user', $id );
		
		$query = $this->db->get()->row();

		return $query;	
	}
	

	public function update($params)
	{	

		$this->db->set('first_name',$params['first_name']);
		$this->db->set('last_name',$params['last_name']);
		$this->db->set('id_country',$params['country']);
		$this->db->set('id_state',$params['state']);
		$this->db->set('id_role',$params['role']);
		$this->db->set('update_date',$params['update_date']);				
		$this->db->where('id_user', $params['id_user']);
		$this->db->update('users');
		

	}

	public function deleteUsers($id)
	{

		$this->db->where('id_user', $id);
		$this->db->delete('users');

	}


	public function getUsersExcel()
	{
		$this->db->select( 'A.first_name,A.last_name,C.country,D.state,B.role,A.created_date' );
		$this->db->from( 'users AS A' );
		$this->db->join( 'roles AS B', 'A.id_role = B.id_role', 'inner' );
		$this->db->join( 'countrys AS C', 'A.id_country = C.id_country', 'inner' );
		$this->db->join( 'states AS D', 'A.id_state = D.id_state', 'inner' );
		
		$query = $this->db->get()->result_array();
		
		return $query;	
	}



	public function getStatesCombo($param)
	{
		$this->db->select( 'B.state' );
		$this->db->from( 'countrys AS A' );
		$this->db->join( 'states AS B', 'A.id_country = B.id_country', 'inner' );
		$this->db->where( 'A.id_country', $param );
		// $this->db->where( 'A.id_country = 1' );

		$query = $this->db->get()->result();
		
		// return  json_encode($query);

		return $query;		
	}




}