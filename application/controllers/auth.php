<?php
class auth extends CI_Controller{

    function __cunstruct(){
          parent::__cunstruct();
    }
    function index(){
        if ($this->session->userdata('username') != NULL && $this->session->userdata('pass') != NULL) {
			switch ($this->session->userdata('level')) {
				case '0' :
					redirect('Admin');
				break;
				case '1' :
					redirect('direktur_controller');
				break;
				case '2' :
					redirect('pelayanan_controller');
				break;
				case '3' :
					redirect('pemeriksaan_controller');
				break;
				case '4' :
					redirect('kasir_controller');
				break;
			}
		}
		$this->load->view('main/Login/login');
    }

    public function verify() {
		$data = array('username' => $this->input->post('username'),
						'password' => $this->input->post('pass'));
		$this->load->model('userModel');
		$res = $this->userModel->getUserById($data);
		if($res->num_rows() == 1) {
			foreach($res->result() as $sess) {
				$sess_data['id']        = $sess->id_user;
				$sess_data['username']  = $sess->username;
				$sess_data['pass']  = $sess->password;
				$sess_data['level']     = $sess->level;
				
				$this->session->set_userdata($sess_data);

				switch ($this->session->userdata('level')) {
					case '0' :
						redirect('Admin');
					break;
					case '1' :
						redirect('direktur_controller');
					break;
					case '2' :
						redirect('pelayanan_controller');
					break;
					case '3' :
						redirect('pemeriksaan_controller');
					break;
					case '4' :
						redirect('kasir_controller');
					break;
				}

			}
		} else {
			echo "
				<script>
					alert('Login Failed, Username or Password Wrong!');
					history.go(-1);
				</script>
			";
		}
	}

	/**
	 * Function For Destroy Session
	 */
	public function destroy() {
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}


}