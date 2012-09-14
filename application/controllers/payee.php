<?php 
class Payee extends MY_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		$this->load->view('themes/'.$this->theme.'/payee/payeelist.php');
	}
}