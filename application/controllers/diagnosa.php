<?php
class Diagnosa extends CI_Controller{
    
    
    function __construct() {
        parent::__construct();
       $this->load->model('model_rule');
       $this->load->model('model_kerusakan');
       $this->load->model('model_gejala');
       $this->load->model('model_diagnosa');
       $this->load->model('model_dashboard');
       $this->load->library('session');
      
    }
      
    function index(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->user($username)->row_array();
        
        $data['gejala']= $this->model_gejala->lihat_data();
        $this->template->load('template2','mulai_diagnosa',$data);
    }
    
    

      

    function hitung_dinamis_1(){
      $this->m_crud->truncate_data('jumlah_prob_final');
      $this->m_crud->truncate_data('jumlah_prob');
      
       $gejala = implode(",",$this->input->post('gejala'));
      $all_diagnosa = $this->model_diagnosa->all_diagnosa_dinamis($gejala);
      
      foreach ($all_diagnosa as $data) {
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // $jum = null;
        $rule = $this->model_diagnosa->rule_dinamis($data['id_kerusakan'],$gejala);
        $jumlah_probabilitas= 1;
        foreach ($rule as $data1) {
          // echo "<pre>";
          // print_r($data1);
          // echo "</pre>";
          $probabilitas = $data1['probabilitas'];
          // echo $jum = $jum*$c;
          $jumlah_probabilitas = $jumlah_probabilitas*$probabilitas;
        //echo $jumlah_probabilitas;
          
        }

        $idkerusakan = $this->model_diagnosa->idkerusakan($data['id_kerusakan']);

        //echo $idkerusakan['probabilitas']."x".$jumlah_probabilitas;
        $jum = $idkerusakan['probabilitas'] * $jumlah_probabilitas;
        //echo " = ".$jum;
        //echo " | ";
        //echo "<hr>";

        $data = array(
            'id_kerusakan' => $data1['id_kerusakan'],
            'jumlah' => $jum,
        );
        $this->m_crud->insert_data('jumlah_prob', $data);
        // die();
        // echo $jum;
        // echo $data['probabilitas']." x ". $data1['probabilitas']. " = ".$data['probabilitas']*$data1['probabilitas'];

        $jumlah_perkalian_jumlah_probabilitas = $this->model_diagnosa->jum_prob();
        //echo $jumlah_perkalian_jumlah_probabilitas['jumlah'];
      }

        $jumlah_prob = $this->model_diagnosa->jumlah_prob();
        foreach ($jumlah_prob as $data2) {
        //  echo "<br>";
          $jumlah = $data2['jumlah'];
         // echo $jumlah."/".$jumlah_perkalian_jumlah_probabilitas['jumlah'];
          $jumlah_final = $jumlah / $jumlah_perkalian_jumlah_probabilitas['jumlah']; 
         // echo " = ".$jumlah_final;
          $data = array(
              'id_kerusakan' => $data2['id_kerusakan'],
              'jumlah' => $jumlah_final,
          );
          $this->m_crud->insert_data('jumlah_prob_final', $data);

        }

        $max_prob = $this->model_diagnosa->max_prob();
       // echo "<hr>";
         //echo $max_prob['jumlah'];
        
        $hasil = $this->model_diagnosa->hasil($max_prob['id_kerusakan']);
        //echo $hasil['kerusakan'];


              $username   = $this->session->userdata('username');
              $id_user    =  $this->db->get_where('user',array('username'=>$username))->row_array();
              $hasil_kerusakan = $hasil['id_kerusakan'];
        
           $ip = $this->input->ip_address();
          $data = array(
              'id_user'=>$id_user['id_user'], 
              'id_kerusakan' => $hasil_kerusakan,
              'ip_addr' => $ip
          );
          $this->m_crud->insert_data('riwayat', $data);
          
          $hasil2['record']=$hasil;
          $username   = $this->session->userdata('username');
          $hasil2['user']= $this->model_dashboard->user($username)->row_array();
        
          $this->template->load('template2','diagnosa/hasil_diagnosa',$hasil2);

    }
    

    function hitung_dinamis(){
      $this->m_crud->truncate_data('jumlah_prob_final');
      $this->m_crud->truncate_data('jumlah_prob');
      
      echo $gejala = implode(",",$this->input->post('gejala'));
      
      $all_diagnosa = $this->model_diagnosa->all_diagnosa_dinamis($gejala);
      
      foreach ($all_diagnosa as $data) {
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // $jum = null;
        $rule = $this->model_diagnosa->rule_dinamis($data['id_kerusakan'], $gejala);
        $jumlah_probabilitas= 1;
        foreach ($rule as $data1) {
          // echo "<pre>";
          // print_r($data1);
          // echo "</pre>";
          $probabilitas = $data1['probabilitas'];
          // echo $jum = $jum*$c;
          echo "<br>".$jumlah_probabilitas = $jumlah_probabilitas*$probabilitas;
          echo "<br>";
          
        }


        $idkerusakan = $this->model_diagnosa->idkerusakan($data['id_kerusakan']);

        echo $idkerusakan['probabilitas']."x".$jumlah_probabilitas;
        $jum = $idkerusakan['probabilitas'] * $jumlah_probabilitas;
        //echo " = ".$jum;
        //echo " | ";
        //echo "<hr>";

        $data = array(
            'id_kerusakan' => $data1['id_kerusakan'],
            'jumlah' => $jum,
        );
        $this->m_crud->insert_data('jumlah_prob', $data);
        // die();
        // echo $jum;
        // echo $data['probabilitas']." x ". $data1['probabilitas']. " = ".$data['probabilitas']*$data1['probabilitas'];

        $jumlah_perkalian_jumlah_probabilitas = $this->model_diagnosa->jum_prob();
        //echo $jumlah_perkalian_jumlah_probabilitas['jumlah'];
      }

        $jumlah_prob = $this->model_diagnosa->jumlah_prob();
        foreach ($jumlah_prob as $data2) {
        //  echo "<br>";
          $jumlah = $data2['jumlah'];
         // echo $jumlah."/".$jumlah_perkalian_jumlah_probabilitas['jumlah'];
          $jumlah_final = $jumlah / $jumlah_perkalian_jumlah_probabilitas['jumlah']; 
         // echo " = ".$jumlah_final;
          $data = array(
              'id_kerusakan' => $data2['id_kerusakan'],
              'jumlah' => $jumlah_final,
          );
          $this->m_crud->insert_data('jumlah_prob_final', $data);

        }

        $max_prob = $this->model_diagnosa->max_prob();
        echo "<hr>";
         //echo $max_prob['jumlah'];
        
        $hasil = $this->model_diagnosa->hasil($max_prob['id_kerusakan']);
        echo $hasil['kerusakan'];

    }

    function hitung(){
      $this->m_crud->truncate_data('jumlah_prob_final');
      $this->m_crud->truncate_data('jumlah_prob');
      
      
      $all_diagnosa = $this->model_diagnosa->all_diagnosa();
      
      foreach ($all_diagnosa as $data) {
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // $jum = null;
        $rule = $this->model_diagnosa->rule($data['id_kerusakan']);
        $jumlah_probabilitas= 1;
        foreach ($rule as $data1) {
          // echo "<pre>";
          // print_r($data1);
          // echo "</pre>";
          $probabilitas = $data1['probabilitas'];
          // echo $jum = $jum*$c;
          echo "<br>".$jumlah_probabilitas = $jumlah_probabilitas*$probabilitas;
          echo "<br>";
          
        }


        $idkerusakan = $this->model_diagnosa->idkerusakan($data['id_kerusakan']);

        echo $idkerusakan['probabilitas']."x".$jumlah_probabilitas;
        $jum = $idkerusakan['probabilitas'] * $jumlah_probabilitas;
        //echo " = ".$jum;
        //echo " | ";
        //echo "<hr>";

        $data = array(
            'id_kerusakan' => $data1['id_kerusakan'],
            'jumlah' => $jum,
        );
        $this->m_crud->insert_data('jumlah_prob', $data);
        // die();
        // echo $jum;
        // echo $data['probabilitas']." x ". $data1['probabilitas']. " = ".$data['probabilitas']*$data1['probabilitas'];

        $jumlah_perkalian_jumlah_probabilitas = $this->model_diagnosa->jum_prob();
        //echo $jumlah_perkalian_jumlah_probabilitas['jumlah'];
      }

        $jumlah_prob = $this->model_diagnosa->jumlah_prob();
        foreach ($jumlah_prob as $data2) {
        //  echo "<br>";
          $jumlah = $data2['jumlah'];
         // echo $jumlah."/".$jumlah_perkalian_jumlah_probabilitas['jumlah'];
          $jumlah_final = $jumlah / $jumlah_perkalian_jumlah_probabilitas['jumlah']; 
         // echo " = ".$jumlah_final;
          $data = array(
              'id_kerusakan' => $data2['id_kerusakan'],
              'jumlah' => $jumlah_final,
          );
          $this->m_crud->insert_data('jumlah_prob_final', $data);

        }

        $max_prob = $this->model_diagnosa->max_prob();
        echo "<hr>";
         //echo $max_prob['jumlah'];
        
        $hasil = $this->model_diagnosa->hasil($max_prob['id_kerusakan']);
        echo $hasil['kerusakan'];

    }
    
    
    
}

