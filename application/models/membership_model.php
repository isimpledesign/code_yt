<?php

class Membership_model extends CI_Model{

	function validate(){
	
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');
		
		if($query->num_rows == 1){
		
			return true;
		
		}
	
	}
	
	
	function create_member(){
	
		$new_member_insert_data = array(
		
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		
		);
		
		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
		
		}

}