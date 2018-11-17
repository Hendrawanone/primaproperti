<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function properti()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('luas', 'Luas', 'required');
		$this->form_validation->set_rules('tidur', 'Kamar Tidur', 'required');
		$this->form_validation->set_rules('mandi', 'Kamar Mandi', 'required');
		$this->form_validation->set_rules('garasi', 'Garasi', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('opsi', 'Opsi', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		$this->form_validation->set_rules('ac', 'AC', 'required');
		$this->form_validation->set_rules('internet', 'Internet', 'required');

		if( $this->form_validation->run() === FALSE ) {
			$this->load->view('admin/pages/forms/properti');
		} else {
			$this->admin_model->set_properti();
			redirect('admin/properti');
		}

	}

	public function agent()
	{
		$this->load->view('admin/pages/forms/agent');
	}

	public function iklan()
	{
		$this->load->view('admin/pages/forms/iklan');
	}

	public function tabel_properti()
	{
		$this->load->view('admin/pages/tables/tabel_properti');
	}

	public function tabel_agent()
	{
		$this->load->view('admin/pages/tables/tabel_agent');
	}

	public function tabel_iklan()
	{
		$this->load->view('admin/pages/tables/tabel_iklan');
	}

}