<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Product extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		
			if($this->session->userdata('status') != 'login' )
			{
				redirect(base_url("First_page/loginlo"));
			}
		$this->load->model('Model_product');
		$this->load->library('form_validation');
		
	}

	function index()
	{
		//echo "Okay";
		$data = array(

			"title" => "Product CRUD",
			"data_product" => $this->Model_product->get_all()
		);

		$this->load->view('product_view',$data);
	}


	function tambah_product()
	{
		$data = array(

			"title" => "Tambah Product" 
			
		);
		$this->load->view('tambah_product',$data);
	}

	function simpan()
	{
		$config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '3000';
		$config['max_width'] = '1024';
		$config['max_height'] = '640';

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('gambar'))
		{
			echo 'gagal upload cek file gambar anda';	
			//redirect('Product/tambah_product');	
		}
		else
		{	
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('price','price','required');
		//$this->form_validation->set_rules('gambar','gambar','required');

		if($this->form_validation->run() != false){

		$file = $this->upload->data();
        $gambar = $file['file_name'];	
		
		$data = array(

		"title" => $this->input->post("title"),
		"price" => $this->input->post("price"),
		"ket" => $this->input->post("ket"),
		//"file" => $this->upload->data(),
		"gambar" => $gambar

		);

		$this->Model_product->simpan($data);

		//if($data > 0){
		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                               </div>');
		//}
        
        redirect('Product/');
    	}
    		else{
    			$this->load->view('tambah_product');
    		}
    	}

	}


	function edit($id_product)
	{
		$id_product = $this->uri->segment(3);

		$data = array(

			"title" => "Edit data produk",
			"data_product" => $this->Model_product->edit($id_product)
		);

		$this->load->view('edit_product',$data );
	}

	function update()
	{
		//$id = $this->uri->segment(3);
		$id['id_product']	=	$this->input->post('id_product');

		$config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '3000';
		$config['max_width'] = '1024';
		$config['max_height'] = '640';

		$this->load->library('upload', $config);

		
		if (! $this->upload->do_upload('gambar'))
		{
			echo 'anda belum upload';
		//echo $error = array('error' => $this->upload->display_errors());

		}
		else
		{	

		
		$file = $this->upload->data();
        $gambar = $file['file_name'];	
			
		$data = array(

		"title" => $this->input->post("title"),
		"price" => $this->input->post("price"),
		"ket" => $this->input->post("ket"),
		//"path" => $this->input->post("path")
		"gambar" => $gambar

		);

		$this->Model_product->update($data, $id);

		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible"> Success! data berhasil Update didatabase.
                                               </div>');

        //redirect
        redirect('product/');
    	}
    	
	}

	function hapus($id_product)
	{

		$id['id_product'] = $this->uri->segment(3);

		$this->db->where('id_product', $id_product);

		$query = $this->db->get('product');

		$row = $query->row();

		unlink("images/". $row->gambar);


		 $this->Model_product->hapus($id);

		 $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible"> data terhapus didatabase.
                                               </div>');

		redirect("product/");
		

	}

	function gallery_product()
	{
		$data = array(
			'title' => 'Gallery Product',
			"data_product" => $this->Model_product->get_all()
		);
		$this->load->view('gallery_product', $data);
	}

	function get_images()
	{

			

	}

}