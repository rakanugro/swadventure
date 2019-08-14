<?php

Class Login_con extends CI_controller
{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
		$this->load->library('session');
 
	}

	function index()
	{
		//$this->load->model('m_login');
	}

	function aksi_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->M_login->cek_login("login", $where)->num_rows();
		if($cek > 0 )
		{
			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect (base_url("Product"));
		}else{
			echo 'username & password salah';
			//redirect(base_url("Menu_utama/loginlo"));
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('First_page/loginlo'));
	}

}