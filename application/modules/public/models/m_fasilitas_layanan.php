<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas_layanan extends CI_Model
{
    private $_table0 = "facility";
    private $_table1 = "spesialisasi";
    private $_table2 = "penunjang_medis";
    private $_table3 = "other_facility";

    public function getAllFacility()
    {
        return $this->db->get($this->_table0)->result();
    }
    public function getFacilityByid($id)
    {
        $this->db->select('*');
        $this->db->where( 'id=' , $id);
        return $this->db->get($this->_table0)->row();
    }

    public function getAllSpesialisasi()
    {
        return $this->db->get($this->_table1)->result();
    }

    public function getSpesialisasiById($id)
    {
        $this->db->select('*');
        $this->db->where( 'id_spesialisasi=' , $id);
        return $this->db->get($this->_table1)->row();
    }

    public function getAllPenunjangMedis()
    {
        return $this->db->get($this->_table2)->result();
    }

    public function getPenunjangMedisById($id)
    {
        $this->db->select('*');
        $this->db->where( 'id_penunjang_medis=' , $id);
        return $this->db->get($this->_table2)->row();
    }

    public function getAllFasilitasLainya()
    {
        return $this->db->get($this->_table3)->result();
    }

    public function getFasilitasLainyaById($id)
    {
        $this->db->select('*');
        $this->db->where( 'id_other_facility=',$id);
        return $this->db->get($this->_table3)->row();
    }
}
