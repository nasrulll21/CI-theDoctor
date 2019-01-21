<?php
class periksa_model extends CI_Model{
    public function count_gej(){
        $this->db->get('gejala');
    }

    function getPemeriksaan($id) {
        $this->db->where('kd_pasien',$id);
        $this->db->where('status','1'); 
        return $this->db->get('cek');
    }

    function getDiagnosa() {
        return $this->db->get('diagnosa')->result();
    }

    function getPoli() {
        return $this->db->get('poli')->result();
    }

    function getViewDiagnos() {
        return $this->db->get('vwdiagnosa')->result();
    }

    function getPasien($id) {
        $this->db->where('kd_pasien',$id);
        return $this->db->get('pasien')->result();
    }
}