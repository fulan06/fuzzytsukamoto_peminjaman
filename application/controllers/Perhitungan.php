<?php
class Perhitungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perhitungan_model');
        $this->load->model('Kriteria_model');
    }
    public function index()
    {
        if (!$this->session->userdata('authenticated')) {
            $data['menu_home'] = '';
            $data['menu_nasabah'] = 'd-none';
            $data['menu_alternatif'] = 'd-none';
            $data['menu_rules'] = 'd-none';
            $data['menu_kriteria'] = 'd-none';
            $data['menu_nama'] = 'd-none';
            $data['nama'] = '';
            $data['nama_user'] = '';
            $data['menu_perhitungan'] = 'active';
            $data['title'] = 'Perhitungan Fuzzy Tsukamoto';
            $data['perhitungan'] = $this->Perhitungan_model->joinPerhitungan();
            $data['rules'] = $this->Perhitungan_model->getAllRules();
            $data['alternatif'] = $this->Perhitungan_model->getAllAlternatif();
            $data['rule_angka'] = $this->Perhitungan_model->getAllRuleAngka();

            $data['kriteria_penghasilan'] = $this->Kriteria_model->getDataKriteriaPenghasilan();
            $data['kriteria_lama'] = $this->Kriteria_model->getDataKriteriaLamaMenjadiAnggota();
            $data['kriteria_sisa'] = $this->Kriteria_model->getDataKriteriaSisaPinjaman();
            $data['kriteria_jumlah'] = $this->Kriteria_model->getDataKriteriaJumlahPinjaman();
            $data['kriteria_angsuran'] = $this->Kriteria_model->getDataKriteriaBanyakAngsuran();

            $this->load->view('templates/header', $data);
            $this->load->view('perhitungan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data['menu_home'] = '';
            $data['menu_nasabah'] = '';
            $data['menu_alternatif'] = '';
            $data['menu_rules'] = '';
            $data['menu_kriteria'] = '';
            $data['menu_nama'] = '';
            $data['nama'] = $this->session->userdata('nama');
            $data['nama_user'] = $this->session->userdata('nama');
            $data['menu_perhitungan'] = 'active';
            $data['title'] = 'Perhitungan Fuzzy Tsukamoto';
            $data['perhitungan'] = $this->Perhitungan_model->joinPerhitungan();
            $data['rules'] = $this->Perhitungan_model->getAllRules();
            $data['alternatif'] = $this->Perhitungan_model->getAllAlternatif();
            $data['rule_angka'] = $this->Perhitungan_model->getAllRuleAngka();

            $data['kriteria_penghasilan'] = $this->Kriteria_model->getDataKriteriaPenghasilan();
            $data['kriteria_lama'] = $this->Kriteria_model->getDataKriteriaLamaMenjadiAnggota();
            $data['kriteria_sisa'] = $this->Kriteria_model->getDataKriteriaSisaPinjaman();
            $data['kriteria_jumlah'] = $this->Kriteria_model->getDataKriteriaJumlahPinjaman();
            $data['kriteria_angsuran'] = $this->Kriteria_model->getDataKriteriaBanyakAngsuran();

            $this->load->view('templates/header', $data);
            $this->load->view('perhitungan/index', $data);
            $this->load->view('templates/footer');
        }
    }
}
