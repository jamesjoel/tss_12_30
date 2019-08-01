<?php
class File_upload extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->helper("url");
	}


	function index()
	{
		$this->load->helper('url');
		$this->load->view("file_upload");
	}
	function photo_upload()
	{
		$config["upload_path"]="./public/photos/";
		$config["allowed_types"]="png|jpg|jpeg|gif";
		$config["max_size"]=1024;

		$config['encrypt_name']=true;
		$this->load->library("upload", $config);

		if($this->upload->do_upload("image")==true)
		{

			$a = $this->upload->data("file_name");
		}
		else
		{
			$msg = $this->upload->display_errors();
			$this->session->set_flashdata('msg', $msg);
			redirect("file_upload");
		}

		

		// print_r($this->upload->data());
		

	}
}


?>