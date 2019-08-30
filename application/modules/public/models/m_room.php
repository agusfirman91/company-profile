<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_room extends CI_Model
{
    private $_table = "rooms";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {        
        $this->db->select('*');
        $this->db->where('id =', $id);
        return $this->db->get($this->_table)->row_array();
    }
}
