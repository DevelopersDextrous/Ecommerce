<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function index(){
		if($this->session->userdata('is_logged_in') == true){
			$data['errors'] = array();
			$this->load->model('menu_model');
		
			$data['cat'] = $this->menu_model->get_categories();
			
			$data['manufacturer'] = $this->menu_model->get_manufacturers();

			$this->load->view('create_category',$data);
		}
		else{
			$this->load->view('404');
		}
	}

	public function publish(){

		if($this->session->userdata('is_logged_in') == true){


			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Category Name' , 'required');

			if($this->form_validation->run() == FALSE) {
				$data['errors'] = validation_errors();
				$this->load->view('create_category',$data);
			}
			else
			{
				$data = array(
					'name' => $this->input->post('name'),
					'description' => $this->input->post('description')
					);

				$this->load->model('category_model');
				$p = $this->category_model->new_cat($data);
				if($p)
				{
					$this->category_list();
				}		   		
			   	else
			   		echo "failure";
			}
		}

		else{
			$this->load->view('404');
		}

		
	}

	public function category_list(){
		$this->load->library('pagination');
		$this->load->library('table');


		$config['base_url'] = base_url().'index.php/category/category_list';
		$config['total_rows'] = $this->db->get('categories')->num_rows();
		$config['per_page'] = 4;
		$config['num_links'] = 5;

		$this->pagination->initialize($config);
		$this->db->order_by("id", "desc"); 
		$data['records'] = $this->db->get('categories',4, $this->uri->segment(3) );

		$this->load->model('menu_model');
		
			$data['cat'] = $this->menu_model->get_categories();
			
			$data['manufacturer'] = $this->menu_model->get_manufacturers();
		
		$this->load->view('show_category_list', $data);

	}

	public function category_list_delete(){

		if($this->session->userdata('is_logged_in') == true){

			$this->load->library('pagination');
			$this->load->library('table');


			$config['base_url'] = base_url().'index.php/category/category_list_delete';
			$config['total_rows'] = $this->db->get('categories')->num_rows();
			$config['per_page'] = 4;
			$config['num_links'] = 5;

			$this->pagination->initialize($config);
			$this->db->order_by("id", "desc"); 
			$data['records'] = $this->db->get('categories',4, $this->uri->segment(3) );
			
			$this->load->view('show_category_list_for_delete', $data);
		}
		else{
			$this->load->view('404');
		}

	}

	public function delete_category(){

		if($this->session->userdata('is_logged_in') == true){

			$aid = $_GET['id'];
			$this->load->model('category_model');
			$this->category_model->delete_category($aid);
			$this->category_list_delete();
		}

		else{
			$this->load->view('404');
		}

	}

}