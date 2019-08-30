<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model
{
    private $_table = "about";

    public function getAll()
    {
        return $this->db->get($this->_table)->row();
    }
}
