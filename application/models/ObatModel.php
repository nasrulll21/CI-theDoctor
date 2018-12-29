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
        return $query->result();
    }

    public function add_obat(){
        $data = array(
            'id_obat' => $this->input->post('id'),
            'nama_obat' => $this->input->post('nmobt'),
            'satuan' => $this->input->post('jenis'),
            'harga' => $this->input->post('hrg'),
            'stock' => $this->input->post('stk'),
        );
        $this->db->insert('obat', $data);
    }

    public function delete_obat($id=''){
        $this->db->where('id_obat', $id);
        $this->db->delete('obat');
    }

    public function edit_obat($id=''){
        $data = array(
                    'nama_obat' => $this->input->post('nmobt'),
                    'satuan' => $this->input->post('jenis'),
                    'harga' => $this->input->post('hrg'),
                    'stock' => $this->input->post('stk'),
    );
    $this->db->where('id_obat', $id);
    $this->db->update('obat', $data);
    }
}