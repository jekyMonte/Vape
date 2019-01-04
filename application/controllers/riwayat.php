<?php

class riwayat extends CI_Controller {
          
    function __construct() {
        parent::__construct();
      
        
        $this->load->model('model_riwayat');
        $this->load->model('model_dashboard');

    }
    
    function index() {
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->user($username)->row_array();
        
        $data['record']= $this->model_riwayat->lihat_data_user($username);
        $this->template->load('template2','riwayat/user',$data);
    }
    
    function detail(){
        $id = $this->uri->segment(3);
        $data['record']   =  $this->model_riwayat->lihat_detail($id)->row_array();
        //$data['record']     =  $this->model_riwayat->get_one($id)->row_array();
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->user($username)->row_array();
        $this->template->load('template2','riwayat/lihat_detail',$data);
         
    }

    function hapus(){
         $id= $this->uri->segment(3);
        $this->model_riwayat->hapus($id);
        redirect(riwayat);
    }
    
   
    
    
}






