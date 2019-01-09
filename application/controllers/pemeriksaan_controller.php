<?php
class pemeriksaan_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('keluhan_model');
		$this->load->helper('url_helper');
    }

    public function diagnosa(){
        $data['gejala'] = $this->keluhan_model->getGejala();
        $this->load->view('main/dokter/apps/header');
        $this->load->view('main/dokter/apps/admin');
        $this->load->view('main/dokter/apps/sidebar');
        $this->load->view('main/dokter/diagnosa', $data);
        $this->load->view('main/dokter/apps/footer');
    }
}