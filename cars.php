<?php
	class Cars extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('cars_model');
		}
		public function show_cars(){
			$this->load->library('form_validation');
			$this->load->view('view_cars');
		}
		public function add_car(){
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('model','Модел','required');
			$this->form_validation->set_rules('year','Година','required');
			$this->form_validation->set_rules('price','Цена','required');
			$this->form_validation->set_rules('speed','Максимална скорост','required');

			if($this->form_validation->run() === FALSE){
				$this->show_cars();
			}
				else{
					$this->cars_model->insert_cars();
					$this->load->view('success_cars');
				}
		}

		public function view_all_cars(){
			$data['show_cars'] = $this->cars_model->show_all_cars();
			$this->load->view('view_cars1',$data);
		}
		
	}
?>