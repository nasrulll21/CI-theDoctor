<?php
class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('username') == "" || $this->session->userdata('username') == NULL || $this->session->userdata('level') != 0){
			redirect('auth');
		}
		$this->load->model('Periksa_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/app-profile');
		$this->load->view('apps/footer');
	}

	public function laboratorium()
	{
		$data['periksa'] = $this->Periksa_model->like_lb();
		$this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/table-laboratorium', $data);
		$this->load->view('apps/footer');
	}
	
    public function Radiologi()
	{
		$data['periksa'] = $this->Periksa_model->like_rd();
		$this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/table-radiologi', $data);
		$this->load->view('apps/footer');
	}
	
	public function Operasi()
	{
		$data['periksa'] = $this->Periksa_model->like_op();
		$this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/table-operasi', $data);
		$this->load->view('apps/footer');
	}

	public function insertPeriksa()
	{
		$this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/insert_periksa');
		$this->load->view('apps/footer');
	}

	public function error()
	{
		$this->load->view('page-error-404');
	}

		//update
		public function update_room($id = null){
			$data['Data'] = $this->Periksa_model->update($id);
			$this->load->view('apps/header');
			$this->load->view('apps/admin');
			$this->load->view('apps/sidebar');
			$this->load->view('main/update_room', $data);
			$this->load->view('apps/footer');
		}

		public function action_update($id= ''){
			$data = array(
				'nama_pemeriksaan' => $this->input->post('nm_periksa'),
				'harga' => $this->input->post('harga')
			);
			$this->db->where('id_periksa', $id);
			$this->db->update('pemeriksaan', $data);
			redirect('Admin', 'refresh');
		}

		//delete
		public function delete_room($id = null){
			$this->db->where('id_periksa', $id);
			$this->db->delete('pemeriksaan');
			redirect('Admin', 'refresh');	
		}

		//tambah
		public function add_periksa(){
			$data = array(
				'id_periksa' => $this->input->post('id'),
				'nama_pemeriksaan' => $this->input->post('nm_periksa'),
				'harga' => $this->input->post('harga')
			);
			$this->db->insert('pemeriksaan', $data);
			redirect('Admin', 'refresh');
		}

}
