<?php

	class Crud extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('m_crud');
			$this->load->helper('url');
			$this->load->library('email');
		}
		function tambah_aksi(){
			$tanggal = $this->input->post('tanggal');
			$topik = $this->input->post('topik');
			$isi = $this->input->post('isi');
			$nama = $this->input->post('nama');

			$data = array(
				'tanggal' => $tanggal,
				'topik' => $topik,
				'isi' => $isi,
				'nama' => $nama
				);

				$this->m_crud->input_data($data, 'laporan');
				redirect('crud/sukses');


		}
		
		function hapus($tanggal){
		$where = array('tanggal' => $tanggal);
		$this->m_crud->hapus_data($where,'laporan');
		redirect('c_dosen/laporan');
		}
  
		
		function sukses(){
			$this->load->view('sukses_submit');
		}
		function gagal(){
			$this->load->view('gagal_submit');
		}
	} 
 ?>