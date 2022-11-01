<?php
// Controller
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home');
    }

    public function form()
    {
        return $this->load->view('v_form');
    }
}

/* End of file Home.php */
