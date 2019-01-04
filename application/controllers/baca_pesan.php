<?php

class baca_pesan extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        chek_session();
        $this->load->model('model_pesan');
        //$this->load->model('model_user');
        
    }
    
    function index(){
        $data['record']= $this->model_pesan->lihat_data();
        $this->template->load('template1','pesan_admin/lihat_data',$data);
    }  
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->model_pesan->hapus($id);
        redirect(baca_pesan);
    }
}
