<?php
class pemeriksaan_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
        $this->load->model('keluhan_model');
        $this->load->model('Periksa_model');
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
        $this->load->model('Periksa_model');
        $result = $this->db->query("select * from gejala");
        foreach($result->result() as $row){
            $data=array(
                'kd_pasien' => $this->input->post('kd'),
                'id_gejala' => $this->input->post('gejala'.$i),
                'status' => $this->input->post('sts'.$i) == null ? '0' :  $this->input->post('sts'.$i)
            );
            $query = $this->db->insert('cek', $data);
            $i++;
        }
        $data['hasilPemeriksaan'] = $this->keluhan_model->getCekById($this->input->post('kd'));
        // $data['hasilPemeriksaan'] = $this->keluhan_model->getCekById($kode);
        $data['pasien'] = $this->Periksa_model->getPasien($this->input->post('kd'));
        $data['diagnosa'] = $this->Periksa_model->getDiagnosa();
        $data['poli'] = $this->Periksa_model->getPoli();
        $data['listDiagnosa'] = $this->Periksa_model->getViewDiagnos();
        $this->load->view('main/dokter/apps/header');
        $this->load->view('main/dokter/apps/admin');
        $this->load->view('main/dokter/apps/sidebar');
        $this->load->view('main/dokter/hasil_diagnosa', $data);
        $this->load->view('main/dokter/apps/footer');
    }

    public function regis(){
        foreach ($this->input->post('regis') as $select) {   
            $data = array(
                'kd_pasien' => $this->input->post('kd'),
                'id_periksa' => $select
            );
            $this->db->insert('kasir',$data);
        }
        redirect('kasir_controller/kasir');
    }

    public function diagnosa($id){
       $data['cek_diagnosa'] = $this->keluhan_model->getCekByid($id);
       foreach($cek_diagnosa as $cek){
           echo $cek->kd_pasien;
       }
    }
}