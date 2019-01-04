<?php

class Model_saran extends CI_Model{
    
    function lihat_data(){
        $query="SELECT *,p.kerusakan as kerusakan 
                from saran s join kerusakan p on s.id_kerusakan=p.id_kerusakan";
        return $this->db->query($query);
        
    }

    function get_one($id){
        $param = array('id_saran'=>$id);
        return $this->db->get_where('saran',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_saran',$id);
        $this->db->update('saran',$data);
    }
    
    function hapus($id){
        $this->db->where('id_saran',$id);
        $this->db->delete('saran');
        
    }
    
    function lihat_detail(){
        $query="select p.kerusakan, p.pengertian, s.saran, s.id_saran
                from saran as s join kerusakan as p 
                on s.id_kerusakan=p.id_kerusakan";
        return $this->db->query($query);
        
    }
    
}