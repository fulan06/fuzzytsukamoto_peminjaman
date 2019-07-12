<?php

class Alternatif_model extends CI_Model
{

    public function joinAlternatif()
    {
        $this->db->select('
          nasabah.*, alternatif.c1, alternatif.c2, alternatif.c3, alternatif.c4, alternatif.c5
                         ');
        $this->db->join('alternatif', 'nasabah.id = alternatif.id');
        $this->db->from('nasabah');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getAllNasabah()
    {
        return $this->db->get('nasabah')->result_array();
    }
    public function tambahDataAlternatif()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "c1" => $this->input->post('c1', true),
            "c2" => $this->input->post('c2', true),
            "c3" => $this->input->post('c3', true),
            "c4" => $this->input->post('c4', true),
            "c5" => $this->input->post('c5', true),
        ];
        $this->db->insert('alternatif', $data);
    }
    public function hapusDataAlternatif($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('alternatif');
    }
    public function getAllAlternatif()
    {
        return $this->db->get('alternatif')->result_array();
    }
    public function getAlternatifById($id)
    {
        return $this->db->get_where('alternatif', ['id' => $id])->row_array();
    }
    public function getNamaNasabah($id)
    {
        return $this->db->get_where('nasabah', ['nama' => $id])->row_array();
    }
    public function updateDataAlternatif()
    {
        $data = [
            "c1" => $this->input->post('c1', true),
            "c2" => $this->input->post('c2', true),
            "c3" => $this->input->post('c3', true),
            "c4" => $this->input->post('c4', true),
            "c5" => $this->input->post('c5', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('alternatif', $data);
    }
    
    public function cariDataAlternatif()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('c1', $keyword);
        $this->db->or_like('c2', $keyword);
        $this->db->or_like('c3', $keyword);
        $this->db->or_like('c4', $keyword);
        $this->db->or_like('c5', $keyword);

        $this->db->select('
          nasabah.*, alternatif.c1, alternatif.c2, alternatif.c3, alternatif.c4, alternatif.c5
                         ');
        $this->db->join('alternatif', 'nasabah.id = alternatif.id');
        $this->db->from('nasabah');
        $query = $this->db->get();

        return $query->result_array();
    }
}
