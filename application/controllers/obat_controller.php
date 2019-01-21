<?php 
class obat_controller extends CI_Controller {
	public function __construct(){
            parent::__construct();
            if($this->session->userdata('username') == "" || $this->session->userdata('username') == NULL || $this->session->userdata('level') != 2){
                redirect('auth');
            }
			$this->load->model('ObatModel');
			$this->load->helper('url_helper');
	}
	
	public function view_Obat(){
        $data['obt'] = $this->ObatModel->get_obat();
		$this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/get_obat', $data);
		$this->load->view('apps/footer');
    }

    public function tambah(){
        $this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/add_obat');
		$this->load->view('apps/footer');
    }

    public function act_add(){
        $this->ObatModel->add_obat();
        redirect('obat_controller/view_Obat', 'refresh');
    }

    public function edit($id=''){
         $query['data'] = $this->ObatModel->getID_obat($id);
         $this->load->view('apps/header');
         $this->load->view('apps/admin');
         $this->load->view('apps/sidebar');
         $this->load->view('main/edit_obat',$query);
         $this->load->view('apps/footer');
    }

    public function act_edit($id=''){
        $this->ObatModel->edit_obat($id);
        redirect('obat_controller/view_Obat', 'refresh');	
    }

    public function delete($id=''){
        $this->ObatModel->delete_obat($id);
        redirect('obat_controller/view_Obat', 'refresh');	
    }
}