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

	var $gallery_path;
	function save_product_image() {
		$this->gallery_path = realpath(APPPATH . '../img');        
        $config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path
		);
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();

		$content = array(
			'image' => 'img/'.$image_data['file_name']
			);

		$this->db->where('id', $this->session->userdata('prod_id'));
		$update = $this->db->update('products', $content);
		return $update;
	}

	public function save_product_category($cat_id) {
		$content = array(
			'p_id' => $this->session->userdata('prod_id'),
			'cat_id' => $cat_id
			);

		$this->db->insert('product_category', $content);
	}

	public function get_product($id) {

		$q = $this->db->query("SELECT 
                    products.name, 
                    products.description,
                    products.price,
		products.quantity,
                products.date_added, 
                products.image,
		T.cat_name,
                manufacturers.name AS manu_name  
                    FROM products 
			INNER JOIN 
                        (SELECT DISTINCT product_category.p_id AS pp_id, categories.name AS cat_name FROM categories 
                        INNER JOIN product_category 
                        ON categories.id = product_category.cat_id) AS T
                        ON products.id = T.pp_id 
                        INNER JOIN manufacturers ON manufacturers.id = products.manufacturer_id
			WHERE products.id = '$id' ");

		if ($q->num_rows > 0) {

			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			print_r($data);
			die();
			return $data;
			
		} 
	}
}