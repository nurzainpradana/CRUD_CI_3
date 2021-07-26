<?php

class M_pegawai extends CI_Model {
    function ambil_data() {
        return $this->db->get('tbl_pegawai');
    }

    function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    function hapus_data($where, $id){
        $this->db->where($where);
        $this->db->delete($id);
    }
}