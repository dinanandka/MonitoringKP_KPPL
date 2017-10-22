<?php

class C_user extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('level') != 'user') {
			redirect('auth');
		}
		
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('welcome', $data);
	}

	public function lapor() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('form', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->session->sess_destroy();
		redirect('auth'); }
}
?>
