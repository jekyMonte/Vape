<?php

class user extends CI_Controller {
          
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('model_user');
    }
    
    function index() {
        $data['record']= $this->model_user->lihat_data();
        $this->template->load('template1','user/lihat_data',$data);
    }
    
    function konfirmasi(){
        $id= $this->uri->segment(3);
        $this->model_user->konfirmasi($id);
        redirect(user);
    }

    function blokir(){
        $id= $this->uri->segment(3);
        $this->model_user->blokir($id);
        redirect(user);
    }


    function hapus(){
        $id= $this->uri->segment(3);
        $this->model_user->hapus($id);
        redirect(user);
    }
   
    
}  
