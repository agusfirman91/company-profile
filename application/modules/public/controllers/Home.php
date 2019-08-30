<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_home");
        $this->load->model("m_about");
    }
	public function index()
	{
	    $data["news"] = $this->m_home->getAllNews();
	    $data["products"] = $this->m_home->getAllProducts();
	    $data["doctors"] = $this->m_home->getAllDoctors();
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('home', $data);
		$this->load->view('_partials/footer');
	}
	
}
