<?php 
Class Dropdown extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('dropdown_model');
	}

	function index(){
		$data['options'] = $this->dropdown_model->getOptions();
		$this->load->view('dropdown/index', $data);
	}

	function getsuboptions($option_id){
		$this->dropdown_model->option_id = $option_id;
		$suboptions = $this->dropdown_model->getSubOptions();

		header('Content-Type: application/x-json; charset=utf-8');
      	echo json_encode($suboptions);
	}
}