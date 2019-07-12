<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        if ($this->session->userdata('authenticated')) 
            redirect('home');
        $data['menu_home'] = 'active';
        $data['menu_nasabah'] = 'd-none';
        $data['menu_alternatif'] = 'd-none';
        $data['menu_rules'] = 'd-none';
        $data['menu_nama'] = 'd-none';
        $data['menu_kriteria'] = 'd-none';
        $data['menu_perhitungan'] = '';
        $data['nama'] = '';
        $data['title'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('login/index', $data);
        $this->load->view('templates/footer');
    }
    public function login_ego()
    {
        $username = $this->input->post('username');
        $password = ($this->input->post('password'));
        $data_user = $this->Login_model->getAllUser();
        $berhasil = $this->Login_model->login($username, $password);
        $user = $this->Login_model->get($username);

        if (empty($data_user)) {
            $this->session->set_flashdata('flash', 'Data User Kosong!');
            redirect('login');
        } else {
            if ($berhasil == 1) {
                $this->session->set_userdata(array(
                    'authenticated' => true,
                    'nama' => $user->nama
                ));
                redirect('home');
                exit;
            } else {
                $this->session->set_flashdata('flash', 'username / password salah!');
                redirect('login');
            }
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
