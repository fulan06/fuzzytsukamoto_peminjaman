<?php
class Rules extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rules_model');
        if (! $this->session->userdata('authenticated')) {
            redirect('home');
        }

    }
    public function index()
    {
        $data['menu_home'] = '';
        $data['menu_nasabah'] = '';
		$data['menu_alternatif'] = '';
		$data['menu_rules'] = 'active';
        $data['menu_kriteria'] = '';
        $data['nama'] = $this->session->userdata('nama');
        $data['nama_user'] = $this->session->userdata('nama');
        $data['menu_nama'] = '';
		$data['menu_perhitungan'] = '';
        $data['title'] = 'Rules yang Digunakan';
        $data['rules'] = $this->Rules_model->getAllRules();
        $this->load->view('templates/header', $data);
        $this->load->view('rules/index');
        $this->load->view('templates/footer');
    }
}
