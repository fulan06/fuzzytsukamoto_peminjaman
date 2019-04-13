<?php

class Alternatif_model extends CI_Model
{
    public function joinAlternatif()
    {
        $this->db->select('
          nasabah.*, alternatif.id , alternatif.c1, alternatif.c2, alternatif.c3, alternatif.c4, alternatif.c5
                         ');
        $this->db->join('alternatif', 'nasabah.id = alternatif.id');
        $this->db->from('nasabah');
        $query = $this->db->get();
        return $query->result_array();
        
    }
}
