<?php
class level_Model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function viewLevel(){
        $data= $this->db->get('level');
        return $data->result();
    }
}