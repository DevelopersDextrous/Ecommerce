<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index() {
		//$this->load->view('add_product_images');
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
		  	$this->form_validation->set_rules('description', 'Description', 'trim|required');
		  	$this->form_validation->set_rules('price', 'Price', 'trim|required');
		  	$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required');

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

					$this->load->model('menu_model');
					
					$data['cat'] = $this->menu_model->get_categories();
						
					$data['manufacturer'] = $this->menu_model->get_manufacturers();

					$data['error'] = '';

					$this->load->view('add_product_images', $data);
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

	private function set_up_config() {
		$config = array(
				'allowed_types' => 'jpg|jpeg|gif|png',
				'upload_path' => '../img',
				'encrypt_name' => true,
				'overwrite' => FALSE
			);

		return $config;	
	}

	public function do_upload() {
		
		$count = count($_FILES['userfile']['size']);

	    foreach($_FILES as $key=>$value){
	        for($n=0; $n<=$count-1; $n++) {
	            $_FILES['userfile']['name']=$value['name'][$n];
	            // $_FILES['userfile']['type']    = $value['type'][$n];
	            // $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$n];
	            // $_FILES['userfile']['error']       = $value['error'][$n];
	            // $_FILES['userfile']['size']    = $value['size'][$n];   

	                $config['upload_path'] = '../img';
	                $config['allowed_types'] = 'gif|jpg|png|jpeg';
	                                    $config['max_size']       = 0;

	            $this->load->library('upload', $config);
	            $this->upload->do_upload();
	            $data = $this->upload->data();

	            $input_data = array(
	            	'file_path' => 'img/'.$data['name'],
	            	'p_id' => $this->session->userdata('prod_id')
	            	);
	            $this->db->insert('prod_image', $input_data);
	        }
	    } 
	}
}