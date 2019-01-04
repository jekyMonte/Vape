<?php
class M_crud extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert_data($table, $data) {
        $insertSQL = $this->db->insert($table, $data);
        return $insertSQL;
    }

    public function update_data($table, $content, $selection) {
        $updateSQL = $this->db->where($selection, $content[$selection]);
        $updateSQL = $this->db->update($table, $content);
        return $updateSQL;
    }

    public function update_data_($table, $content, $selection, $selection2) {
        $updateSQL = $this->db->where($selection, $content[$selection]);
        $updateSQL = $this->db->where($selection2, $content[$selection2]);
        $updateSQL = $this->db->update($table, $content);
        return $updateSQL;
    
    }

    public function truncate_data($table) {
        $truncateSQL = $this->db->truncate($table); 
        return $truncateSQL;
    }

    public function delete_data($table, $selection, $id) {
        $deleteSQL = $this->db->where($selection, $id);
        $deleteSQL = $this->db->delete($table);
        return $deleteSQL;
    }

    public function delete_data_($table, $selection, $selection2, $id, $id2) {
        $deleteSQL = $this->db->where($selection, $id);
        $deleteSQL = $this->db->where($selection2, $id2);
        $deleteSQL = $this->db->delete($table);
        return $deleteSQL;
    }

    public function delete_data__($table, $selection, $selection2, $selection3, $id, $id2, $id3) {
        $deleteSQL = $this->db->where($selection, $id);
        $deleteSQL = $this->db->where($selection2, $id2);
        $deleteSQL = $this->db->where($selection3, $id3);
        $deleteSQL = $this->db->delete($table);
        return $deleteSQL;
    }

    public function get_update_data($table, $selection) {
        $query = $this->db->query("SELECT * FROM $table WHERE $selection");
        return $query;
    }

    public function select_data($table, $return) {
        $selectSQL = $this->db->get($table);
        if ($return == 'row') {
            return $selectSQL->row();
        } elseif ($return == 'row_array') {
            return $selectSQL->row_array();
        } elseif ($return == 'result_array') {
            return $selectSQL->result_array();
        } elseif ($return == 'result') {
            return $selectSQL->result();
        }
    }

    public function select_data_($table, $selection, $id, $return) {
        $selectSQL = $this->db->where($selection, $id);
        $selectSQL = $this->db->get($table);
        if ($return == 'row') {
            return $selectSQL->row();
        } elseif ($return == 'row_array') {
            return $selectSQL->row_array();
        } elseif ($return == 'result_array') {
            return $selectSQL->result_array();
        } elseif ($return == 'result') {
            return $selectSQL->result();
        }

    }

    public function select_data__($table, $selection, $selection2, $id, $id2, $return) {
        $deleteSQL = $this->db->where($selection, $id);
        $deleteSQL = $this->db->where($selection2, $id2);
        $selectSQL = $this->db->get($table);
        if ($return == 'row') {
            return $selectSQL->row();
        } elseif ($return == 'row_array') {
            return $selectSQL->row_array();
        } elseif ($return == 'result_array') {
            return $selectSQL->result_array();
        }
    }

    public function select_data___($table, $selection, $selection2, $selection3, $id, $id2, $id3, $return) {
        $deleteSQL = $this->db->where($selection, $id);
        $deleteSQL = $this->db->where($selection2, $id2);
        $deleteSQL = $this->db->where($selection3, $id3);
        $selectSQL = $this->db->get($table);
        if ($return == 'row') {
            return $selectSQL->row();
        } elseif ($return == 'row_array') {
            return $selectSQL->row_array();
        } elseif ($return == 'result_array') {
            return $selectSQL->result_array();
        }
    }

    
    public function select_max($column, $tabel) {
        $query = $this->db->query("SELECT MAX($column) AS max FROM $tabel");
        return $query->row_array();
    }



}

/* End of file m_crud.php */
/* Location: ./application/models/m_crud.php */