<?php

/**
* a
*/
class About extends CI_Controller
{
	
	public function index()
	{

		$data["name"]="Nuwan Nandika Dharmadasa";
		$data["hotline"]="nuwannandika8881@gmail.com";
		$data["calling"]="0716573502";

		$data["branches"]=array("Nugegoda", "Deniyaya", "Galle");

		$this->load->view('template/header');
		$this->load->view('about',$data);
		
		$this->load->view('template/footer');

	}

	// sub action

	public function index1()
	{
		echo "Hello, Its About us page wtih Index 1";
	}

	// controler parameters

	public function welcome($name, $age)
	{
		echo "<h1>Welcome Mr. $name <h1/>";
		echo "<h3>Your Age is $age. <h3/>";
	}
}

?>