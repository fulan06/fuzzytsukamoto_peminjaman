<?php

/**
 * 
 */
class Home extends CI_Controller
{

	public function index()
	{
		if (!$this->session->userdata('authenticated')) {
			$data['menu_home'] = 'active';
			$data['menu_nasabah'] = 'd-none';
			$data['menu_alternatif'] = 'd-none';
			$data['menu_rules'] = 'd-none';
			$data['menu_kriteria'] = 'd-none';
			$data['menu_perhitungan'] = '';
			$data['menu_nama']='d-none';
			$data['nama']='';
			$data['nama_user'] = '';
			$data['button_login'] = '<p>Silahkan Login untuk mengakses aplikasi ini</p>
			<a class="btn btn-primary" href="login">Login</a>';
			$data['title'] = 'Halaman Home';
			$this->load->view('templates/header', $data);
			$this->load->view('home/index',$data);
			$this->load->view('templates/footer');
		}else {
			$data['menu_home'] = 'active';
			$data['menu_nasabah'] = '';
			$data['menu_alternatif'] = '';
			$data['menu_rules'] = '';
			$data['menu_nama']='';
			$data['menu_kriteria'] = '';
			$data['menu_perhitungan'] = '';
			$data['button_login'] = '';
			$data['nama'] = $this->session->userdata('nama');
			$data['nama_user'] = $this->session->userdata('nama');
			$data['title'] = 'Halaman Home';
			$this->load->view('templates/header', $data);
			$this->load->view('home/index',$data);
			$this->load->view('templates/footer');
		}
	}
}
