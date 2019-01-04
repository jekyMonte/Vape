<?php

class auth_admin extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('model_login');
    }
    
    
            
    function login(){
        if(isset($_POST['submit'])){
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil      =   $this->model_login->login_admin($username,$password);
            if($hasil==1){
                $this->db->where('username',$username);
                $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
                redirect('dashboard_admin');
            }
            else {
                redirect('auth_admin/login');
            }
        }
        else{
            chek_session_login();
            $this->load->view('auth/login_admin');
        }
        
    }
    
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
    
    
    
} 

