<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index(){
		$this->load->model('menu_model');
		
		$data['cat'] = $this->menu_model->get_categories();
		
		$data['manufacturer'] = $this->menu_model->get_manufacturers();

		$data['errors'] = array();

		$this->load->view('signup_form',$data);
	}

	public function signup()
	{
		$this->load->library('form_validation');
  
		  	$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		  	$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		  	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		  	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		  	$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');

		  	if($this->form_validation->run() == FALSE)
		  	{
		   		$data['errors'] = validation_errors();
		   		$this->load->view('signup_form', $data);
		  	}
		  	else
		  	{
		  		$this->load->model('login_model');
		   		$p = $this->login_model->entry_new_user();
		   		if($p){
		   			echo "success";
		   		}
		   		else
		   			echo "failure";
		  	}
	}
}