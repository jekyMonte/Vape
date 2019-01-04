<?php

class Model_dashboard extends CI_Model{


    function get_user()
    {
        $data = $this->db->query('select * from user ');
		return $data;
    }
    
    function get_pesan()
    {
        $data = $this->db->query('select * from pesan ');
		return $data;
    }
    
    function get_riwayat()
    {
        $data = $this->db->query('select * from riwayat ');
		return $data;
    }
    
    function get_kerusakan()
    {
        $data = $this->db->query('select * from kerusakan ');
		return $data;
    }
    
    function pesan()
    {
        $data = $this->db->query('select u.username, p.pesan, p.tanggal, p.id_pesan, u.foto
                                    from pesan p join user u
                                    on p.id_user=u.id_user
                                    order by p.tanggal desc limit 5');
		return $data;
    }
    
    function user($username)
    {
        $query="SELECT * from user  where username='$username'";
        return $this->db->query($query);
    }
   
    function get_one($id){
        $param = array('id_user'=>$id);
        return $this->db->get_where('user',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_user',$id);
        $this->db->update('user',$data);
    }
}