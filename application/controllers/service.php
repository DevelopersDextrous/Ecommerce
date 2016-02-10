<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function acquisation_merger(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('acquisation_merger',$data);
	}
	
	public function bookkeeping_accounting(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('bookkeeping_accounting',$data);
	}
	
	public function budgeting(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('budgeting',$data);
	}

	public function charitable_trusts(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('charitable_trusts',$data);
	}

	public function company_secretary(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('company_secretary',$data);
	}

	public function contact_us(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$data['errors'] = array();
		$this->load->view('contact_us',$data);
	}

	public function estate_planning(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('estate_planning',$data);
	}

	public function farm_accounting(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('farm_accounting',$data);
	}

	public function financing(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('financing',$data);
	}

	public function incometax_vat(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('incometax_vat',$data);
	}

	public function insolvency(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('insolvency',$data);
	}

	public function interest(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('interest',$data);
	}

	public function management_consulting(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('management_consulting',$data);
	}

	public function office_duties(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('office_duties',$data);
	}
	
	public function payroll_services(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('payroll_services',$data);
	}

	public function portfolio_management(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('portfolio_management',$data);
	}

	public function rental_property(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('rental_property',$data);
	}

	public function retirement_planning(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('retirement_planning',$data);
	}

	public function risk_management(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('risk_management',$data);
	}


	public function selling_business(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('selling_business',$data);
	}

	public function sidebar_left(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('sidebar-left',$data);
	}

	public function software_solutions(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('software_solutions',$data);
	}

	public function startup(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();

		$this->load->view('startup',$data);
	}

	public function strategic_planning(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('strategic_planning',$data);
	}

	public function succession_planning(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('succession_planning',$data);
	}
	
	public function taxation(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('taxation',$data);
	}
	public function telephone(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('telephone',$data);
	}
	public function trusts(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('trusts',$data);
	}
	public function vat(){
		$this->load->model('article_model');
		$data['article_count'] = $this->article_model->get_total_articles();
		$this->load->model('director_model');
		$data['director_count'] = $this->director_model->get_total_directors();
		$this->load->view('vat',$data);
	}
}