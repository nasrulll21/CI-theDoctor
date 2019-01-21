<?php
class userModel extends CI_Model{
    
    public function __construct(){
        $this->load->database();
        $this->load->helper('string');
    }

    public function get_pasien(){
        $query = $this->db->get("pasien");
        return $query->result();
    }

    public function get_direktur(){
        $this->db->where('level', '1');
        $query = $this->db->get("list_user");
        return $query->result();
    }

    public function get_plynan(){
        $this->db->where('level', '2');
        $query = $this->db->get("list_user");
        return $query->result();
    }

    public function get_dokter(){
        $this->db->where('level', '3');
        $query = $this->db->get("list_user");
        return $query->result();
    }

    public function get_kasir(){
        $this->db->where('level', '4');
        $query = $this->db->get("list_user");
        return $query->result();
    }

    public function view($id = null){
        $this->db->where('username', $id);
        $query = $this->db->get("pasien");
        return $query->result();
    }

    public function delete($id = null){
        $this->db->where('username', $id);
        $this->db->delete("pasien");
    }

    public function getLoginData($data) {
		$result = $this->db->get_where($this->table_user,$data);
		return $result;
	}

    public function add_akun(){
        
        $data= array(
            'nama_lengkap' => $this->input->post('nama'),
            'jk' => $this->input->post('jk'),
            'tgl_lahir' => $this->input->post('tgl'),
            'agama' => $this->input->post('agama'),
            'umur' => $this->input->post('umur'),
            'nama_ortu' => $this->input->post('nama_ortu'),
            'gol_darah' => $this->input->post('gol'),
            'bpjs' => $this->input->post('bpjs'),
            'ktp' => $this->input->post('ktp'),
            'telepon' => $this->input->post('telp'),
            'id_poli' => $this->input->post('id_poli'),
            'alamat' => $this->input->post('almt'),

        );
        $query = $this->db->insert('pasien', $data);
        return $query;
    }

    public function add_pasien(){
        $date=(new DateTime('now'))->format('Y-m-d H:i:s');
        $data= array(
            'kd_pasien' => $this->input->post('idd'),
            'nama_lengkap' => $this->input->post('nama'),
            'jk' => $this->input->post('jk'),
            'tgl_lahir' => $this->input->post('tgl'),
            'agama' => $this->input->post('agama'),
            'umur' => $this->input->post('umur'),
            'nama_ortu' => $this->input->post('nama_ortu'),
            'gol_darah' => $this->input->post('gol'),
            'bpjs' => $this->input->post('bpjs'),
            'ktp' => $this->input->post('ktp'),
            'telepon' => $this->input->post('telp'),
            'id_poli' => $this->input->post('id_poli'),
            'alamat' => $this->input->post('almt'),
            'tgl_regis' =>$date
        );
        $query = $this->db->insert('pasien', $data);
        return $query;
    }

    public function edit_akun($id = null){
        $data= array(
            'username' => $this->input->post('username'),
            'nama_lengkap' => $this->input->post('nama'),
            'pass' => $this->input->post('pass'),
            'jk' => $this->input->post('jk'),
            'tgl_lahir' => $this->input->post('tgl'),
            'agama' => $this->input->post('agama'),
            'umur' => $this->input->post('umur'),
            'nama_ortu' => $this->input->post('nama_ortu'),
            'gol_darah' => $this->input->post('gol'),
            'bpjs' => $this->input->post('bpjs'),
            'telepon' => $this->input->post('telp'),
            'id_poli' => $this->input->post('id_poli'),
            'alamat' => $this->input->post('almt'),
            'id_level' => $this->input->post('level')
        );
        $this->db->where('username', $id);
        $query = $this->db->update('pasien', $data);
    }

    public function getUserById($id){
        $query = $this->db->get_where('user',$id);
        return $query;
    }
    public function get_pasienUmum($id=""){
        $this->db->where('id_poli', $id);
        $this->db->get('pasien')->result();
    }
}