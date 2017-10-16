<?php 
	class M_Crud extends CI_model{

		function input_data($data,$table){
			$this->db->insert($table,$data);
		}
		function edit_data($where,$table){
			return $this->db->get_where($table,$where);
		}

		function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
		function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
		function tampil_laporan(){
		$query = $this->db->get('laporan');
		return $query->result_array();
	}
	}
 ?>