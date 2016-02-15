<?php 
class Product_model extends CI_Model {

	public function entry_new_product(){
		$today = new DateTime();
        $today->add(new DateInterval('P0D'));
        $today = $today->format('Y-m-d');

		$new_manu_data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'date_added' => $today,
			'manufacturer_id' => $this->input->post('manufacturer'),
			'prod_stat' => $this->input->post('prod_stat'),
			'price' => $this->input->post('price'),
			'quantity' => $this->input->post('quantity')
			);

		$new = $this->db->insert('products', $new_manu_data);

		if($new)
			return true;
		else
			return false;
	}

	public function get_id($name) {

		$d = array(
               'name' => $name
            );

		$this->db->select('id');             
		$this->db->from('products');			
		$this->db->where($d);
		$q = $this->db->get();

		if($q->num_rows() == 1){
			return $q->result();	
		}
	}
}