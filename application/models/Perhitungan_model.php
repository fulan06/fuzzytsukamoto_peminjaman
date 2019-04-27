<?php
class Perhitungan_model extends CI_Model
{
    public function getAllRules(){
        return $this->db->get('rules')->result_array();
    }
    public function getAllAlternatif()
    {
        return $this->db->get('alternatif')->result_array();
    }
    public function joinPerhitungan()
    {
        $this->db->select('
          nasabah.*, alternatif.id , alternatif.c1, alternatif.c2, alternatif.c3, alternatif.c4, alternatif.c5
                         ');
        $this->db->join('alternatif', 'nasabah.id = alternatif.id');
        $this->db->from('nasabah');
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function getAllKriteria()
    {
        return $this->db->get('kriteria')->result_array();
    }
    
   
   
}
