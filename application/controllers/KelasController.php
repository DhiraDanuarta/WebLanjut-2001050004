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
        $this->load->view('Kelas/KelasView', $data);
    }

    public function tambah()
    {
        $this->load->view('Kelas/KelasTambah');
    }
    public function simpantambah()
    {
        $fakultas = $this->input->post('fakultas');
        $prodi = $this->input->post('prodi');
        $kelas = $this->input->post('kelas');
        $isi = $this->input->post('isi');

        $data_input = [
            'fakultas' => $fakultas,
            'prodi' => $prodi,
            'kelas' => $kelas,
            'isi' => $isi
        ];

        $simpan = $this->KelasModel->addKelas($data_input);

        redirect('KelasController/index');
    }
}

/* End of file KelasController.php */
