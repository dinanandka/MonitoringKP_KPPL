<?php  

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
		}

	}

?>