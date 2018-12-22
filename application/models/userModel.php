<?php
class userModel extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_all(){
        $query = $this->db->get('user');
        return $query->result();
    }

    public function get_admin(){
        $this->db->where('id_level', '1');
        $query = $this->db->get('user');
        return $query->result();
    }

    public function get_pasien(){
        $this->db->where('id_level', '2');
        $query = $this->db->get('user');
        return $query->result();
    }

    public function get_kasir(){
        $this->db->where('id_level', '3');
        $query = $this->db->get('user');
        return $query->result();
    }

    public function get_perawat(){
        $this->db->where('id_level', '4');
        $query = $this->db->get('user');
        return $query->result();
    }

    public function view($id = null){
        $this->db->where('username', $id);
        $query = $this->db->get('user');
        return $query->result();
    }

    public function delete($id = null){
        $this->db->where('username', $id);
        $this->db->delete('user');
    }

    public function add_akun(){
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
            'alamat' => $this->input->post('almt'),
            'id_level' => $this->input->post('level')
        );
        $query = $this->db->insert('user', $data);
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
            'alamat' => $this->input->post('almt'),
            'id_level' => $this->input->post('level')
        );
        $this->db->where('username', $id);
        $query = $this->db->update('user', $data);
    }
}