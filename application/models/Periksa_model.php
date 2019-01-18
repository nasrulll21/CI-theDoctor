<?php
class periksa_model extends CI_Model{
    public function count_gej(){
        $this->db->get('gejala');
    }
}