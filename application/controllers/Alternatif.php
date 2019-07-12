<?php
class Alternatif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alternatif_model');
        $this->load->library('form_validation');
        if (! $this->session->userdata('authenticated')) {
            redirect('home');
        }
    }
    public function index()
    {
        $data['menu_home'] = '';
        $data['menu_nasabah'] = '';
        $data['menu_alternatif'] = 'active';
        $data['menu_rules'] = '';
        $data['menu_nama'] = '';
        $data['nama'] = $this->session->userdata('nama');
        $data['nama_user'] = $this->session->userdata('nama');
        $data['menu_kriteria'] = '';
        $data['menu_perhitungan'] = '';
        $data['title'] = 'Data Alternatif';
        $data['alternatif'] = $this->Alternatif_model->joinAlternatif();
        if ($this->input->post('keyword')) {
            $data['alternatif'] = $this->Alternatif_model->cariDataAlternatif();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('alternatif/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambahdata()
    {   
        $data['menu_home'] = '';
        $data['menu_nasabah'] = '';
        $data['menu_alternatif'] = 'active';
        $data['menu_rules'] = '';
        $data['menu_nama'] = '';
        $data['nama'] = $this->session->userdata('nama');
        $data['nama_user'] = $this->session->userdata('nama');
        $data['menu_kriteria'] = '';
        $data['menu_perhitungan'] = '';
        $data['title'] = 'Tambah Data Alternatif';
        $data['idnasabah'] = $this->Alternatif_model->getAllNasabah();
        $data['nasabah'] = $this->Alternatif_model->joinAlternatif();
        $this->form_validation->set_rules('id', 'ID', 'required|numeric');
        $this->form_validation->set_rules('c1', 'Penghasilan', 'required|numeric');
        $this->form_validation->set_rules('c2', 'Lama Menjadi Anggota', 'required|numeric');
        $this->form_validation->set_rules('c3', 'Sisa Pinjaman', 'required|numeric');
        $this->form_validation->set_rules('c4', 'Jumlah Pinjaman', 'required|numeric');
        $this->form_validation->set_rules('c5', 'Angsuran', 'required|numeric');
        if (
            $this->form_validation->run() == FALSE
        ) {
            $this->load->view('templates/header', $data);
            $this->load->view('alternatif/tambahdata', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Alternatif_model->tambahDataAlternatif();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('alternatif');
        }
    }
    public function hapus($id)
    {
        $this->Alternatif_model->hapusDataAlternatif($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('alternatif');
    }
    public function updatedata($id)
    {   
        $data['menu_home'] = '';
        $data['menu_nasabah'] = '';
        $data['menu_alternatif'] = 'active';
        $data['menu_rules'] = '';
        $data['menu_nama'] = '';
        $data['nama'] = $this->session->userdata('nama');
        $data['nama_user'] = $this->session->userdata('nama');
        $data['menu_kriteria'] = '';
        $data['menu_perhitungan'] = '';
        $data['title'] = 'Update Data Alternatif';
        $data['idnasabah'] = $this->Alternatif_model->getAllNasabah();
        $data['alternatif'] = $this->Alternatif_model->getAlternatifById($id);
        $data['nama_nasabah'] = $this->Alternatif_model->getNamaNasabah($id);
        $this->form_validation->set_rules('c1', 'Penghasilan', 'required|numeric');
        $this->form_validation->set_rules('c2', 'Lama Menjadi Anggota', 'required|numeric');
        $this->form_validation->set_rules('c3', 'Sisa Pinjaman', 'required|numeric');
        $this->form_validation->set_rules('c4', 'Jumlah Pinjaman', 'required|numeric');
        $this->form_validation->set_rules('c5', 'Angsuran', 'required|numeric');

        if (
            $this->form_validation->run() == FALSE
        ) {
            $this->load->view('templates/header', $data);
            $this->load->view('alternatif/updatedata', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Alternatif_model->updateDataAlternatif();
            $this->session->set_flashdata('flash', 'Diupdate');
            redirect('alternatif');
        }
    }
}
