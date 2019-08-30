<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_indikator_mutu extends CI_Model
{
    private $_table = "indikator_mutu";

    public function getAllIndikatorMutu()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getAllIndikatorMutuById($id)
    {
        $this->db->select('*');
        $this->db->where('id =', $id);
        return $this->db->get($this->_table)->row();
    }
}
