<?php 
class Menu_model extends CI_Model {

	public function get_categories()
	{
		$q = $this->db->query('SELECT * FROM categories');

		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row) {
				$data [] = $row;
			}
			return $data;
		}
	}

	public function get_manufacturers()
	{
		$q = $this->db->query('SELECT id, name FROM manufacturers');

		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row) {
				$data [] = $row;
			}
			return $data;
		}
	}
}