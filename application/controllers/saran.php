<?php

class saran extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('model_saran');
        $this->load->model('model_kerusakan');
        
        
    }
    
    function index(){
        $data['kerusakan']= $this->model_kerusakan->lihat_data()->result();
        $data['record']= $this->model_saran->lihat_data();
        $this->template->load('template1','saran/lihat_data',$data);
    }
    
    
    function tambah(){
        if(isset($_POST['submit']))
        {
            $id_kerusakan       =   $this->input->post('id_kerusakan');
            $saran  =   $this->input->post('saran');
            $data       = array('id_kerusakan'=>$id_kerusakan,
                                'saran'=>$saran);
            $this->db->insert('saran',$data);
            redirect('saran');
        }else
        {
            $data['kerusakan']= $this->model_kerusakan->lihat_data()->result();
            $this->template->load('template1','saran/tambah',$data);
        }
    }
    
    function edit(){
        if(isset($_POST['submit']))
        {
            $id         =   $this->input->post('id');
            $kerusakan       =   $this->input->post('kerusakan');
            $saran   =   $this->input->post('saran');
            $data       = array('id_kerusakan'=>$kerusakan,
                                'saran'=>$saran);
            $this->model_saran->edit($data,$id);
            redirect('saran');
        }else
        {
            $id = $this->uri->segment(3);
            $this->load->model('model_kerusakan');
            $data['kerusakan']   =  $this->model_kerusakan->lihat_data()->result();
            $data['saran']   =  $this->model_kerusakan->lihat_data()->result();
            $data['record']     =  $this->model_saran->get_one($id)->row_array();
            $this->template->load('template1','saran/edit',$data);
        }
    }
    
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->model_saran->hapus($id);
        redirect(saran);
    }
}
