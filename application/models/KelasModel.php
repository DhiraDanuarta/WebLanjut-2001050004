<?php


defined('BASEPATH') or exit('No direct script access allowed');

class KelasModel extends CI_Model
{
    private $table = 'tabel_2001050004';


    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
}

/* End of file KelasModel.php */
