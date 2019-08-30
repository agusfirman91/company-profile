<?php 

class TestUpload extends MX_Controller{

	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
			$this->load->model('m_about');
	}


	function index(){
		$this->load->view('upload', array('error' => ' ' ));
	}

    public function do_upload(){
        $config['upload_path']          = base_url().'assets/images/uploads';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100000;
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){
            $data = array('upload_data' => $this->upload->data());
 
            $judul= $this->input->post('judul');
            $image= $data['upload_data']['file_name']; 
             
            $result= $this->m_about->simpan_upload($judul,$image);
            echo json_decode($result);
        }
    }
}