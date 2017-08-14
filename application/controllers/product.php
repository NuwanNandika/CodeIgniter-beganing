<?php

/**
* 
*/
class Product extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('product_add');
		
		$this->load->view('template/footer');
	}

	public function save()
	{
		$this->load->model('product_model');
		$this->product_model->insert_entry();
		
		echo "success";
	}
}

?>