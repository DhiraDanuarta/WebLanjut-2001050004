<?php


defined('BASEPATH') or exit('No direct script access allowed');

class KelasController extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('KelasModel');
    }


    public function index()
    {
        $data['isi'] = $this->KelasModel->getAll();
        $this->load->view('KelasView', $data);
    }
}

/* End of file KelasController.php */
