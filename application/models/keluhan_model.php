<?php
class keluhan_model extends CI_Model{
    
    private $table = "gejala";
    public function __construct(){
        $this->load->database();
    }
    public function getGejala(){
        $query = $this->db->get($this->table);
        return $query->result();
    }
}