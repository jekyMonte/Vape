<?php

class Model_gejala extends CI_Model{
    
    
    function lihat_data(){
        return $this->db->get('gejala');
    }
    
    function tambah(){
        $data = array(
                        'gejala'=> $this->input->post('gejala')
                      );
            
        $this->db->insert('gejala',$data);
    }


    public function max_id_gejala() {
        $query = $this->db->query("SELECT max(id_gejala) as id_gejala FROM gejala");
        return $query->row_array();
    }

    
    function get_one($id){
        $param = array('id_gejala'=>$id);
        return $this->db->get_where('gejala',$param);
    }
    
    function edit(){
        $data = array(
                        'gejala'=> $this->input->post('gejala')
                      );
        $this->db->where('id_gejala', $this->input->post('id'));
        $this->db->update('gejala',$data);
    }
    


    function hapus($id){
        $this->db->where('id_gejala',$id);
        $this->db->delete('rule');

        $this->db->where('id_gejala',$id);
        $this->db->delete('gejala');
        
    }


    
    
}