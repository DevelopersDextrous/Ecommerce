<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Director extends CI_Controller {

	public function index(){
		$this->director_list();
	}

	public function director_list(){
		$this->load->library('pagination');
		$this->load->library('table');


		$config['base_url'] = base_url().'index.php/director/director_list';
		$config['total_rows'] = $this->db->get('directors')->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 3;

		$this->pagination->initialize($config);
		 
		$data['records'] = $this->db->get('directors',5, $this->uri->segment(3) );

		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		
		$this->load->view('directors_list', $data);
	}

	public function create_new() {
		$data['errors'] = array();

		if($this->session->userdata('is_logged_in') == true){
			$this->load->view('create_new_director', $data);
		}
		else{
			$this->load->view('404');
		}
	}

	public function confirm_new_director()
	{
		if($this->session->userdata('is_logged_in') == true){
			$this->load->library('form_validation');
  
		  	$this->form_validation->set_rules('name', 'Name', 'trim|required');
		  	$this->form_validation->set_rules('designation', 'Designation', 'trim|required');
		  	$this->form_validation->set_rules('desc', 'Description', 'required');

		  	if($this->form_validation->run() == FALSE)
		  	{
		   		$data['errors'] = validation_errors();
		   		$this->load->view('create_new_director', $data);
		  	}
		  	else
		  	{
		  		$this->load->model('director_model');
		   		$p = $this->director_model->entry_new_director();
		   		if($p){
		   			//echo "success";
		   			$this->director_list();
		   		}
		   		else
		   			echo "failure";
		  	}
		}

		else{
			$this->load->view('404');
		}
	}

	public function load_director_list(){
		if($this->session->userdata('is_logged_in') == true){
			$this->load->library('pagination');
			$this->load->library('table');


			$config['base_url'] = base_url().'index.php/director/load_director_list';
			$config['total_rows'] = $this->db->get('directors')->num_rows();
			$config['per_page'] = 5;
			$config['num_links'] = 3;

			$this->pagination->initialize($config);
			 
			$data['records'] = $this->db->get('directors',5, $this->uri->segment(3) );
			
			$this->load->view('directors_list_for_delete', $data);
		}
	}

	public function delete_director(){
		if($this->session->userdata('is_logged_in') == true){
			$id = $_GET['id'];

			$this->load->model('director_model');

			$d = $this->director_model->delete_director($id);

			if($d) {
				$this->load_director_list();
			}
		}
		else{
			$this->load->view('404');
		}
		
	}

}
