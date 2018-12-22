<?php
class Periksa_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_periksa(){
        $query = $this->db->get('pemeriksaan');
        return $query->result_array();
    }

    public function like_lb(){
        $this->db->like('id_periksa', 'LB');
        $query = $this->db->get('pemeriksaan');
        return $query->result_array();
    }

    public function like_rd(){
        $this->db->like('id_periksa', 'RD');
        $query = $this->db->get('pemeriksaan');
        return $query->result_array();
    }

    public function like_op(){
        $this->db->like('id_periksa', 'OP');
        $query = $this->db->get('pemeriksaan');
        return $query->result_array();
    }

    public function update($id = null){
		$this->db->where('id_periksa', $id);
        $data = $this->db->get('pemeriksaan');
        return $data->result();
    }

    public function act_update($id = null){
        // $data = array(
        //     'nama_pemeriksaan' => $this->input->post('nm_periksa'),
        //     'harga' => $this->input->post('harga')
        // );
        // $this->db->where('id_periksa', $id);
        // $this->db->update('pemeriksaan', $data);
    }
}