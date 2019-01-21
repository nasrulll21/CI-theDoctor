<?php
class periksa_model extends CI_Model{
    public function count_gej(){
        $this->db->get('gejala');
    }
    public function getCekByid($id){
        $this->db->where('kd_pasien', $id);
        $this->db->where('status', '1');
        return $this->db->get('cek');
    }
}