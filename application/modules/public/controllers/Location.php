<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends MX_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model("m_location");		
		$this->load->model("m_about");		
        // $this->load->library('googlemaps');
	}
	
	public function index()
	{
		$data['title'] = "Location RS Grha Kedoya";
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('location',$data);
        $this->load->view('_partials/footer');
	}
	
}
