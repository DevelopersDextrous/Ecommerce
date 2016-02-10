<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->model('menu_model');
		
		$data['cat'] = $this->menu_model->get_categories();
		
		$data['manufacturer'] = $this->menu_model->get_manufacturers();

		$this->load->view('index',$data);
	}
}