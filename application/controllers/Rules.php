<?php
class Rules extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rules_model');
        

    }
    public function index()
    {
        $data['title'] = 'Rules yang Digunakan';
        $data['rules'] = $this->Rules_model->getAllRules();
        $this->load->view('templates/header', $data);
        $this->load->view('rules/index');
        $this->load->view('templates/footer');
    }
}
