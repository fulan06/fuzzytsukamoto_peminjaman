<?php
class Rules_model extends CI_Model
{ 
    public function getAllRules(){
        return $this->db->get('rules')->result_array();
    }
}
