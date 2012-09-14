<?php 

class Dashboard extends MY_Controller {
	function index() {
		$this->load->view('themes/'.$this->theme.'/dashboard.php');
	}
}