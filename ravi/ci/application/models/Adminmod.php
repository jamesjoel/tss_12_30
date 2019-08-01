<?php
class Adminmod extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function insert($data)
	{
		/*
		$que = "INSERT ..." ;
		mysqli_query($con, $que);
		*/
		$this->db->insert("admin", $data);
	}
	function select_where_username($u)
	{
		$this->db->where("username", $u);
		$result=$this->db->get("admin");
		return $result;
	}

	function select_where_id($id)
	{
		$this->db->where("id", $id);
		$result=$this->db->get("admin");
		return $result;
		// SELECT * FROM user WHERE username=$u
	}

	function update($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update("admin", $data);
	}

}



?>