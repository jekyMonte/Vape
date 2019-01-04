<?php //
class Gejala extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_gejala');
        $this->load->library('session');
       
    }
    
    function index(){
        $data['record']= $this->model_gejala->lihat_data();
        $this->template->load('template1','gejala/lihat_data',$data);
    }
    
    
  
    function tambah(){
        if(isset($_POST['submit'])){
            $this->model_gejala->tambah();


            $max_id_gejala = $this->model_gejala->max_id_gejala();
            foreach ($this->m_crud->select_data('kerusakan', 'result_array') as $kerusakan) {
                $id_kerusakan = $kerusakan['id_kerusakan'];
                $probabilitas = 0;

                $data = array(
                    'id_kerusakan' => $id_kerusakan,
                    'id_gejala' => $max_id_gejala['id_gejala'],
                    'probabilitas' => $probabilitas,
                );
                echo "<pre>";
                print_r($data);
                echo "</pre>";
                $this->m_crud->insert_data('rule', $data);
            }
            // die();  
            redirect('gejala');
            
        } else {
            $this->template->load('template1','gejala/tambah');
        }
        
        
    }
    
    function edit(){
        if(isset($_POST['submit'])){
            $this->model_gejala->edit();
            redirect(gejala);     
        }
        else{
            $id= $this->uri->segment(3);
            $data['record']= $this->model_gejala->get_one($id)->row_array();
            $this->template->load('template1','gejala/edit',$data);
        }   
    }
            
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->model_gejala->hapus($id);
        redirect(gejala);
    }
    
    
    
    
    
    
    
}