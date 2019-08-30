<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal_dokter extends CI_Model
{

    public function getAllPoli()
    {
        $this->db->select('poliklinik');
        $this->db->where('poliklinik !=', '');
        $this->db->group_by('poliklinik','asc');
        return $this->db->get('dokter')->result();
    }

    public function getGroupJam()
    {
        return $this->db->get('dokter')->result();
    }

    public function getPoli($n_poli)
    {
        $this->db->select('*');
        $this->db->like( 'poliklinik' , $n_poli);
        return $this->db->get_where('dokter')->result();
    }

    public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("dokter");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }
     
    public function get_total() 
    {
        return $this->db->count_all("dokter");
    }
}
