<?php 
class Category extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('category_model');
	}
	function index() {	
		$data['cats'] = $this->category_model->getAllCat();
		$this->load->view('themes/'.$this->theme.'/category/category_list.php', $data);
		
	}
	function add() {
		//$this->load->view('themes/'.$this->theme.'/category/add_category.php');
		$this->_add();
	}
	private function _add() {
			$data['category'] = $this->input->post('category');
			$insert = $this->category_model->addcat($data);
	}
}