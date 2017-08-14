<?php

/**
* a
*/
class Contact extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('contact');
		
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