<?php
class auth extends CI_Controller{

    function __cunstruct(){
          parent::__cunstruct();
          $this->load->model('model_login');
    }
    function login(){
        if(isset($_POST['submit'])){
            $username = $this->input->post['username'];
            $password  = $this->input->post['pass'];
            $berhasil = $this->model_login->login($username,$password);
            echo $berhasil;
        }else{
            $this->load->view('main/Login/login');
        }
    }
}