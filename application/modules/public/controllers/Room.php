<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends MX_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_room");
        $this->load->model("m_about");
    }

	// public function index()
	// {
    //     // echo "hallo";
	// 	$data['ranaps'] = $this->m_room->getAll();
	// 	$this->load->view('_partials/head');
	// 	$this->load->view('_partials/header');
	// 	$this->load->view('_partials/mainMenu');
	// 	$this->load->view('rooms', $data);
	// 	$this->load->view('_partials/footer');
	// }

	public function detail($id)
	{
        // echo "hallo";
		$data['ranaps'] = $this->m_room->getAll();
		$data['ranap'] = $this->m_room->getById($id);
		$data["about"] = $this->m_about->getAll();
		echo json_encode($data);
		$this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('rooms', $data);
		$this->load->view('_partials/footer');
	}

	public function presidental_suites()
	{
		$data['ranaps'] = $this->m_room->getAll();
		$data['ranap'] = $this->m_room->getById(1);
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('rooms', $data);
		$this->load->view('_partials/footer');
	}
	public function vvip()
	{
		$data['ranaps'] = $this->m_room->getAll();
		$data['ranap'] = $this->m_room->getById(2);
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('rooms', $data);
		$this->load->view('_partials/footer');
	}

	public function vip()
	{
		$data['ranaps'] = $this->m_room->getAll();
		$data['ranap'] = $this->m_room->getById(3);
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('rooms', $data);
		$this->load->view('_partials/footer');
	}

	public function kelas1()
	{
		$data['ranaps'] = $this->m_room->getAll();
		$data['ranap'] = $this->m_room->getById(4);
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('rooms', $data);
		$this->load->view('_partials/footer');
	}

	public function kelas2()
	{
		$data['ranaps'] = $this->m_room->getAll();
		$data['ranap'] = $this->m_room->getById(5);
		$this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('rooms', $data);
		$this->load->view('_partials/footer');
	}

	public function kelas3()
	{
		$data['ranaps'] = $this->m_room->getAll();
		$data['ranap'] = $this->m_room->getById(3);
		$data["about"] = $this->m_about->getAll();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header',$data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('rooms', $data);
		$this->load->view('_partials/footer');
	}
    
    
}
