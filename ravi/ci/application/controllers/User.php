<?php

class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("usermod");

		$this->id = $this->session->userdata("id");


		$this->backdoor();

	}
	function index()
	{
		$pagedata = array("title"=>"My Dashboard", "pagename"=>"dash");
		$this->load->view("layout", $pagedata);
	}
	function profile()
	{
		
		
		$result=$this->usermod->select_where_id($this->id);


		$pagedata = array("title"=>"My Profile", "pagename"=>"profile", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}
	function image_upload()
	{
		$pagedata = array("title"=>"Image Upload", "pagename"=>"image_upload");
		$this->load->view("layout", $pagedata);
	}

	function upload()
	{
		$config["upload_path"]="./public/user_image/";
		$config["allowed_types"] = "jpg|jpeg|png|gif";
		$config["max_size"]=1024;
		$config["encrypt_name"]=true;

		$this->load->library("upload", $config);
		if($this->upload->do_upload()==true)
		{
			
			$result = $this->usermod->select_where_id($this->id);
			$data = $result->row_array();
			if($data['image']!="")
			{
				unlink("public/user_image/".$data['image']);
			}



			$arr["image"]=$this->upload->data("file_name");
			$this->usermod->update($this->id, $arr);
			redirect("user/profile");

		}
		else
		{
			$a = $this->upload->display_errors();
			$this->session->set_flashdata("msg", $a);
			redirect("user/image_upload");
		}
	}








	function edit()
	{
		
		
		$result=$this->usermod->select_where_id($this->id);


		$pagedata = array("title"=>"My Profile", "pagename"=>"edit", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}
	function update()
	{
		$data["full_name"] = $this->input->post("full_name");
		
		$data["address"] = $this->input->post("address");
		$data["gender"] = $this->input->post("gender");
		$data["city"] = $this->input->post("city");
		$data["contact"] = $this->input->post("contact");


		
		$this->usermod->update($this->id, $data);
		redirect("user/profile");

	}


	function change_pass()
	{
		$pagedata = array("title"=>"Change Password", "pagename"=>"change_pass");
		$this->load->view("layout", $pagedata);
	}
	function update_pass()
	{
		$a = $this->input->post("c_pass");
		$b = $this->input->post("new_pass");
		$c = $this->input->post("conf_pass");


		$result=$this->usermod->select_where_id($this->id);
		$data=$result->row_array();
		if($data['password']==$a)
		{
			if($b == $c)
			{
				$arr['password']=$b;
				$this->usermod->update($this->id, $arr);
				redirect("user/profile");
			}
			else
			{
				$this->session->set_flashdata("msg", "New Password and Confirm New Password is not matched");
				redirect("user/change_pass");		
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "Current Password is not matched");
			redirect("user/change_pass");
		}
	}






	function backdoor()
	{
		if(! $this->session->userdata("is_user_logged_in"))
		{
			redirect("home/login");
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home/login");
	}

}



?>