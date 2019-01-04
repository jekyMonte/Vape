<?php

class pesan extends CI_Controller {
          
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('model_pesan');
        $this->load->model('model_dashboard');
    }
    
    function index() {
        
        $username   = $this->session->userdata('username');
        $user['user']= $this->model_dashboard->user($username)->row_array();
        $this->template->load('template2','pesan/lihat_data',$user);
    }
    
    function kirim(){
        if(isset($_POST['submit']))
        {   
            $pesan      =   $this->input->post('pesan');
            $username   = $this->session->userdata('username');
            $id_user    =  $this->db->get_where('user',array('username'=>$username))->row_array();
            $data=array('id_user'=>$id_user['id_user'], 'pesan'=>$pesan);
            $this->model_pesan->kirim($data);

            echo "<script>alert('pesan terkirim');
                window.location='".base_url()."pesan'
                </script>";

           // redirect('pesan');
        }else
        {
            echo 'gagal';;
        }
    }

    
    
}






