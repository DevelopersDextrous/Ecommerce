<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function index() {
		if($this->session->userdata('is_logged_in') == true){
			$this->pull_orders_list();
		}
		else{
			$this->load->view('404');
		}
	}

	public function pull_orders_list() {

		$q = "SELECT orders.id, orders.invoice, orders.quantity, orders.status, orders.order_date, orders.order_time, orders.address, 
		orders.payment_type, users.first_name, users.last_name, users.email, users.contact, products.name, products.price  
		FROM orders INNER JOIN users ON orders.user_id = users.id
		INNER JOIN products ON orders.prod_id = products.id
		ORDER BY orders.order_date DESC, orders.order_time DESC";

		$limit = 5;

		$this->load->library('pagination');
		$this->load->library('table');


		$config['base_url'] = base_url().'index.php/orders/pull_orders_list';
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

		$this->load->view('orders_list',$data);
		
	}

	public function update_status() {
		if($this->session->userdata('is_logged_in') == true){
			$id = $_GET['id'];
			$status = $this->input->post('status');

			$this->load->model('order_model');

			if($status == 'Cancel') {
				$d = $this->order_model->delete_order($id);
				if($d) {
					$this->index();
				}
			}
			else {
				$d = $this->order_model->update_order($id);
				if($d) {
					$this->index();
				}
			}
		}
		else{
			$this->load->view('404');
		}
	}

}