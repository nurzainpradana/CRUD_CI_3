<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        echo "method index";
    }

    public function halo() {
        echo "method halo";
    }
}