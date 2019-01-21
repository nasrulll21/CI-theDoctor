<?php

class pelayanan_model extends CI_Model{
    private $tbl_pasien = "pasien";
    private $tbl_pegawai = "pegawai";
    public function __construct(){
        $this->load->database();
    }

    public function getPasien(){
        $query = $this->db->get($this->tbl_pasien);
        return $query->result();
    }

    public function getPegawai(){
        $query = $this->db->get($this->tbl_pegawai);
        return $query->result();
    }

}