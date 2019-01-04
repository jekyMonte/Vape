<?php

class Model_user extends CI_Model{
    
    
    function lihat_data(){
        $query="select * from user order by status='0' desc";
        return $this->db->query($query);
        
    }
    
    function konfirmasi($id)
    {
        $status = '1';
        $data = array(
                        'status'=> $status
                      );
        $this->db->where('id_user',$id);
        $this->db->update('user',$data);
    }

    function blokir($id)
    {
        $status = '0';
        $data = array(
                        'status'=> $status
                      );
        $this->db->where('id_user',$id);
        $this->db->update('user',$data);
    }
    
    function hapus($id){

        $this->db->where('id_user',$id);
        $this->db->delete('pesan');

        $this->db->where('id_user',$id);
        $this->db->delete('riwayat');

        $this->db->where('id_user',$id);
        $this->db->delete('user');

    }
}