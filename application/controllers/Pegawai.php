<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('html');
        $this->load->model('m_pegawai');
    }

    public function index() {
        // echo "method index";
        $data_pegawai = $this->m_pegawai->ambil_data()->result();

        $data = array (
            'judul' => "CRUD Pegawai",
            'pegawai' => $data_pegawai
        );
        $this->load->view('view_header');
        $this->load->view('view_index', $data);
        $this->load->view('view_footer');
    }

    public function aboutme() {
        // echo "method index";
        $data = array (
            'judul' => "Tentang Saya"
        );
        $this->load->view('view_header');
        $this->load->view('view_about_me', $data);
        $this->load->view('view_footer');
    }

    public function halo() {
        // echo "method halo";
        // $data['nama_perusahaan'] = "Zain Company";
        $data = array(
            'nama_perusahaan' => 'Zain Company',
            'owner' => 'Nur Zain Pradana'
        );
        $this->load->view('view_pegawai', $data);
    }
}