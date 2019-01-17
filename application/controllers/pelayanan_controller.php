<?php
class pelayanan_controller extends CI_Controller {
	public function __construct(){
			parent::__construct();
			$this->load->helper('url_helper');
    }

    public function index(){
        $this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('main/pelayanan/apps/sidebar');
		$this->load->view('main/pelayanan/app-profile');
		$this->load->view('apps/footer');
    }

    public function data_pasien(){
        $data['pasien'] = $this->load->pelayanan_model->getpasien();
        $this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('main/pelayanan/apps/sidebar');
		$this->load->view('main/table-data-pasien', $data);
		$this->load->view('apps/footer');
    }

    public function act_add(){
        $this->load->pelayanan_model->add();
        redirect('pelayanan_controller/data_pasien','refresh');
    }
}