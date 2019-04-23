<?php
class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kriteria_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Daftar Kriteria';
        $data['krt'] = $this->Kriteria_model->getAllKriteria();
        $this->load->view('templates/header', $data);
        $this->load->view('kriteria/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambahDataKriteria()
    { }
}
