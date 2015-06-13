<?php
	class Cars_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function insert_cars(){
			$car = array
				(
				'model' => $this->input->post('model'),
				'year' => $this->input->post('year'),
				'price' => $this->input->post('price'),
				'max_speed' => $this->input->post('speed'),
				);

			return $this->db->insert('cars',$car);
		}
		public function show_all_cars(){
			$query = $this->db->get('cars');
			return $query->result_array();
		}
	}
?>