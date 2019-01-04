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
      
      //daftar gejala yang dipilih
      echo ' gejala yang dipilih : '.$gejala = implode(",",$this->input->post('gejala'));
      echo "<br><br>";
      $all_diagnosa = $this->model_diagnosa->all_diagnosa_dinamis($gejala);
      
      foreach ($all_diagnosa as $data) {
        $rule = $this->model_diagnosa->rule_dinamis($data['id_kerusakan'],$gejala);
        $jumlah_probabilitas= 1;
        
        foreach ($rule as $data1) {
            $probabilitas = $data1['probabilitas'];
          
            echo $data1['probabilitas'];

            // perkalian prob gejala
            $jumlah_probabilitas = $jumlah_probabilitas*$probabilitas;
            echo ' = '.$jumlah_probabilitas;
            echo "<br>";
          
        }

        $idkerusakan = $this->model_diagnosa->idkerusakan($data['id_kerusakan']);
        
        //perkalian prob gejala dengan dan di setiap kerusakan
        echo $idkerusakan['probabilitas']."x".$jumlah_probabilitas;
        
        // hasil perkalian prob gejala dengan dan di setiap kerusakan
        $jum = $idkerusakan['probabilitas'] * $jumlah_probabilitas;
        echo " = ".$jum;
        echo "<br><br>";
        echo "<hr>";

        $data = array(
            'id_kerusakan' => $data1['id_kerusakan'],
            'jumlah' => $jum,
        );
        $this->m_crud->insert_data('jumlah_prob', $data);

        //penjumlahan prob semua kerusakan
        $jumlah_perkalian_jumlah_probabilitas = $this->model_diagnosa->jum_prob();
        
   
      }
        echo $jumlah_perkalian_jumlah_probabilitas['jumlah'].'<hr>';
        
        $jumlah_prob = $this->model_diagnosa->jumlah_prob();
        
        foreach ($jumlah_prob as $data2) {
          $jumlah = $data2['jumlah'];
          
          //pembagian setiap kerusakan / pencarian hasil akhir di setiap kerusakan
          echo "<br>".$jumlah."/".$jumlah_perkalian_jumlah_probabilitas['jumlah'];
          
          //hasil pembagian setiap kerusakan / pencarian hasil akhir di setiap kerusakan
          $jumlah_final = $jumlah / $jumlah_perkalian_jumlah_probabilitas['jumlah']; 
          echo " = ".$jumlah_final;
          $data = array(
              'id_kerusakan' => $data2['id_kerusakan'],
              'jumlah' => $jumlah_final,
          );
          $this->m_crud->insert_data('jumlah_prob_final', $data);

        }

        $max_prob = $this->model_diagnosa->max_prob();
        echo "<hr>";
        // memilih nilai terbesar dari perhitungan
        echo $max_prob['jumlah'];
        
        // hasil diagnosa kerusakan
        $hasil = $this->model_diagnosa->hasil($max_prob['id_kerusakan']);
        echo "<br>".$hasil['kerusakan'];

    } 
}

