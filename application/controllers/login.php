<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function validate() {
		$data['email'] = $_POST['email'];
		$data['pwd'] = $_POST['password'];
		
		$this->load->model('login_model');
		$verify = $this->login_model->validate_credentials($data);

		if($verify){
			foreach ($verify as $key) {
				$newdata = array(
      			'user_id'  => $key->id,
      			'first_name'  => $key->first_name,
      			'last_name'  => $key->last_name,
      			'is_logged_in'  => true,
    		);
   
   			$this->session->set_userdata($newdata);
   			//print_r($newdata);
   			$this->load->model('menu_model');
		
			$data['cat'] = $this->menu_model->get_categories();
			
			$data['manufacturer'] = $this->menu_model->get_manufacturers();
   			$this->load->view('admin_home', $data);
			}
			//$this->load->view('admin_home');
		}
		else{
			$this->validate_user();
		}
	}

	public function validate_user() {
		$data['email'] = $_POST['email'];
		$data['pwd'] = $_POST['password'];
		
		$this->load->model('login_model');
		$verify = $this->login_model->validate_user_credentials($data);

		if($verify){
			foreach ($verify as $key) {
				$newdata = array(
      			'user_id'  => $key->id,
      			'first_name'  => $key->first_name,
      			'last_name'  => $key->last_name,
      			'is_logged_in_user'  => true,
    		);
   
   			$this->session->set_userdata($newdata);
   			//print_r($newdata);
   			redirect('home');
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