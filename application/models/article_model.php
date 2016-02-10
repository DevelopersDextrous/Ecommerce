<?php 
class Article_model extends CI_Model {
	
	public function new_article($data){
		$new = $this->db->insert('article', $data);

		if($new)
			return true;
		else
			return false;

	}

	public function get_article_id($data){

		$this->db->select('id');             
		$this->db->from('article');			
		$this->db->where($data);
		$q = $this->db->get();

		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row) {
				$d [] = $row;
			}
			return $d;
		}
	}

	public function get_article($aid){

		$this->db->select('author,title,subtitle,content,date_published');             
		$this->db->from('article');			
		$this->db->where(array('id' => $aid));
		$q = $this->db->get();

		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row) {
				$data [] = $row;
			}
			return $data;
		}
	}

	public function get_article_list(){

		$this->db->select('id,author,title,subtitle,content,date_published');             
		$this->db->from('article');			
		$q = $this->db->get();

		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row) {
				$data [] = $row;
			}
			return $data;
		}
	}

	public function delete_article($aid) {
		$q = $this->db->delete('article', array('id' => $aid));

		if($q){
			return true;
		}
	}

	public function get_total_articles(){

		$q = $this->db->query('SELECT * FROM article');

		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row) {
				$data [] = $row;
			}
			return $data;
		}
	}

}
 ?>