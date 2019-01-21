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
		$this->load->view('main/kasir/app-profile');
		$this->load->view('main/kasir/apps/footer');
	}
	public function kasir(){
		$data['data'] = $this->userModel->get_Pasien();
		$this->load->view('main/kasir/apps/header');
		$this->load->view('main/kasir/apps/header');
		$this->load->view('main/kasir/apps/admin');
		$this->load->view('main/kasir/apps/sidebar');
		$this->load->view('main/kasir/kasir', $data);
		$this->load->view('main/kasir/apps/footer');
	}
	public function data_pasien(){
		$this->load->model('pelayanan_model');
        $data['pasien'] = $this->pelayanan_model->getPasien();
		$this->load->view('main/kasir/apps/header');
		$this->load->view('main/kasir/apps/header');
		$this->load->view('main/kasir/apps/admin');
		$this->load->view('main/kasir/apps/sidebar');
		$this->load->view('main/table-data-pasien', $data);
		$this->load->view('main/kasir/apps/footer');
	}
	public function getTransaksiById() {
		$idPasien = $this->input->post('idPasien');
		$data['transaksi'] = $idPasien;
		$this->load->view('main/kasir/data_transaksi',$data);
	}
}