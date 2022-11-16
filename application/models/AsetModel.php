<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AsetModel extends CI_Model
{
    private $table = 'tabel_aset';


    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
}

/* End of file AsetModel.php */
