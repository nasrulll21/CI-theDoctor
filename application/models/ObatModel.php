<?php
class ObatModel extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_obat(){
        $data= $this->db->get('obat');
        return $data->result();
    }

    public function getID_obat($id=''){
        $this->db->where('id_obat', $id);
        $query = $this->db->get('obat');
        $this->db->last_query();
    }

    public function delete_obat($id=''){
        $this->db->where('id_obat', $id);
        $this->db->delete('obat');
    }

    public function edit_obat(){
        $data = array(
                    'nama_obat' => $this->input->post('nmobt'),
                    'satuan' => $this->input->post('jenis'),
                    'harga' => $this->input->post('hrg'),
                    'stock' => $this->input->post('stk'),
    );
    }
}