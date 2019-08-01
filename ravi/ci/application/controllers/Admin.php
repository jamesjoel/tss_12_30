<?php
class Admin extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}



	function index()
	{
		$this->load->view("admin/login");
	}
	
	
	

	function auth()
	{

		$u = $this->input->post("username");
		$p = $this->input->post("password");
		$this->load->model("adminmod");
		$result=$this->adminmod->select_where_username($u);
		if($result->num_rows()==1) // if(
		{
			$data = $result->row_array();
			if($data['password']==$p)
			{
				$this->session->set_userdata("id", $data['id']);
				
				$this->session->set_userdata("is_admin_logged_in", true);
				redirect("admin/dash");
			}
			else
			{
				$this->session->set_flashdata("msg", "This Password is Incorrect!");
				redirect("admin");		
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "This Username And Password is Incorrect!");
			redirect("admin");
		}
	}

	function backdoor()
	{
		if(! $this->session->userdata("is_admin_logged_in"))
		{
			redirect("home");
		}
	}



	function dash()
	{
		$this->backdoor();
		$pagedata = array("title"=>"Admin Dash", "pagename"=>"admin/dash");
		$this->load->view("admin/layout", $pagedata);
	}
	function view_users()
	{
		$this->backdoor();
		$this->load->model("usermod");
		$result = $this->usermod->select_all();



		$pagedata = array("title"=>"Admin View User", "pagename"=>"admin/view_users", "result"=>$result);
		$this->load->view("admin/layout", $pagedata);
	}
	function change_status($a, $b)
	{
		$this->backdoor();
		$this->load->model("usermod");
		if($b==1)
			$arr=array("status"=>0);
		else
			$arr=array("status"=>1);

		$this->usermod->update($a, $arr);
		redirect("admin/view_users");
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}


}


?>