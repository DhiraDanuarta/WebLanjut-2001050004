<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Aset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AsetModel');
    }

    public function index()
    {
        $data['isi'] = $this->AsetModel->getAll();
        $this->load->view('AsetView', $data);
    }

    public function tambah()
    {
        $this->load->view('AsetTambahView');
    }
}

/* End of file Aset.php */
