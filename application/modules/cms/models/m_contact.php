<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model
{
    
    private $_table = "contact_message";

    public function getAllContactMessage()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getAllIndikatorMutuById($id)
    {
        $this->db->select('*');
        $this->db->where('id =', $id);
        return $this->db->get($this->_table)->row();
    }
    public function createMessage()
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->phone = $post["phone"];
        $this->subject = $post["subject"];
        $this->messages = $post["messages"];
        $this->db->insert($this->_table1, $this);
    }
}
