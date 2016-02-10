<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();

		$this->load->view('index',$data);
	}
}