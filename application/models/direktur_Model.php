<?php
class direktur_Model extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }
    public function get(){
        return $this->db->get('list_user');
    }
}