<?php
class Nasabah extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('Nasabah_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata('authenticated')) {
            redirect('home');
        }
    }
    public function hapus($id)
    {
        $this->Nasabah_model->hapusDataNasabah($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('nasabah');
    }
    public function index()
    {
        $data['menu_home'] = '';
        $data['menu_nasabah'] = 'active';
        $data['menu_alternatif'] = '';
        $data['menu_rules'] = '';
        $data['menu_kriteria'] = '';
        $data['menu_nama'] = '';
        $data['menu_perhitungan'] = '';
        $data['nama'] = $this->session->userdata('nama');
        $data['nama_user'] = $this->session->userdata('nama');
        $data['title'] = 'Daftar nasabah';
        $data['nasabah'] = $this->Nasabah_model->getAllNasabah();
        if ($this->input->post('keyword')) {
            $data['nasabah'] = $this->Nasabah_model->cariDataNasabah();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('nasabah/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambahdata()
    {
        $data['menu_home'] = '';
        $data['menu_nasabah'] = 'active';
        $data['menu_alternatif'] = '';
        $data['menu_rules'] = '';
        $data['menu_kriteria'] = '';
        $data['menu_nama'] = '';
        $data['menu_perhitungan'] = '';
        $data['nama'] = $this->session->userdata('nama');
        $data['nama_user'] = $this->session->userdata('nama');
        $data['title'] = 'Tambah Data Nasabah';
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'No. HP', 'required|numeric');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        if (
            $this->form_validation->run() == FALSE
        ) {
            $this->load->view('templates/header', $data);
            $this->load->view('nasabah/tambahdata');
            $this->load->view('templates/footer');
        } else {
            $this->Nasabah_model->tambahDataNasabah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('nasabah');
        }
    }
    public function updatedata($id)
    {
        $data['menu_home'] = '';
        $data['menu_nasabah'] = 'active';
        $data['menu_alternatif'] = '';
        $data['menu_rules'] = '';
        $data['menu_kriteria'] = '';
        $data['menu_nama'] = '';
        $data['menu_perhitungan'] = '';
        $data['nama'] = $this->session->userdata('nama');
        $data['nama_user'] = $this->session->userdata('nama');
        $data['title'] = 'Update Data Nasabah';
        $data['nasabah'] = $this->Nasabah_model->getNasabahById($id);
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required|alpha');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'No. HP', 'required|numeric');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        if (
            $this->form_validation->run() == FALSE
        ) {
            $this->load->view('templates/header', $data);
            $this->load->view('nasabah/updatedata', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Nasabah_model->updateDataNasabah();
            $this->session->set_flashdata('flash', 'Diupdate');
            redirect('nasabah');
        }
    }
}
