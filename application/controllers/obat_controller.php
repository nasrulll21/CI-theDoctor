<?php 
class obat_controller extends CI_Controller {
	public function __construct(){
			parent::__construct();
			$this->load->model('ObatModel');
			$this->load->helper('url_helper');
	}
	
	public function view_Obat(){
		$this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/get_obat');
		$this->load->view('apps/footer');
	}
}