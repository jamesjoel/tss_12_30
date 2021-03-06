<?php
class Home extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}



	function index()
	{
		$pagedata = array("title"=>"Home Page", "pagename"=>"home");
		$this->load->view("layout", $pagedata);
	}
	function contact()
	{
		$pagedata = array("title"=>"Contact Page", "pagename"=>"contact");
		$this->load->view("layout", $pagedata);

	}
	function about()
	{
		$pagedata = array("title"=>"About Page", "pagename"=>"about");
		$this->load->view("layout", $pagedata);
	}

	function login()
	{
		$pagedata = array("title"=>"Login Page", "pagename"=>"login");
		$this->load->view("layout", $pagedata);
	}
	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username", "required|valid_email");
		$this->form_validation->set_rules("pass", "Password", "required");
		$this->form_validation->set_rules("re_pass", "Re-Password", "required|matches[pass]");
		$this->form_validation->set_rules("add", "Address", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("contact", "Contact", "required|numeric|exact_length[10]");
		$this->form_validation->set_rules("city", "City", "required");

		if($this->form_validation->run()==false)
		{
			$pagedata = array("title"=>"Signup Page", "pagename"=>"signup");
			$this->load->view("layout", $pagedata);	
		}
		else
		{
			// $a = $_POST['full_name'];
			$data["full_name"] = $this->input->post("full_name");
			$data["username"] = $this->input->post("username");
			$data["password"] = $this->input->post("pass");
			$data["address"] = $this->input->post("add");
			$data["gender"] = $this->input->post("gender");
			$data["city"] = $this->input->post("city");
			$data["contact"] = $this->input->post("contact");
			$this->load->model("usermod");
			$this->usermod->insert($data);


			redirect("home/login");

		}

	
	}

	function auth()
	{
		// print_r($this->input->post());
		$u = $this->input->post("username");
		$p = $this->input->post("pass");
		$this->load->model("usermod");
		$result=$this->usermod->select_where_username($u);
		if($result->num_rows()==1) // if(mysqli_num_rows($result)==1)
		{
			$data = $result->row_array();
			if($data['password']==$p)
			{
				if($data['status']==1)
				{

				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("name", $data['full_name']);
				$this->session->set_userdata("is_user_logged_in", true);
				redirect("user");
				}
				else
				{
					$this->session->set_flashdata("msg", "You Are Disalbed Now, ....");
					redirect("home/login");	
				}
			}
			else
			{
				$this->session->set_flashdata("msg", "This Password is Incorrect!");
				redirect("home/login");		
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "This Username And Password is Incorrect!");
			redirect("home/login");
		}
	}



}


?>