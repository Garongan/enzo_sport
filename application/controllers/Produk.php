<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$this->load->model('produk_model');
		$produk = $this->produk_model->get_produk();
		$data['produk'] = $produk;
		$this->load->view('produk', $data);
	}
}
