<?php 
class Director_model extends CI_Model {

	public function entry_new_director(){
		$new_director_data = array(
			'name' => $this->input->post('name'),
			'branch' => $this->input->post('branch'),
			'designation' => $this->input->post('designation'),
			'email' => $this->input->post('email'),
			'description' => $this->input->post('desc')
			);

		$new = $this->db->insert('directors', $new_director_data);

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