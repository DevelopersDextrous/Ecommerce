<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$q = "SELECT * FROM products WHERE prod_stat = 'Y'";
		$limit = 5;

		$this->load->library('pagination');
		$this->load->library('table');


		$config['base_url'] = base_url().'index.php/product/product_list';
		$config['total_rows'] = $this->db->query($q)->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 3;

		$this->pagination->initialize($config);
		$offset =  ($this->uri->segment(3) != '' ? $this->uri->segment(3) : 0);
		$q .= " LIMIT $limit OFFSET $offset";
		//$data['records'] = $this->db->get('products',5, $this->uri->segment(3) );
		$data['records'] = $this->db->query($q)->result();

		$this->load->model('menu_model');
		
		$data['cat'] = $this->menu_model->get_categories();
		
		$data['manufacturer'] = $this->menu_model->get_manufacturers();

		$this->load->view('index',$data);
	}
}