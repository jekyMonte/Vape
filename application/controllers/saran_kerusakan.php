<?php

class saran_kerusakan extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('model_saran');
        $this->load->model('model_dashboard');
        
        
    }
    
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->user($username)->row_array();

        $data['record']= $this->model_saran->lihat_data();
        $this->template->load('template2','saran_kerusakan/lihat_data',$data);
    }
    
    
    /*function detail(){
        $id = $this->uri->segment(3);
        $data['record'] = $this->db->get_where('saran',array('id_saran'=>$id))->row_array();
        $this->template->load('template','saran_kerusakan/lihat_detail',$data);
         
    }*/
    
    function detail(){
        $id = $this->uri->segment(3);
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->user($username)->row_array();
        $data['kerusakan']   =  $this->model_saran->lihat_detail()->row_array();
        $data['record']     =  $this->model_saran->get_one($id)->row_array();
        $this->template->load('template2','saran_kerusakan/lihat_detail',$data);
         
    }
    
    
}
