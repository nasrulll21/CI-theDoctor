<?php 
class obat_controller extends CI_Controller {
	public function __construct(){
			parent::__construct();
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

    public function add_obat(){
        $this->load->view('apps/header');
		$this->load->view('apps/admin');
		$this->load->view('apps/sidebar');
		$this->load->view('main/add_obat');
		$this->load->view('apps/footer');
    }

    public function edit($id=''){
         echo $this->ObatModel->getID_obat($id);    }

    public function act_edit(){
        $this->ObatModel->edit_obat();
        redirect('obat_controller/view_Obat', 'refresh');	
    }

    public function delete($id=''){
        $this->ObatModel->delete_obat($id);
        redirect('obat_controller/view_Obat', 'refresh');	
    }
}