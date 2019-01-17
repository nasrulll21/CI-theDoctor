<?php

class pelayanan_model extends CI_Model{
    $tbl_pasien = "pasien";
    public function __construct(){
        $this->load->database();
    }

    public function getPasien(){
        $query = $this->db->get($this->tbl_pasien);
    }
}