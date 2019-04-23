<?php
class Kriteria_model extends CI_Model
{

    public function getAllKriteria(){
        return $this->db->get('kriteria')->result_array();
    }
    public function hapusDataKriteria($id){
        $this->db->where('id', $id);
        $this->db->delete('kriteria');
    }
    public function getKriteriaById(){
        return $this->db->get_where('kriteria', ['id' => $id])->row_array();
    }
    public function updateKriteria(){
        $data = [
            "c1" => $this->input->post('c1', true),
            "c2" => $this->input->post('c2', true),
            "c3" => $this->input->post('c3', true),
            "c4" => $this->input->post('c4', true),
            "c5" => $this->input->post('c5', true),

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kriteria', $data);
    }
}

