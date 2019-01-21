<?php 
class direktur_controller extends CI_Controller {
    public function __construct(){
		parent::__construct();
		if($this->session->userdata('username') == "" || $this->session->userdata('username') == NULL || $this->session->userdata('level') != 1){
			redirect('auth');
		}
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
	

	public function data_pegawai(){
		$this->load->model('pelayanan_model');
        $data['user'] = $this->direktur_Model->get();
		$this->load->view('main/direktur/apps/header');
		$this->load->view('main/direktur/apps/header');
		$this->load->view('main/direktur/apps/admin');
		$this->load->view('main/direktur/apps/sidebar');
		$this->load->view('main/table-data-pegawai', $data);
		$this->load->view('main/direktur/apps/footer');
    }

	public function data_pasien(){
		$this->load->model('pelayanan_model');
        $data['pasien'] = $this->pelayanan_model->getPasien();
		$this->load->view('main/direktur/apps/header');
		$this->load->view('main/direktur/apps/header');
		$this->load->view('main/direktur/apps/admin');
		$this->load->view('main/direktur/apps/sidebar');
		$this->load->view('main/table-data-pasien', $data);
		$this->load->view('main/direktur/apps/footer');
    }
    
}   