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
    public function getKriteriaById($id){
        return $this->db->get_where('kriteria', ['id' => $id])->row_array();
    }
    public function updateKriteria(){
        $data = [
            "batasb" => $this->input->post('batasb', true),
            "batast" => $this->input->post('batast', true),
            "batasa" => $this->input->post('batasa', true),

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kriteria', $data);
    }

    public function getDataKriteriaPenghasilan()
    {
        return $this->db->get_where('kriteria',['namakr'=>'Penghasilan'])->row_array();
    }

    public function getDataKriteriaLamaMenjadiAnggota()
    {
        return $this->db->get_where('kriteria',['namakr'=>'Lama Menjadi Anggota'])->row_array();
    }
    public function getDataKriteriaSisaPinjaman()
    {
        return $this->db->get_where('kriteria',['namakr'=>'Sisa Pinjaman'])->row_array();
    }
    public function getDataKriteriaJumlahPinjaman()
    {
        return $this->db->get_where('kriteria',['namakr'=>'Jumlah Pinjaman'])->row_array();
    }
    public function getDataKriteriaBanyakAngsuran()
    {
        return $this->db->get_where('kriteria',['namakr'=>'Banyak Angsuran'])->row_array();
    }

    
}

