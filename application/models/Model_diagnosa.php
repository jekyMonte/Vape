<?php

class Model_diagnosa extends CI_Model{
    
    
      
    function all_diagnosa_dinamis($gejala){
        $data=  "SELECT * FROM `rule` where id_gejala in ($gejala) ORDER BY `rule`.`id_kerusakan`  ASC";
        return $this->db->query($data)->result_array();
    }
        
    function rule_dinamis($ids, $gejala){
        $data=  "select *  from rule where id_kerusakan = '$ids'  and id_gejala in ($gejala)";
        return $this->db->query($data)->result_array();
    }
  
    function idkerusakan($id){
        $data=  "select *  from kerusakan where id_kerusakan = '$id'";
        return $this->db->query($data)->row_array();
    }
 
    function jum_prob(){
        $data=  "select sum(distinct(jumlah)) as jumlah  from jumlah_prob";
        return $this->db->query($data)->row_array();
    }
    
    function jumlah_prob(){
        $data=  "select *  from jumlah_prob";
        return $this->db->query($data)->result_array();
    }

    function max_prob(){
        $data=  "SELECT jumlah, id_kerusakan FROM jumlah_prob_final where jumlah in ( select max(jumlah) as jumlah from jumlah_prob_final)";
        return $this->db->query($data)->row_array();
    }
    
    function hasil($id){
        $data=  "select *, p.kerusakan, p.pengertian, s.saran, s.id_saran
                from saran as s join kerusakan as p 
                on s.id_kerusakan=p.id_kerusakan join jumlah_prob_final as jp on jp.id_kerusakan=s.id_kerusakan where p.id_kerusakan = '$id'";
        return $this->db->query($data)->row_array();
    }
    
    function hasil_diagnosa($id){
        $data=  "SELECT * FROM kerusakan where id_kerusakan = '$hasil'";
        return $this->db->query($data);
    }
    
}