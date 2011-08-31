<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	
	public function index() {
		$this->load->model('home_model');
		$data['rows'] = $this->home_model->getAll();
		$this->load->view('home_page', $data);
		//echo "<pre>";
		//print_r($this->session);
		//echo "</pre>";
	}

	function validate_credentials(){
	
	
		$data = array(
			'username' => 'sam',
			'is_logged_in' => true
		);
		
		$this->session->set_userdata($data);
		$session = $this->session->all_userdata();
		
		
		redirect('home');
		
	}
	
	
}