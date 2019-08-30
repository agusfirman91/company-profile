<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_dokter extends MX_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model("m_jadwal_dokter"); 
		$this->load->model("m_about"); 
		// load Pagination library
        $this->load->library(array('pagination'));
    }

	public function index()
	{
		//konfigurasi pagination
        $config['base_url'] = base_url().'jadwal-dokter/index'; //site url
        $config['total_rows'] = $this->db->count_all('dokter'); //total row
        $config['per_page'] = 20;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
		$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
        $config['full_tag_close']  = '</ul>';
        
        $config['first_link']      = 'First'; 
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link']       = 'Last'; 
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';
        
        $config['next_link']       = ' <i class="fa fa-caret-right"></i> '; 
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']  = '</li>';
        
        $config['prev_link']       = ' <i class="fa fa-caret-left"></i> '; 
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        
        $config['cur_tag_open']    = '<li class="active"><a href="#">';
        $config['cur_tag_close']   = '</a></li>';
         
        $config['num_tag_open']    = '<li>';
		$config['num_tag_close']   = '</li>';
		
        // Membuat Style pagination untuk BootStrap v4
        // $config['num_tag_open']     = '<li><a href="#">';
        // $config['num_tag_close']    = '</a></li>';
        // $config['cur_tag_open']     = '<li class="active"><a href="#">';
        // $config['cur_tag_close']    = '</a></li>';
        // $config['next_tag_open']    = '<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true">';
        // $config['next_tagl_close']  = '</i></a></li>';
        // $config['prev_tag_open']    = '<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true">';
		// $config['prev_tagl_close']  = '</i></a></li>';

	// 	<ul class="post-pagination text-center">
	// 	<li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
	// 	<li class="active"><a href="#">1</a></li>
	// 	<li><a href="#">2</a></li>
	// 	<li><a href="#">3</a></li>
	// 	<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
	// </ul>
		
	
        $page = $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel m_jadwal_dokter. 
        $data['results'] = $this->m_jadwal_dokter->get_current_page_records($config["per_page"], $data['page'],null);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        // $this->load->view('user_listing', $params);
		// var_dump($page);
	    $params["jadwal_dokter"] = $this->m_jadwal_dokter->getAllPoli();
	    $params["j_praktek"] = $this->m_jadwal_dokter->getGroupJam();
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('jadwal_dokter',$data);
		$this->load->view('_partials/footer');
	}
    
    public function search()
    {
		$nama_poli=$data['poliklinik'] = $this->input->post('poliklinik');
		// var_dump($nama_poli);
        $this->session->set_flashdata('sess_kategori', $nama_poli);
	    $data["jadwal_dokter"] = $this->m_jadwal_dokter->getAllPoli();
	    $data["results"] = $this->m_jadwal_dokter->getPoli($nama_poli);
		$data["about"] = $this->m_about->getAll();
        $this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('jadwal_dokter',$data);
		$this->load->view('_partials/footer');
	}
	
	public function custom()
    {
     
        // init params
        $params = array();
        $limit_per_page = 2;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->m_jadwal_dokter->get_total();
     
        if ($total_records > 0)
        {
            // get current page records
            $params["results"] = $this->m_jadwal_dokter->get_current_page_records($limit_per_page, $page*$limit_per_page);
                 
            $config['base_url'] = base_url() . 'jadwal-dokter/custom';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
             
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<span class="firstlink">';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<span class="lastlink">';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = 'Next Page';
            $config['next_tag_open'] = '<span class="nextlink">';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = 'Prev Page';
            $config['prev_tag_open'] = '<span class="prevlink">';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<span class="curlink">';
            $config['cur_tag_close'] = '</span>';
 
            $config['num_tag_open'] = '<span class="numlink">';
            $config['num_tag_close'] = '</span>';
             
            $this->pagination->initialize($config);
                 
            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
     
        $this->load->view('jadwal_dokter', $params);
    }
   
}
