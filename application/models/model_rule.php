<?php
class model_rule extends ci_model{
    
    
    function lihat_data()
    {
        $data=  "select * from gejala";
        return $this->db->query($data);
    }
    
    
    function getprob($id){
        $query="SELECT *, r.id_rule as id_rule, 
                        substring(r.probabilitas, 1,4) as probabilitas, p.kerusakan as kerusakan
                from rule r join kerusakan p on r.id_kerusakan=p.id_kerusakan
                JOIN gejala g on g.id_gejala=r.id_gejala 
                where r.id_kerusakan='$id'";
        return $this->db->query($query)->result_array();
    }
    
    function lihat_rule()
    {
        $data=  "select distinct(p.id_kerusakan) , p.kerusakan "
                . "from rule r join kerusakan p "
                . "on r.id_kerusakan=p.id_kerusakan ";
        return $this->db->query($data);
    } 

}