<?php

Class Model_product extends CI_model
{
	
	function simpan($data)
	{

		$query = $this->db->insert("product",$data);

		if($query)
		{
			return true;
		}else
		{
			return false;
		}

	}


	function get_all()
	{

		$query = $this->db->select("*")
                 ->from('product')
                 ->order_by('id_product', 'ASC')
                 ->get();
        return $query->result();
	}

	function edit($id_product)
	{

		$query = $this->db->where("id_product",$id_product)->get('product');
		if($query)
		{

			return $query->row();
		}else{
			return false;
		}

	}

	function update($data, $id)
	{
		$query = $this->db->update('product',$data, $id);

		if($query)
		{
			return true;
		} else{
			return false;
		}

	}

	function hapus($id)
	{

		$query = $this->db->delete('product',$id);

		if($query)
		{
			return true;
		} else{
			return false;
	}

	}

}