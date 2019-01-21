<?php 
class kasir_Controller extends CI_Controller {
	public function __construct(){
			parent::__construct();
			if($this->session->userdata('username') == "" || $this->session->userdata('username') == NULL || $this->session->userdata('level') != 4){
				redirect('auth');
			}
			$this->load->model('keluhan_model');
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
		$data['transaksi'] = $this->keluhan_model->transaksi($id_pasien);
		$this->load->view('main/kasir/data_transaksi',$data);
	}
}