<?php

class Model_kerusakan extends CI_Model{
    
    function lihat_data(){
        return $this->db->get('kerusakan'); 
        
    }
    
    function get_one($id){
        $param = array('id_kerusakan'=>$id);
        return $this->db->get_where('kerusakan',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_kerusakan',$id);
        $this->db->update('kerusakan',$data);
    }
    
    function hapus($id){
        $this->db->where('id_kerusakan',$id);
        $this->db->delete('rule');
        
        $this->db->where('id_kerusakan',$id);
        $this->db->delete('saran');

        $this->db->where('id_kerusakan',$id);
        $this->db->delete('kerusakan');
        
    }

    public function max_id_kerusakan() {
        $query = $this->db->query("SELECT max(id_kerusakan) as id_kerusakan FROM kerusakan");
        return $query->row_array();
    }
    
    
    
}