<?php
class Rule extends CI_Controller{
    
    
    function __construct() {
        parent::__construct();
       $this->load->model('model_rule');
       $this->load->model('model_kerusakan');
       $this->load->model('model_gejala');
       $this->load->library('session');
       
    }
      
    function index(){
        $data['record']= $this->model_rule->lihat_data();
        $data['rule']= $this->model_rule->lihat_rule();
        $this->template->load('template1','rule/lihat_data',$data);
    }
    


    function edit($id){
        if(isset($_POST['submit'])){
           // echo "<pre>";
            //print_r($this->input->post('luas_gejala'));
            //echo "</pre>";
            foreach ($this->input->post('luas_gejala') as $rule => $luas_gejala) {
                 foreach ($this->input->post('luas_kerusakan') as $rules => $luas_kerusakan) {
                    if ($luas_gejala==0) {
                        $probabilitas = 0.000001;    
                    } else {
                        $probabilitas = $luas_gejala/$luas_kerusakan;
                    }
                    $data = array(
                                'id_rule'=> $rule,
                                'luas_gejala'=> $luas_gejala,
                                'probabilitas'=> $probabilitas
                              );
                       
                    //echo "<pre>";
                    //print_r($data);
                    // print_r($probabilitas);
                    //echo "</pre>";
                    // die();
                    // $this->model_rule->post($data);
                    $this->m_crud->update_data('rule', $data, 'id_rule');
                }

            }
            //die();
         redirect('rule');  
        
        } else {
            $data['gejala']= $this->model_rule->getprob($id);
            $this->template->load('template1','rule/edit',$data);
        }        
    }
    
    
    
    
}
