<?php 

class Profile extends MX_Controller{

	function __construct(){
		parent::__construct();
		$this->lang->load('auth');
		$this->load->model('m_about');
		$this->load->helper('ckeditor');
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('cms/login', 'refresh');
		}
	}


	function index(){
		$data = array(
			'action' => base_url('cms/profile/update'),
            'hospital_name' => set_value('hospital_name'),
            'photo_header' => set_value('photo_header'),
            'about' => set_value('about'),
            'mission_id' => set_value('mission_id'),
            'vision_id' => set_value('vision_id'),
            'street' => set_value('street'),
            'email' => set_value('email'),
            'phone_ecare' => set_value('phone_ecare'),
            'phone_regis' => set_value('phone_regis')
        );
        if ($this->session->userdata("identity")) {
			$data['about'] = $this->m_about->getAllAbout(); 
            $this->load->view('_partials/head');
            $this->load->view('profile', $data);
            $this->load->view('_partials/footer');
        } else {
            redirect('cms/login', 'refresh');
        }
	}

	function update(){
		// validasi form
		$post = $this->input->post();
		$this->id = $this->input->post['id'];
		$this->hospital_name = $this->input->post['hospital_name'];
		$this->about_id = $this->input->post['about'];
		$this->mission_id = $this->input->post['mission_id'];
		$this->vision_id = $this->input->post['vission_id'];
		$this->street = $this->input->post['street'];
		$this->email = $this->input->post['email'];
		$this->phone_ecare = $this->input->post['phone_ecare'];
		$this->phone_registration = $this->input->post['phone_regis'];
		if(!empty($_FILES['photo_header']['name'])){
			$this->photo_header= $this->_uploadImage($_FILES['photo_header']['name']);
		}else{
			$this->photo_header= $this->post['oldImage'];
		}
		// var_dump($post);
		$this->db->update('about', $this, array('id' =>  $this->input->post['id']));
		echo $this->session->set_flashdata('message', 'Berhasil Disimpan !');				
		redirect(base_url('cms/profile'));

			// $data = array(			,
			// 	'hospital_name' => $this->input->post('hospital_name'),
			// 	'photo_header' => $this->input->post('photo_header'),
			// 	'about_id' => $this->input->post('about'),
			// 	'mission_id' => $this->input->post('mission_id'),
			// 	'vision_id' => $this->input->post('vission_id'),
			// 	'street' => $this->input->post('street'),
			// 	'email' => $this->input->post('email'),
			// 	'phone_ecare' => $this->input->post('phone_ecare'),
			// 	'phone_registration' => $this->input->post('phone_regis')
			// );
	 
			// if ($this->form_validation->run() == FALSE) {
			// 	redirect(base_url('cms/profile'));
			// } else {
			// 	// var_dump($data);
			// 	$this->m_about->updateAbout($data);
			// 	echo $this->session->set_flashdata('message', 'Berhasil Disimpan !');				
			// 	redirect(base_url('cms/profile'));
			// }
	}

	private function _uploadImage($id)
	{
		$config['upload_path']          = '../../assets/images/uploads/about/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->id;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('photo_header')) {
			return $this->upload->data("file_name");
		}
		
		return "default.png";
	}

}