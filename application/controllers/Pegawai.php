<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('html');
        $this->load->library('form_validation');
        $this->load->model('m_pegawai');
    }

    public function index() {
        // echo "method index";
        $data_pegawai = $this->m_pegawai->ambil_data()->result();

        $data = array (
            'judul' => "CRUD Pegawai",
            'pegawai' => $data_pegawai
        );

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');


        if ($this->form_validation->run() != false) {
            echo "Form Validation Oke";
        } else {
            $this->load->view('view_header');
            $this->load->view('view_index', $data);
            $this->load->view('view_footer');
        }
        
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

    public function tambah_aksi() {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('alamat');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nip' => $nip,
            'alamat' => $alamat,
            'nama' => $nama
        );

        $this->m_pegawai->input_data($data, 'tbl_pegawai');
        redirect('pegawai');
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

    public function hapus($id) {
        $where = array('id' => $id);
        $this->m_pegawai->hapus_data($where, 'tbl_pegawai');
        redirect('pegawai');
    }
}