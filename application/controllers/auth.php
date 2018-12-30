<?php
class auth extends CI_Controller{

    function __cunstruct(){
          parent::__cunstruct();
    }
    function index(){
        if ($this->session->userdata('username') != NULL && $this->session->userdata('pass') != NULL) {
			switch ($this->session->userdata('level')) {
				case '1' :
					redirect('halaman_admin');
				break;
				case '2' :
					redirect('halaman_pasien');
				break;
				case '3' :
					redirect('halaman_kasir');
				break;
				case '4' :
					redirect('halaman_perawat');
				break;
			}
		}
		$this->load->view('main/Login/login');
    }

    public function verify() {
		$data = array('username' => $this->input->post('username',TRUE),
						'pass' => $this->input->post('pass',TRUE));
		$this->load->model('UserModel');
		$res = $this->UserModel->getLoginData($data);
		if($res->num_rows() == 1) {
			foreach($res->result() as $sess) {
				$sess_data['logged_in'] = 'Logged';
				$sess_data['id']        = $sess->id_user;
				$sess_data['username']  = $sess->username;
				$sess_data['pass']  = $sess->pass;
				$sess_data['level']     = $sess->id_level;
				
				$this->session->set_userdata($sess_data);

				switch ($this->session->userdata('level')) {
					case '1' :
						redirect('halaman_admin');
					break;
					case '2' :
						redirect('halaman_pasien');
					break;
					case '3' :
						redirect('halaman_kasir');
					break;
					case '4' :
						redirect('halaman_perawat');
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