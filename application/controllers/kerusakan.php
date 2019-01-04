<?php
class kerusakan extends CI_Controller{
    
    
    function __construct() {
        parent::__construct();
        $this->load->model('Model_kerusakan');
        
        
    }
    
    
    function index(){
        $data['record']= $this->db->get('kerusakan');
        $this->template->load('template1','kerusakan/lihat_data',$data);
    }
    
    function tambah(){
        if(isset($_POST['submit']))
        {

            $kerusakan       =   $this->input->post('kerusakan');
            $pengertian   =   $this->input->post('pengertian');
            $probabilitas      = $this->input->post('probabilitas');
            $data       = array('kerusakan'=>$kerusakan,
                                'pengertian'=>$pengertian,
                                'probabilitas'=>$probabilitas);
            
            $this->db->insert('kerusakan', $data);

            $max_id_kerusakan = $this->Model_kerusakan->max_id_kerusakan();

            foreach ($this->m_crud->select_data('gejala', 'result_array') as $gejala) {
                $id_gejala = $gejala['id_gejala'];
                $probabilitas = 0;

                $data = array(
                    'id_kerusakan' => $max_id_kerusakan['id_kerusakan'],
                    'id_gejala' => $id_gejala,
                    'probabilitas' => $probabilitas,
                );
                echo "<pre>";
                print_r($data);
                echo "</pre>";
                $this->m_crud->insert_data('rule', $data);
            }
            redirect('kerusakan');
        }else
        {
            $this->template->load('template1','kerusakan/tambah');
        }
    }
    
    function edit(){
        if(isset($_POST['submit']))
        {
            $id             =   $this->input->post('id');
             $kerusakan       =   $this->input->post('kerusakan');
            $pengertian   =   $this->input->post('pengertian');
    
            $probabilitas      =   $this->input->post('probabilitas');
            $data       = array('kerusakan'=>$kerusakan,
                                'pengertian'=>$pengertian,
                                
                                'probabilitas'=>$probabilitas);
            $this->Model_kerusakan->edit($data,$id);
            redirect('kerusakan');
        }else
        {
            $id = $this->uri->segment(3);
            $data['record']     =  $this->Model_kerusakan->get_one($id)->row_array();
            $this->template->load('template1','kerusakan/edit',$data);
        }
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->Model_kerusakan->hapus($id);
        redirect(kerusakan);
    }
    
    
    
    
    
    
    
}
