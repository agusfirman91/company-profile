<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_layanan extends MX_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_fasilitas_layanan");
        $this->load->model("m_about");
    }

	public function index()
	{
		$data["facilities"] = $this->m_fasilitas_layanan->getAllFacility();
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('fasilitas_layanan', $data);
		$this->load->view('_partials/footer');
	}
    
    public function igd()
    {
		$data["about"] = $this->m_about->getAll();
        $this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('igd');
		$this->load->view('_partials/footer');
	}
	
    public function poli_specialis()
    {
		$data["facilities"] = $this->m_fasilitas_layanan->getFacilityByid(2);
		$data["specialis"] = $this->m_fasilitas_layanan->getAllSpesialisasi();
		$data["about"] = $this->m_about->getAll();
        $this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('poli_specialis', $data);
		$this->load->view('_partials/footer');
	}

    public function poli_specialis_by_id($id)
    {
		$data["specialis"] = $this->m_fasilitas_layanan->getAllSpesialisasi();
		$data["_specialis"] = $this->m_fasilitas_layanan->getSpesialisasiById($id);
		$data["about"] = $this->m_about->getAll();
        $this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('poli_specialis', $data);
		$this->load->view('_partials/footer');
	}
	
    public function penunjang_medis()
    {
		$data["facilities"] = $this->m_fasilitas_layanan->getFacilityByid(3);
		$data["penunjang_medis"] = $this->m_fasilitas_layanan->getAllPenunjangMedis();
		$data["about"] = $this->m_about->getAll();
        $this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('penunjang_medis', $data);
		$this->load->view('_partials/footer');
	}

    public function penunjang_medis_by_id($id)
    {
		$data["penunjang_medis"] = $this->m_fasilitas_layanan->getAllPenunjangMedis();
		$data["_penunjang_medis"] = $this->m_fasilitas_layanan->getPenunjangMedisById($id);
		$data["about"] = $this->m_about->getAll();
        $this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('penunjang_medis', $data);
		$this->load->view('_partials/footer');
	}
	
    public function fasilitas_lainya()
    {
		$data["facilities"] = $this->m_fasilitas_layanan->getFacilityByid(4);
		$data["fasilitas_lainya"] = $this->m_fasilitas_layanan->getAllFasilitasLainya();
		$data["about"] = $this->m_about->getAll();
        $this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('fasilitas_lainya', $data);
		$this->load->view('_partials/footer');
    }
	
    public function fasilitas_lainya_by_id($id)
    {
		$data["fasilitas_lainya"] = $this->m_fasilitas_layanan->getAllFasilitasLainya();
		$data["_fasilitas_lainya"] = $this->m_fasilitas_layanan->getFasilitasLainyaById($id);
		$data["about"] = $this->m_about->getAll();
        $this->load->view('_partials/head');
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('fasilitas_lainya', $data);
		$this->load->view('_partials/footer');
	}

}