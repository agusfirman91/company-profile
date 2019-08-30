<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_contact");
        $this->load->model("m_about");
	}
	
	public function index()
	{
		$data = array(
			'action' => base_url('contact/sendMessage'),
            'name' => set_value('name'),
            'email' => set_value('email'),
            'phone' => set_value('phone'),
            'subject' => set_value('subject'),
            'message' => set_value('message'),
            'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
            'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
        );
		$data["about"] = $this->m_about->getAll();
		$data["contact"] = $this->m_contact->getAllContact();
		$this->load->view('_partials/head');
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/mainMenu');
		$this->load->view('contact', $data);
		$this->load->view('_partials/footer');

	}

	public function sendMessage()
	{
			// validasi form
			$this->form_validation->set_rules('name', ' ', 'trim|required');
			$this->form_validation->set_rules('email', ' ', 'trim|required');
			$this->form_validation->set_rules('phone', ' ', 'trim|required');
			$this->form_validation->set_rules('subject', ' ', 'trim|required');
			$this->form_validation->set_rules('messages', ' ', 'trim|required');
			
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			$recaptcha = $this->input->post('g-recaptcha-response');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$subject = $this->input->post('subject');
			$messages = $this->input->post('messages');
			$response = $this->recaptcha->verifyResponse($recaptcha);
	 
			if ($this->form_validation->run() == FALSE || !isset($response['success']) || $response['success'] <> true) {
				$this->index();
			} else {
				$this->m_contact->createMessage();
				echo $this->session->set_flashdata('message', 'Berhasil Dikirim !');
				
				redirect(base_url('contact'));
			}
			
	}

}