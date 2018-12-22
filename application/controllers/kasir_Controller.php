<?php 
class kasir_Controller extends CI_Controller {
	public function __construct(){
			parent::__construct();
			$this->load->model('userModel');
			$this->load->helper('url_helper');
	}
	
	public function index(){
		$this->load->view('main/kasir/apps/header');
		$this->load->view('main/kasir/apps/header');
		$this->load->view('main/kasir/apps/admin');
		$this->load->view('main/kasir/apps/sidebar');
		$this->load->view('main/kasir/index');
		$this->load->view('main/kasir/apps/footer');
	}
}