<?php

class model_login extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    
    
    function login($username,$password){
        $periksa = $this->db->get_where('user',array('username'=>$username,'pass'=>$password));
    
    
        if($periksa->num_rows()>0){
            return 1;
        }else{
            return 0;
        }    
    }
}