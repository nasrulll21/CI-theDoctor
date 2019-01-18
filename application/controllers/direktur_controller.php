<?php 
class direktur_controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('direktur_Model');
        $this->load->helper('url_helper');
    }

	public function index(){
		$this->load->view('main/direktur/apps/header');
		$this->load->view('main/direktur/apps/header');
		$this->load->view('main/direktur/apps/admin');
		$this->load->view('main/direktur/apps/sidebar');
		$this->load->view('main/direktur/app-profile');
		$this->load->view('main/direktur/apps/footer');
    }
    
}   