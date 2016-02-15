<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index() {
		$this->create_new_product();
	}

	public function create_new_product() {
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

	public function confirm_new_product() {
		if($this->session->userdata('is_logged_in') == true){
			$this->load->library('form_validation');
  
		  	$this->form_validation->set_rules('name', 'Name', 'trim|required');
		  	$this->form_validation->set_rules('prod_stat', 'Prod_Stat', 'trim|required');
		  	$this->form_validation->set_rules('description', 'Description', 'required');
		  	$this->form_validation->set_rules('manufacturer', 'Manufacturer', 'required');
		  	$this->form_validation->set_rules('price', 'Price', 'required');
		  	$this->form_validation->set_rules('quantity', 'Quantity', 'required');

		  	if($this->form_validation->run() == FALSE)
		  	{
		   		$data['errors'] = validation_errors();
		   		$this->load->view('create_new_product', $data);
		  	}
		  	else
		  	{
		  		$this->load->model('product_model');
		   		$p = $this->product_model->entry_new_product();
		   		if($p){
		   			$id = $this->product_model->get_id($_POST['name']);

		   			if($id) {
		   				foreach ($id as $key) {
							$newdata = array(
			      			'prod_id'  => $key->id
			    		);
			   
			   			$this->session->set_userdata($newdata);
		   			}

		   			$data['errors'] = array();

					$this->load->model('menu_model');
					
					$data['cat'] = $this->menu_model->get_categories();
						
					$data['manufacturer'] = $this->menu_model->get_manufacturers();

					$this->load->view('add_product_images');
		   		}
		   		else
		   			echo "failure";
				}
			}
		}
	
		else{
			$this->load->view('404');
		}
	}
}