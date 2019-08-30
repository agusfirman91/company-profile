<?php 

class Contact extends MX_Controller
{

	function __construct(){
		parent::__construct();
		$this->lang->load('auth');
		$this->load->model('m_contact');
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('cms/login', 'refresh');
		}
	}


	function index(){
		if ($this->session->userdata("identity")) {
			$data['contactMessage'] = $this->m_contact->getAllContactMessage(); 
            $this->load->view('_partials/head');
            $this->load->view('contact', $data);
            $this->load->view('_partials/footer');
        } else {
            redirect('cms/login', 'refresh');
        }
		// $data["people"]=$this->crud_model->read();
		// $this->load->view("crud_view",$data);
		// echo "OK";

	}

	function create(){
		echo json_encode(array("id"=>$this->crud_model->create()));
	}

	function update(){
		$id= $this->input->post("id");
		$value= $this->input->post("value");
		$modul= $this->input->post("modul");
		$this->crud_model->update($id,$value,$modul);
		echo "{}";
	}

	function delete(){
		$id= $this->input->post("id");
		$this->crud_model->delete($id);
		echo "{}";
	}

}