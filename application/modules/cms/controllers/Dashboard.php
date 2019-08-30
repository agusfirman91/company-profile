<?php 

class Dashboard extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('m_dashboard');

    }

    public function index()
    {
        if ($this->session->userdata("identity")) {
            $this->load->view('_partials/head');
            $this->load->view('dashboard');
            $this->load->view('_partials/footer');
        } else {
            redirect('cms/login', 'refresh');
        }
    }

}