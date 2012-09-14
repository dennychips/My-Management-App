<?php 
class Ajax extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('expense_model');
		$this->load->model('account_model');
		$this->load->model('category_model');
	}
	
	function getpayee() {
		$term = $this->input->post('term', TRUE);

		if (strlen($term) < 2) break;
		$rows = $this->expense_model->getpayee(array('payee_name' => $term));
		echo json_encode($rows);
/*
		$keywords = array();
		foreach ($rows as $row)
			 array_push($keywords, $row->payee_name, $row->id);
		echo json_encode($keywords);
*/
	}
	function getCat() {
		$term = $this->input->post('term', TRUE);
		if (strlen($term) < 2) break;
		$rows = $this->category_model->getCats(array('cat' => $term));
		echo json_encode($rows);
	}
	
	function add_acc() {
		$data['name'] = $this->input->post('acc_name');
		$data['type'] = $this->input->post('acc_type');
		$data['start_balance'] = $this->input->post('start_balance');
		$this->account_model->addAcc($data);
	}
	function addExps($id) {
			$acc_id = $id;
			$amount = $this->input->post('amount');
			$exp_type = $this->input->post('exp_type');
			$payeeid = $this->input->post('payeeid');
			$catid = $this->input->post('catid');
			$date = $this->input->post('accountdate');
			$this->expense_model->insertTrans($exp_type, $amount, $acc_id, $payeeid, $catid, $date);		
	}
	
	function addCat() {
		$data = $this->input->post();
		
		print_r($data);
	}
}