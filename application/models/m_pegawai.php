<?php

class M_pegawai extends CI_Model {
    function ambil_data() {
        return $this->db->get('tbl_pegawai');
    }
}