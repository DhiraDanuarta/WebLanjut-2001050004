<?php
// Controller
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home');
    }


    public function tampil()
    {
        return $this->load->view('v_tampil');
    }
}

/* End of file Home.php */
