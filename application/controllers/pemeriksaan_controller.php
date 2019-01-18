<?php
class pemeriksaan_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('keluhan_model');
		$this->load->model('userModel');
		$this->load->helper('url_helper');
    }

    public function index(){
        $data['gejala'] = $this->keluhan_model->getGejala();
        $data['pasien'] = $this->userModel->get_pasien();
        $this->load->view('main/dokter/apps/header');
        $this->load->view('main/dokter/apps/admin');
        $this->load->view('main/dokter/apps/sidebar');
        $this->load->view('main/dokter/diagnosa', $data);
        $this->load->view('main/dokter/apps/footer');
    }
    public function add(){
        $i=0;
        $result = $this->db->query("select * from gejala");
        foreach($result->result() as $row){
            $data=array(
                'kd_pasien' => $this->input->post('kd'),
                'id_gejala' => $this->input->post('gejala'.$i),
                'status' => $this->input->post('sts'.$i)
            );
            $query = $this->db->insert('cek', $data);
            $i++;
        }
    }

    public function poli(){
        $i=0;
        $result = $this->db->query("select * from cek");
        
        if ('id_gejala'.$i==1 && 'status'.$i==1) {
          $this->db->("select * from pasien_poli ")
        }
    }
}