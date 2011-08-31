<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	
	public function index() {
		$this->load->model('home_model');
		$data['rows'] = $this->home_model->getAll();
		$this->load->view('home_page', $data);
		//echo "<pre>";
		//print_r($this->session);
		//echo "</pre>";
	}
	
	function validate_credentials(){
	
	    $this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]');
		
		if($this->form_validation->run() == FALSE) {
		
			$this->index();
			
			}else{
	
				$this->load->model('membership_model');
				$query = $this->membership_model->validate();
			
				if($query){
				
				$data = array(
					'username' => $this->input->post('username'),
					'is_logged_in' => true
				);
				
				$this->session->set_userdata($data);
				//$session = $this->session->all_userdata();
				redirect('site/members_area');
				
				}else{
				
					$this->index();
				
				}
				
			}
		
		
	}
	
	function signup(){
	
		$this->load->view('signup_page');
		
	}
	
	function create_member(){
	
	    //print_r($_POST);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password2', 'confirm password', 'trim|required|matches[password]');
		
		if($this->form_validation->run() == FALSE) {
		
			$this->signup();
			
			}else{
			
			$this->load->model('membership_model');
				if($query = $this->membership_model->create_member()){
				
				$this->index();
				
				}
			
			}
		
	}

	function google_login(){
	
		$data = array(
			'username' => 'sam',
			'is_logged_in' => true
		);
		
		$this->session->set_userdata($data);
		$session = $this->session->all_userdata();
		
		
		redirect('home');
		
	}
	
	function destroy_session(){
		
		$this->session->sess_destroy();
		
		redirect('home');
		
	}
	
}