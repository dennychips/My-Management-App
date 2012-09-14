<?php 
class Expense_model extends CI_Model{
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	
	function expAcc($id) {
		$this->db->select('*');
		$this->db->from('acc_relationship');
		$this->db->join('expense', 'expense.id = acc_relationship.exp_id' );
		$this->db->join('category', 'category.id = acc_relationship.cat_id' );
		$this->db->join('payee', 'payee.id = acc_relationship.payee_id' );
		$this->db->where('acc_id', $id);
		$q = $this->db->get();
/* 		SELECT * FROM `acc_relationship` join expense on exp_id = acc_relationship.exp_id where acc_id = 1 */
//		print_r($this->db->last_query());
		return $q->result();
	}
	function getpayee($options = array()) {
		$this->db->select('payee_name');
		$this->db->select('id');
	    $this->db->like('payee_name', $options['payee_name'], 'after');
   		$query = $this->db->get('payee');
		/* return $query->result(); */
		
		if($query->num_rows() > 0 ) {
			foreach($query->result_array() as $row ) {
				$new_row['id'] = htmlentities(stripcslashes($row['id']));
				$new_row['value'] = htmlentities(stripcslashes($row['payee_name']));
				$row_set[] = $new_row;
			}
		return $row_set;
		}
	}
	function startbalancebyid($id){
		$this->db->where('id', $id);
		$q = $this->db->get('accounts');
		return $q->result();
	}
	
	function insertTrans($exp_type, $amount, $acc_id, $payeeid, $catid, $date) {
		$data = array(
			'exp_type' => $exp_type,
			'amount' => $amount,
			'date' => $date
		);		
		$this->db->insert('expense', $data);
		$exp_id = mysql_insert_id();
		$relation = array(
			'acc_id' => $acc_id,
			'payee_id' => $payeeid,
			'cat_id' => $catid,
			'exp_id' => $exp_id
		);
		$this->addrelation($relation);
		//$this->current_balance($exp_type, $acc_id, $amount);
	}
	
	function addrelation($data) {
		$this->db->insert('acc_relationship', $data);
	}
	
	function current_balance($exp_type, $acc_id, $amount) {
		$start = $this->startbalancebyid($acc_id);
		if($exp_type  == 'expense') {
			$data['name'] = $start[0]->name;
			$data['type'] = $start[0]->type;
			$data['start_balance'] = $start[0]->start_balance - $amount;
			
			$this->db->where('id', $acc_id);
			$this->db->update('accounts', $data);
			
		} elseif($exp_type == 'income') {
			$data['name'] = $start[0]->name;
			$data['type'] = $start[0]->type;
			$data['start_balance'] = $start[0]->start_balance + $amount;
			$this->db->where('id', $acc_id);
			$this->db->update('accounts', $data);
		}
		
		print_r($this->db->last_query());
		
		
	}
	
}