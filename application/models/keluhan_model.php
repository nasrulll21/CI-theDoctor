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
}