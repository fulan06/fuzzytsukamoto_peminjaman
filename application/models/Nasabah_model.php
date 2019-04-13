<?php

class Nasabah_model extends CI_model
{
   public function getAllNasabah()
   {
      return $this->db->get('nasabah')->result_array();
   }

   public function tambahDataNasabah(){
      $data = [
         
         "nip" => $this->input->post('nip', true),
         "nama" => $this->input->post('nama', true),
         "nohp" => $this->input->post('nohp', true),
         "keterangan" => $this->input->post('keterangan', true),
      ];
      $this->db->insert('nasabah', $data);
   }
   public function hapusDataNasabah($id){
      $this->db->where('id', $id);
      $this->db->delete('nasabah');
   }
   public function getNasabahById($id){
      return $this->db->get_where('nasabah',['id' => $id])->row_array();
   }
   public function updateDataNasabah(){
      $data = [
         
         "nip" => $this->input->post('nip', true),
         "nama" => $this->input->post('nama', true),
         "nohp" => $this->input->post('nohp', true),
         "keterangan" => $this->input->post('keterangan', true),
      ];
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('nasabah', $data);
   }
}
