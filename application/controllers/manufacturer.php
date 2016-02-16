<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer extends CI_Controller {

	public function index(){
		$this->manufacturer_list();
	}

	public function manufacturer_list(){
		$this->load->library('pagination');
		$this->load->library('table');


		$config['base_url'] = base_url().'index.php/manufacturer/manufacturer_list';
		$config['total_rows'] = $this->db->get('manufacturers')->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 3;

		$this->pagination->initialize($config);
		 
		$data['records'] = $this->db->get('manufacturers',5, $this->uri->segment(3) );

		$this->load->model('menu_model');
		
		$data['cat'] = $this->menu_model->get_categories();
			
		$data['manufacturer'] = $this->menu_model->get_manufacturers();
		
		$this->load->view('manufacturer_list', $data);
	}

	public function create_new() {
		$data['errors'] = array();

		$this->load->model('menu_model');
		
		$data['cat'] = $this->menu_model->get_categories();
			
		$data['manufacturer'] = $this->menu_model->get_manufacturers();

		if($this->session->userdata('is_logged_in') == true){
			$this->load->view('create_new_manufacturer', $data);
		}
		else{
			$this->load->view('404');
		}
	}

	public function confirm_new_manufacturer()
	{
		if($this->session->userdata('is_logged_in') == true){
			$this->load->library('form_validation');
  
		  	$this->form_validation->set_rules('name', 'Name', 'trim|required');
		  	$this->form_validation->set_rules('site', 'Site', 'trim|required');
		  	$this->form_validation->set_rules('description', 'Description', 'required');

		  	if($this->form_validation->run() == FALSE)
		  	{
		   		$data['errors'] = validation_errors();
		   		$this->load->view('create_new_manufacturer', $data);
		  	}
		  	else
		  	{
		  		$this->load->model('manufacturer_model');
		   		$p = $this->manufacturer_model->entry_new_manufacturer();
		   		if($p){
		   			//echo "success";
		   			$this->manufacturer_list();
		   		}
		   		else
		   			echo "failure";
		  	}
		}

		else{
			$this->load->view('404');
		}
	}

	public function load_manufacturer_list(){
		if($this->session->userdata('is_logged_in') == true){
			$this->load->library('pagination');
			$this->load->library('table');


			$config['base_url'] = base_url().'index.php/manufacturer/load_manufacturer_list';
			$config['total_rows'] = $this->db->get('manufacturers')->num_rows();
			$config['per_page'] = 5;
			$config['num_links'] = 3;

			$this->pagination->initialize($config);
			 
			$data['records'] = $this->db->get('manufacturers',5, $this->uri->segment(3) );

			$this->load->model('menu_model');
		
			$data['cat'] = $this->menu_model->get_categories();
			
			$data['manufacturer'] = $this->menu_model->get_manufacturers();
			
			$this->load->view('manufacturers_list_for_delete', $data);
		}
	}

	public function delete_manufacturer(){
		if($this->session->userdata('is_logged_in') == true){
			$id = $_GET['id'];

			$this->load->model('manufacturer_model');

			$d = $this->manufacturer_model->delete_manufacturer($id);

			if($d) {
				$this->load_manufacturer_list();
			}
		}
		else{
			$this->load->view('404');
		}
		
	}

	public function get_products() {
		$id = $_GET['id'];

		$q = "SELECT * FROM products WHERE manufacturer_id = '$id' AND prod_stat = 'Y'";
		$limit = 5;

		$this->load->library('pagination');
		$this->load->library('table');


		$config['base_url'] = base_url().'index.php/manufacturer/get_products';
		$config['total_rows'] = $this->db->query($q)->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 3;

		$this->pagination->initialize($config);
		$offset =  ($this->uri->segment(3) != '' ? $this->uri->segment(3) : 0);
		$q .= " LIMIT $limit OFFSET $offset";
		$data['records'] = $this->db->query($q)->result();

		$this->load->model('menu_model');
		
		$data['cat'] = $this->menu_model->get_categories();
		
		$data['manufacturer'] = $this->menu_model->get_manufacturers();

		$this->load->view('index',$data);
	}
}
