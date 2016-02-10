<?php 
class Manufacturer_model extends CI_Model {

	public function entry_new_manufacturer(){
		$new_manu_data = array(
			'name' => $this->input->post('name'),
			'site' => "https://www.".$this->input->post('site'),
			'contact' => $this->input->post('contact'),
			'description' => $this->input->post('description')
			);

		$new = $this->db->insert('manufacturers', $new_manu_data);

		if($new)
			return true;
		else
			return false;
	}

	public function delete_director($id) {
		//$q = $this->db->query("DELETE * FROM admin WHERE id = $id");
		$q = $this->db->delete('directors', array('id' => $id));

		if($q){
			return true;
		}
	}

	public function get_total_directors(){

		$q = $this->db->query('SELECT * FROM directors');

		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row) {
				$data [] = $row;
			}
			return $data;
		}
	}
}