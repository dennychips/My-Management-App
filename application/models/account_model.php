<?php 
class Account_model extends CI_Model{
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	function getAll() {
		$q = $this->db->get('accounts');
		
		if($q->num_rows() === 0){
			return false;
		} else {
			return $q->result();
		}
		
	}
	function getby($id) {
		$this->db->where('id', $id);
		$q = $this->db->get('accounts');
		return $q->result();
	}
	function addAcc($data) {
		$this->db->insert('accounts', $data);
		$id= mysql_insert_id();
		echo $id;
	}
	
}