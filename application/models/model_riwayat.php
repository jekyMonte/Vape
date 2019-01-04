<?php

class Model_riwayat extends CI_Model{
    
    function lihat_data(){
        $query="SELECT *
                from riwayat r 
                join user u on r.id_user=u.id_user 
                join kerusakan P on r.id_kerusakan=p.id_kerusakan
                order by r.tanggal desc";
        return $this->db->query($query);
        
    }
    
    function lihat_data_user($username){
        $query="SELECT *, u.username
                from riwayat r 
                join user u on r.id_user=u.id_user 
                join kerusakan P on r.id_kerusakan=p.id_kerusakan
                where u.username='$username'
                order by r.tanggal desc";
        return $this->db->query($query);
    
    }

    /*function get_one($id){
        $query="select *
                from riwayat r 
                join user u on r.id_user=u.id_user 
                join kerusakan p on r.id_kerusakan=p.id_kerusakan
                join saran s on p.id_kerusakan=s.id_kerusakan where id_riwayat='$id'";
        return $this->db->query($query);
    }*/

    function lihat_detail($id){
        $query="select *
                from riwayat r 
                join user u on r.id_user=u.id_user 
                join kerusakan p on r.id_kerusakan=p.id_kerusakan
                join saran s on p.id_kerusakan=s.id_kerusakan where id_riwayat='$id'";
        return $this->db->query($query);
        
    }


    function hapus($id){
        $this->db->where('id_riwayat',$id);
        $this->db->delete('riwayat');
        
    }


}