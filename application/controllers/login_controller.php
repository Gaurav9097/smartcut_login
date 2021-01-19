<?php

class login_controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
		//$this->load->view('CP-Owner/CP_Owner_Home.php');
	}
}
?>