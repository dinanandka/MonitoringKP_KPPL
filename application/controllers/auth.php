<?php 

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');

    }
	
	public function index() {
		$this->load->view('login');
	}

	function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' =>$password
			);
		$cek = $this->model_user->cek_user($where);
		if($cek->num_rows() == 1){
 
			foreach($cek->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['level'] = $data->level;
				$this->session->set_userdata($sess_data);
			}
 
			if($this->session->userdata('level') == 'admin')
			{
				redirect('c_admin');
			}
			elseif($this->session->userdata('level') == 'user')
			{
				redirect('c_user');
			} 
			elseif($this->session->userdata('level') == 'dosen')
			{
				redirect('c_dosen');
			}
		}
			else{
			$this->load->view('bukan_user');
		}
	}

}

?>