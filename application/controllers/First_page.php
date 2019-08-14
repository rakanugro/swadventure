<?php


Class First_page extends CI_controller
{

	function __contruct()
	{
		parent__::construct();
	}

	function index()
	{

		$data = array(
			"title" => "Outbound",


		);
		$this->load->view('template', $data);
	}

	function loginlo()
	{
		$data = array(

			"title" => "Login"
		);
		$this->load->view('login', $data);
	}

	function gallery()
	{
		$this->load->Model('model_product');
		$data = array(
			"title" => "gallery",
			"data_product" =>$this->model_product->get_all()
		);

		$this->load->view('gallery', $data);

	}


}