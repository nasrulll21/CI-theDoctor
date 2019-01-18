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
}