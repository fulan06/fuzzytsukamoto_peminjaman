<?php
class Alternatif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alternatif_model');
        $this->load->library('form_validation');

    }
    public function index()
    {

      
        $data['title'] = 'Data Alternatif';
        $data['alternatif'] = $this->Alternatif_model->joinAlternatif();
        $this->load->view('templates/header', $data);
        $this->load->view('alternatif/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambahdata()
    {
        $data['title'] = 'Tambah Data Alternatif';
        $data['idnasabah'] = $this->Alternatif_model->getAllNasabah();
        $data['nasabah'] = $this->Alternatif_model->joinAlternatif();
        $this->form_validation->set_rules('id', 'ID', 'required|numeric');
        $this->form_validation->set_rules('c1', 'C1', 'required|numeric');
        $this->form_validation->set_rules('c2', 'C2', 'required|numeric');
        $this->form_validation->set_rules('c3', 'C3', 'required|numeric');
        $this->form_validation->set_rules('c4', 'C4', 'required|numeric');
        $this->form_validation->set_rules('c5', 'C5', 'required|numeric');
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
        $data['title'] = 'Update Data Alternatif';
        $data['alternatif'] = $this->Alternatif_model->getAlternatifById($id);
        $this->form_validation->set_rules('c1', 'C1', 'required|numeric');
        $this->form_validation->set_rules('c2', 'C2', 'required|numeric');
        $this->form_validation->set_rules('c3', 'C3', 'required|numeric');
        $this->form_validation->set_rules('c4', 'C4', 'required|numeric');
        $this->form_validation->set_rules('c5', 'C5', 'required|numeric');
        
        if (
            $this->form_validation->run() == FALSE
        ) {
            $this->load->view('templates/header', $data);
            $this->load->view('alternatif/updatedata', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Nasabah_model->updateDataNasabah();
            $this->session->set_flashdata('flash', 'Diupdate');
            redirect('alternatif');
        }
    }

}
