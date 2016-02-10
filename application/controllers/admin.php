<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		if($this->session->userdata('is_logged_in') == true){
			$this->load->view('admin_home');
		}
		else{
			$this->load->view('404');
		}
	}

	public function validate() {
		$data['uname'] = $_POST['user_name'];
		$data['pwd'] = $_POST['password'];
		
		$this->load->model('login_model');
		$verify = $this->login_model->validate_credentials($data);

		if($verify){
			foreach ($verify as $key) {
				$newdata = array(
      			'user_id'  => $key->id,
      			'user_name'  => $_POST['user_name'],
      			'is_logged_in'  => true,
    		);
   
   			$this->session->set_userdata($newdata);
   			//print_r($newdata);
   			$this->load->view('admin_home');
			}
			//$this->load->view('admin_home');
		}
		else{
			$this->load->view('404');
		}
	}

	public function create_new() {
		$data['errors'] = array();

		if($this->session->userdata('is_logged_in') == true){
			$this->load->view('create_new_admin', $data);
		}
		else{
			$this->load->view('404');
		}
	}

	public function confirm_new_admin()
	{
		if($this->session->userdata('is_logged_in') == true){
			$this->load->library('form_validation');
  
		  	$this->form_validation->set_rules('user_name', 'Username', 'trim|required|min_length[4]');
		  	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		  	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		  	$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');

		  	if($this->form_validation->run() == FALSE)
		  	{
		   		$data['errors'] = validation_errors();
		   		$this->load->view('create_new_admin', $data);
		  	}
		  	else
		  	{
		  		$this->load->model('login_model');
		   		$p = $this->login_model->entry_new_admin();
		   		if($p){
		   			//echo "success";
		   			$this->load_admin_list();
		   		}
		   		else
		   			echo "failure";
		  	}
		}

		else{
			$this->load->view('404');
		}
	}

	public function load_admin_list()
	{
		if($this->session->userdata('is_logged_in') == true){
			$this->load->model('login_model');
			$d['result'] = $this->login_model->get_admin();
			$count = $this->login_model->get_count();

			if($count == 1) {
				$d['stat'] = 1;
			}
			else {
				$d['stat'] = 0;	
			}


			$this->load->view('admin_list', $d);
		}

		else{
			$this->load->view('404');
		}
	}

	public function delete_admin(){
		if($this->session->userdata('is_logged_in') == true){
			$id = $_GET['id'];

			$this->load->model('login_model');

			$d = $this->login_model->delete_admin($id);

			if($d) {
				$this->load_admin_list();
			}
		}
		else{
			$this->load->view('404');
		}
		
	}

	function logout()
	{

		//$uri = $_GET['uri'];
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect('home');
	}
}
