<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function login(){
        if(isset($_POST['submit'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $berhasil = $this->Auth_model->login($username,$password);
            echo $berhasil;
        }else{
            $this->load->view('form_login');
        }
    }
}
