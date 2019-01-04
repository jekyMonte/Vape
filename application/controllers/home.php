<?php

class dashboard_admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_kerusakan');
    }
    
    function index(){
        $data['record']= $this->model_saran->lihat_data();
        $this->template->load('home','panel_home/panel_home_informasi',$data);
    }  
    
    
}