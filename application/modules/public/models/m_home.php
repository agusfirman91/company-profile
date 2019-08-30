<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model
{
    private $_table = "news";
    private $_table1 = "product";
    private $_table2 = "dokter";

    public function getAllNews()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getAllProducts()
    {
        return $this->db->get($this->_table1)->result();
    }
    public function getAllDoctors()
    {
        return $this->db->get($this->_table2)->result();
    }
}
