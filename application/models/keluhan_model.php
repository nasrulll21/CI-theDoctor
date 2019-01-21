<?php
class keluhan_model extends CI_Model{
    
    private $gejala = "gejala";
    public function __construct(){
        $this->load->database();
    }
    public function getGejala(){
        $query = $this->db->get($this->gejala);
        return $query->result();
    }

    public function add_keluhan($id=""){
        
    }
    
    public function getCekByid($id){
        $this->db->where('kd_pasien', $id);
        $this->db->where('status', '1');
        return $this->db->get('cek')->result();
    }

    public function registrasi($id){
        $query = $this->db->query("SELECT pemeriksaan.nama_pemeriksaan as periksa, poli.nama_poli as poli, pemeriksaan.harga as harga from pemeriksaan, poli, kasir, pasien where kasir.kd_pasien = pasien.kd_pasien and kasir.id_periksa = pemeriksaan.id_periksa and pemeriksaan.id_poli = poli.id_poli AND kasir.kd_pasien = ''");
        return $query->result();
    }
}