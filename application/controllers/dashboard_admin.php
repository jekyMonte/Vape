<?php

class dashboard_admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_dashboard');
        
    }
    
    function index(){
        $data = array(
			'tot_user' => $this->model_dashboard->get_user()->num_rows(),
                        'tot_pesan' => $this->model_dashboard->get_pesan()->num_rows(),
                        'tot_kerusakan' => $this->model_dashboard->get_kerusakan()->num_rows(),
                        'tot_riwayat' => $this->model_dashboard->get_riwayat()->num_rows(),
                        'record'    => $this->model_dashboard->pesan()
			//'tot_penyakit' => $this->model_dashboard->GetProductView()->num_rows(),
			//'nama' => $this->session->userdata('nama'),	
		);
        
        $this->template->load('template1','dashboard/admin',$data);
    }  

}