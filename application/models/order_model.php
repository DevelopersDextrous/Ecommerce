<?php 
class Order_model extends CI_Model {

	public function delete_order($id) {
		$q = $this->db->delete('orders', array('id' => $id));

		if($q){
			return true;
		}
	}

	public function update_order($id) {
		$s = $this->input->post('status');

		$q = $this->db->query("UPDATE orders SET status = '$s' 
            WHERE id = '$id'");

		if($q){
			return true;
		}
	}
}