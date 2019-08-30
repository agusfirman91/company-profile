<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MX_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_about");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data["about"] = $this->m_about->getAll();
		// echo $data->about_id;
		$this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('about', $data);
		$this->load->view('_partials/footer');
	}
	
}
