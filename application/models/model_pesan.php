<?php

class Model_pesan extends CI_Model{
    
    function lihat_data(){
        $query="select u.username, p.pesan, p.tanggal, p.id_pesan
                from pesan p join user u
                on p.id_user=u.id_user
                order by p.tanggal desc";
                
        return $this->db->query($query);
        
    }

    function kirim($data){
        $this->db->insert('pesan',$data);
    }
    
    function hapus($id){
        $this->db->where('id_pesan',$id);
        $this->db->delete('pesan');
    }
    
}