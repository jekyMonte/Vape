<?php

class dashboard_user extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('model_dashboard');
        
    }
    
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->user($username)->row_array();
        $this->template->load('template2','dashboard/user',$data);
    }  
    
    function edit(){
        if(isset($_POST['submit'])){

            $this->load->view('dashboard/upload');
            $config['upload_path'] = './assets/images/user/';
            $config['allowed_types'] = 'gif|jpg|png|JPG';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $hasil=$this->upload->data();

            $id             =   $this->input->post('id');
            $nama       =   $this->input->post('nama');
            $alamat     =   $this->input->post('alamat');
            $jenis_kelamin   =   $this->input->post('jenis_kelamin');
            $no_telp   =   $this->input->post('no_telp');
            $username   =   $this->input->post('username');
            $data       = array('nama'=>$nama,
                                'alamat'=>$alamat,
                                'jenis_kelamin'=>$jenis_kelamin,
                                'no_telp'=>$no_telp,
                                'username'=>$username,
                                'foto'=>$hasil['file_name']);
            $this->model_dashboard->edit($data,$id);
            redirect(dashboard_user);     
        }
        else{
            $id= $this->uri->segment(3);
            
            $username   = $this->session->userdata('username');
            $data['user']= $this->model_dashboard->user($username)->row_array();
       
            $data['record']= $this->model_dashboard->get_one($id)->row_array();
            $this->template->load('template2','dashboard/edit',$data);
        }     
    }
  
  
  function do_upload()
    {
        if(isset($_POST['submit'])){
        
        $config['upload_path'] = './assets/images/user/';
        $config['allowed_types'] = 'gif|jpg|png';
    //$config['max_size'] = '200'; // kb
    //$config['max_width']  = '1024';
    //$config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $hasil=$this->upload->data();
        print_r($hasil);}
       // $data=array('nama_file'=>$hasil['file_name'],'ukuran'=>$hasil['file_size']);
        //$this->db->insert('download',$data);
        else{$this->load->view('dashboard/upload');

}
                
    }
  
  
}