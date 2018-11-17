<?php

class Admin_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function set_properti()
	{
		$this->load->helper('url');
		// $gambar = $_FILES['gambar']['name'];
		// if( $gambar = '' ) {} else {
		// 	$config['upload_path'] = './assets/admin/img_properti';
		// 	$config['allowed_types'] = 'jpg | jpeg | png';
		// 	$this->load->library('upload', $config);

			// if( !$this->upload->do_upload('gambar') ) {
			// 	echo "Download Gagal"; die();
			// } else {
			// 	$gambar = $this->upload->data('file_name');
			// }
		// }
		$data = array(
			'nama' => $this->input->post('nama'),
			'kategori' => $this->input->post('kategori'),
			'harga' => $this->input->post('harga'),
			'opsi' => $this->input->post('opsi'),
			'luas' => $this->input->post('luas'),
			'type' => $this->input->post('type'),
			'kamar_tidur' => $this->input->post('tidur'),
			'kamar_mandi' => $this->input->post('mandi'),
			'garasi' => $this->input->post('garasi'),
			'internet' => $this->input->post('internet'),
			'ac' => $this->input->post('ac'),
			'kondisi' => $this->input->post('kondisi'),
			'status' => 'Baru',
			'alamat' => $this->input->post('alamat'),
			'lokasi' => $this->input->post('lokasi')
		);

		return $this->db->insert('rumah', $data);
	}

}