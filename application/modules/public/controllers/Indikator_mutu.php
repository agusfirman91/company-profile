<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikator_mutu extends MX_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_indikator_mutu");
        $this->load->model("m_about");
    }
	public function index()
	{
		// echo "OK";
	    // $data["news"] = $this->m_home->getAllNews();
		$data["ims"] = $this->m_indikator_mutu->getAllIndikatorMutu();
		$data['title'] = "Indikator Mutu RS Grha Kedoya";
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('indikator_mutu', $data);
		$this->load->view('_partials/footer');
	}
	public function detail($id)
	{
		// echo "OK";
	    // $data["news"] = $this->m_home->getAllNews();
		$data["ims"] = $this->m_indikator_mutu->getAllIndikatorMutuById($id);
		$data['title'] = "Indikator Mutu RS Grha Kedoya";
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('indikator_mutu_detail', $data);
		$this->load->view('_partials/footer');
	}
	
}
