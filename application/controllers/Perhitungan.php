<?php
class Perhitungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perhitungan_model');
    }
    public function index()
    {
        $data['title'] = 'Perhitungan Fuzzy Tsukamoto';
        $data['perhitungan'] = $this->Perhitungan_model->joinPerhitungan();
        $data['rules'] = $this->Perhitungan_model->getAllRules();
        $data['alternatif'] = $this->Perhitungan_model->getAllAlternatif();
        $this->load->view('templates/header', $data);
        $this->load->view('perhitungan/index', $data);
        $this->load->view('templates/footer');
    }
    
}
