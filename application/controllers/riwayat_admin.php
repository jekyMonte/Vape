<?php

class riwayat_admin extends CI_Controller {
          
    function __construct() {
        parent::__construct();
       
        $this->load->model('model_riwayat');
    }
    
    function index() {
        $data['record']= $this->model_riwayat->lihat_data();
        $this->template->load('template1','riwayat/admin',$data);
    }

    function detail(){
        $id = $this->uri->segment(3);
        $data['record']   =  $this->model_riwayat->lihat_detail($id)->row_array();
        //$data['record']     =  $this->model_riwayat->get_one($id)->row_array();
        $this->template->load('template2','riwayat/lihat_detail',$data);
         
    }

    function hapus(){
         $id= $this->uri->segment(3);
        $this->model_riwayat->hapus($id);
        redirect(riwayat_admin);
    }

    
    
   
    
    
}






