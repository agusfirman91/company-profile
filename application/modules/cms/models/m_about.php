<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model
{
    
    private $_table = "about";

    public function getAllAbout()
    {
        return $this->db->get($this->_table)->row();
    }
    public function getAllIndikatorMutuById($id)
    {
        $this->db->select('*');
        $this->db->where('id =', $id);
        return $this->db->get($this->_table)->row();
    }
    public function updateAbout($data)
    {
        extract($data);
        $this->db->where('id', $id);
        $this->db->update($this->_table, $data);
        return true;
    }
  
    function simpan_upload($judul,$image){
        $data = array(
                'judul' => $judul,
                'name' => $image
            );  
        $result= $this->db->insert('testupload',$data);
        return $result;
    }

    public function get_uploads(){
        $query = $this->db->query("select * from testupload");
        return $query;
    }
}
