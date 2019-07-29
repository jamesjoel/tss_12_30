<?php

class User extends CI_Controller{

		function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("usermodel");

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
		
		
		$result=$this->usermodel->select_where_id($this->id);


		$pagedata = array("title"=>"My Profile", "pagename"=>"profile", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}

	function edit()
	{
		
		
		$result=$this->usermodel->select_where_id($this->id);


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


		
		$this->usermodel->update($this->id, $data);
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


		$result=$this->usermodel->select_where_id($this->id);
		$data=$result->row_array();
		if($data['password']==$a)
		{
			if($b == $c)
			{
				$arr['password']=$b;
				$this->usermodel->update($this->id, $arr);
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