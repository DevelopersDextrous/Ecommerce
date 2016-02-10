<?php 
class Category_model extends CI_Model {
	
	public function new_cat($data){
		$n = $this->db->insert('categories', $data);

		if($n)
			return true;
		else
			return false;

	}


	public function delete_category($aid) {
		$q = $this->db->delete('categories', array('id' => $aid));

		if($q){
			return true;
		}
	}


}
 ?>