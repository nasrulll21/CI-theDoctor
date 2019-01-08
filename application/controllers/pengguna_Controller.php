<?php
class pengguna_Controller extends CI_Controller {
	public function __construct(){
			parent::__construct();
			$this->load->model('userModel');
			$this->load->helper('url_helper');
    }

    public function dokter(){
			$data['user'] = $this->userModel->get_dokter();
			$this->load->view('apps/header');
			$this->load->view('apps/admin');
			$this->load->view('apps/sidebar');
			$this->load->view('main/table-akun-pasien', $data);
			$this->load->view('apps/footer');
	}
	
	public function direktur(){
		$data['user'] = $this->userModel->get_direktur();
		$this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/table-akun-admin', $data);
		$this->load->view('apps/footer');
}

    public function kasir(){
		$data['user'] = $this->userModel->get_kasir();
		$this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/table-akun-kasir', $data);
		$this->load->view('apps/footer');
		}

	public function plyanan(){
		$data['user'] = $this->userModel->get_plynan();
		$this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/table-akun-kasir', $data);
		$this->load->view('apps/footer');
		}
			
		public function tambah_akun(){
			$this->load->view('apps/header');
			$this->load->view('apps/admin');
			$this->load->view('apps/sidebar');
			$this->load->view('main/tambah_pengguna');
			$this->load->view('apps/footer');
		}

		public function tambah_pasien(){
			$this->load->view('main/Registration');
		}

		public function view_user(){
			$this->load->view('main/view_user');
		}
	
		public function act_addAkun(){
			$this->userModel->add_akun();
			redirect('main/Registration', 'refresh');
		}

		public function act_addPasien(){
			$we = $this->userModel->add_pasien();
			redirect('pengguna_Controller/tambah_pasien', 'refresh');
		}

		
    public function perawat(){
			$data['user'] = $this->userModel->get_perawat();
			$this->load->view('apps/header');
			$this->load->view('apps/admin');
			$this->load->view('apps/sidebar');
			$this->load->view('main/table-akun-perawat', $data);
			$this->load->view('apps/footer');
    }

		public function view_akun($id = null){
			$data['user'] = $this->userModel->view($id);
			$this->load->view('apps/header');
			$this->load->view('apps/admin');
			$this->load->view('apps/sidebar');
			$this->load->view('main/view_akun', $data);
			$this->load->view('apps/footer');
		}

		public function edit_akun($id = null){
			$this->load->model('level_Model');
			$data['lvl'] = $this->level_Model->viewLevel(); 
			$data['user'] = $this->userModel->view($id);
			$this->load->view('apps/header');
			$this->load->view('apps/admin');
			$this->load->view('apps/sidebar');
			$this->load->view('main/edit_akun', $data);
			$this->load->view('apps/footer');
		}

	public function act_edit($id = ''){
		$this->userModel->edit_akun($id);
		redirect('Admin', 'refresh');
	}

	public function delete_akun($id = null){
		$this->userModel->delete($id);
		redirect('Admin', 'refresh');
	}

		

}