<?php

class C_dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('level') != 'dosen') {
			redirect('auth');
		}
		$this->load->model('m_crud');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('dashboard_dosen', $data);
	}

	public function activity() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('activity_dosen', $data);
	}	

	public function laporan() {
		$data['username'] = $this->session->userdata('username');
		$data['laporan'] = $this->m_crud->tampil_laporan();
		$this->load->view('laporan_dosen', $data);
	}	

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->sess_destroy();
		redirect('auth'); }


}
?>
