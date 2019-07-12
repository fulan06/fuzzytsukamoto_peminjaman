<?php
class Login_model extends CI_Model
{
    function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function login($username, $password)
    {
        $periksa = $this->db->get_where('user',array('username' => $username,'password' => $password));
        if ($periksa->num_rows()>0) {
            return 1;
        }else{
            return 0;
        }
    }
    public function get($username){
        $this->db->where('username', $username);
        $result = $this->db->get('user')->row();
        return $result;
    }
}
