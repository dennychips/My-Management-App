<?php 
class Category_model extends CI_Model {
	function __construct() {
		$this->load->database();
	}
	
	function getAllCat(){
		$q = $this->db->get('category');
		if($q->num_rows === 0 ){
			return false;
		} else {
			return $q->result();
		}
	}
	
	function addcat($data) {
		if($this->db->insert('category',$data)) {
			return true;
		} else {
			return false;
		}	
	}
	function getCats($options = array()) {
		$this->db->select('category');
		$this->db->select('id');
	    $this->db->like('category', $options['cat'], 'after');
   		$query = $this->db->get('category');
		if($query->num_rows() > 0 ) {
			foreach($query->result_array() as $row ) {
				$new_row['id'] = htmlentities(stripcslashes($row['id']));
				$new_row['value'] = htmlentities(stripcslashes($row['category']));
				$row_set[] = $new_row;
			}
		return $row_set;
		}
	}
	
}