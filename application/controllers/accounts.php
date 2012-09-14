<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Accounts extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model(array('account_model', 'expense_model'));
	}
	function index() {
		$data['accounts'] = $this->account_model->getAll();
		$this->load->view('themes/'. $this->theme .'/accounts/accountlist', $data);
	}
	function view($id) {
		$uri = $id;
		$data['acc'] = $this->account_model->getby($id);
		$data['acc_id'] = $id;
		$data['expense'] = $this->expense_model->expAcc($id);
		$this->load->view('themes/'.$this->theme .'/accounts/accountdetails', $data);
	}
	function expenses($id) {
		$this->load->view('themes/'.$this->theme .'/expenses/addexpenses');
	}
}