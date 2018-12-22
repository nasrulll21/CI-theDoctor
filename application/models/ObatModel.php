<?php
class ObatModel extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_obat(){
        $data= $this->db->get('obat');
        return $data->result();
    }
}