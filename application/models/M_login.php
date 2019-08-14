<?php

Class M_login extends CI_model
{
	function index()
	{

	}

	function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
}