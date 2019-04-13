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
}
