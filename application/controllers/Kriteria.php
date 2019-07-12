<?php
class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kriteria_model');
        $this->load->library('form_validation');
        if (! $this->session->userdata('authenticated')) {
            redirect('home');
        }
    }
    public function index()
    {
        $data['menu_home'] = '';
        $data['menu_nasabah'] = '';
		$data['menu_alternatif'] = '';
        $data['menu_rules'] = '';
        $data['menu_nama'] = '';
        $data['nama'] = $this->session->userdata('nama');
        $data['nama_user'] = $this->session->userdata('nama');
		$data['menu_kriteria'] = 'active';
		$data['menu_perhitungan'] = '';
        $data['title'] = 'Daftar Kriteria';
        $data['kriteria'] = $this->Kriteria_model->getAllKriteria();
        $this->load->view('templates/header', $data);
        $this->load->view('kriteria/index', $data);
        $this->load->view('templates/footer');
    }
    public function updatedata($id)
    {   
        $data['menu_home'] = '';
        $data['menu_nasabah'] = '';
		$data['menu_alternatif'] = '';
        $data['menu_rules'] = '';
        $data['menu_nama'] = '';
        $data['nama'] = $this->session->userdata('nama');
        $data['nama_user'] = $this->session->userdata('nama');
		$data['menu_kriteria'] = 'active';
		$data['menu_perhitungan'] = '';
        $data['title'] = 'Update Data Kriteria';
        $data['kriteria'] = $this->Kriteria_model->getKriteriaById($id);
        $this->form_validation->set_rules('batasb', 'Batas Bawah', 'required|numeric');
        $this->form_validation->set_rules('batast', 'Batas Tengah', 'required|numeric');
        $this->form_validation->set_rules('batasa', 'Batas Atas', 'required|numeric');
        if (
            $this->form_validation->run() == FALSE
        ) {
            $this->load->view('templates/header', $data);
            $this->load->view('kriteria/updatedata', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kriteria_model->updateKriteria();
            $this->session->set_flashdata('flash', 'Diupdate');
            redirect('kriteria');
        }
    }
}
