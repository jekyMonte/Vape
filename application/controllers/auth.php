<?php

class auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('model_login');
        $this->load->model('model_kerusakan');
    }
            
    function login(){
        if(isset($_POST['submit'])){
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil      =   $this->model_login->login($username,$password);
            if($hasil==1){
                $this->db->where('username',$username);
                $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
                redirect('dashboard_user');
            }
            else {
                echo "<script>alert('username salah / akun belum aktif');
                window.location='".base_url()."/auth/login'
                </script>";
            }
        }
        else{
            chek_session_login();
            $this->load->view('auth/login');
        }
        
    }
    
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
    
    function daftar(){
        if(isset($_POST['submit'])){

            $chek = $this->model_login->cek_username($this->input->post('username'));

            if($chek){
                echo "<script>alert('username sudah ada');
                window.location='".base_url()."/auth/daftar'
                </script>";
            // $this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
            // header('location:'.base_url().'auth/daftar');
           }else{
            $nama   =   $this->input->post('nama');
            $jenis_kelamin   =   $this->input->post('jenis_kelamin');
            $alamat   =   $this->input->post('alamat');
            $no_telp    = $this->input->post('no_telp');
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $data       = array('nama'=>$nama,
                                'jenis_kelamin'=>$jenis_kelamin,
                                'alamat'=>$alamat,
                                'no_telp'=>$no_telp,
                                'username'=>$username,
                                'password'=>  md5($password));
            $this->db->insert('user',$data);
            redirect('auth/login');
            }

        }
        else{
            $data['record']= $this->model_penyakit->lihat_data();
            $this->load->view('panel_home/panel_home_atas');
            $this->load->view('auth/pendaftaran');
            $this->load->view('panel_home/panel_home_informasi',$data);
            $this->load->view('panel_home/panel_home_bawah');
        } 
    }
    
    
} 

