<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function create_new() {
		$data['errors'] = array();

		$this->load->model('menu_model');
		
		$data['cat'] = $this->menu_model->get_categories();
			
		$data['manufacturer'] = $this->menu_model->get_manufacturers();

		if($this->session->userdata('is_logged_in') == true){
			$this->load->view('create_new_product', $data);
		}
		else{
			$this->load->view('404');
		}
	}
}