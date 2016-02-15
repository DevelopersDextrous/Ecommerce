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

	public function add_images() {
		$config = array(
				'allowed_types' => 'jpg|jpeg|gif|png',
				'upload_path' => '../img',
				'encrypt_name' => true,
				'overwrite' => FALSE
			);
			
			$files = $_FILES;
			$file_loop = count($_FILES['userfile']['name']);

			for($i=0; $i<$file_loop; $i++) {
				$_FILES['userfile']['name'] = $files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
        		$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        		$_FILES['userfile']['error']= $files['userfile']['error'][$i];
        		$_FILES['userfile']['size']= $files['userfile']['size'][$i];	
			}

			$this->load->library('upload', $config);

			if($this->upload->do_upload()) { 
				$image_data = $this->upload->data();

				$content = array(
				'p_id' => $this->session->userdata('prod_id'),
				'file_path' => 'img/'.$image_data['file_name']
				);

				$this->db->insert('prod_image', $content);
			}	


		if ($this->input->post('upload')) {
			echo 'upload';
			
			$query = $this->product_model->save_product_image();

			if($query) {
				echo 'success';
			}
		}
	}
}