<?php

	class Crud extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('m_crud');
			$this->load->helper('url');
			$this->load->library('email');
		}
	
	function tambah_aksi(){
        $config['upload_path']          = './assets/file/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 1000000;
        $config['max_width']            = 1000000;
        $config['max_height']           = 1000000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('file_up')) {
            $this->session->has_userdata('username');
            echo print_r(array('error' => $this->upload->display_errors()));
        }
        else{
            $url = base_url().$config['upload_path'].$this->upload->data('file_name');
            $tanggal = $this->input->post('tanggal');
            $nama = $this->input->post('nama');
            $topik = $this->input->post('topik');
            $isi = $this->input->post('isi');
            
            $data = array(
                'tanggal' => $tanggal,
                'nama' => $nama,
                'topik' => $topik,
                'isi' => $isi,
                'file_upload' => $url, 
                );
            $this->m_crud->input_data($data, 'laporan');
            redirect($uri = base_url('index.php/c_user/lapor'), $method = 'auto', $code = NULL);}}
                     
		function hapus($tanggal){
		$where = array('tanggal' => $tanggal);
		$this->m_crud->hapus_data($where,'laporan');
		redirect('c_dosen/laporan');}
		
		function sukses(){
			$this->load->view('sukses_submit');
		}
		function gagal(){
			$this->load->view('gagal_submit'); }
	} 
 ?>
