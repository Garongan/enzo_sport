<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carapemesanan extends CI_Controller {

	public function index()
	{
		$this->load->model('pesan_model');
		$data_pesan['pesan'] = $this->pesan_model->get_current();
		$this->load->view('carapemesanan', $data_pesan);
	}
	public function update_pesan()
	{
		# code...
		$id = $this->input->post('id');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');

		$this->load->helper('url');
		$this->load->model('pesan_model');
		$this->pesan_model->update_pesan($id, $jumlah, $harga);

		redirect(base_url('index.php/carapemesanan'), 'refresh');
	}
	public function delete_pesan()
	{
		# code...
		$id = $this->input->post('id');

		$this->load->helper('url');
		$this->load->model('pesan_model');
		$this->pesan_model->delete_pesan($id);

		redirect(base_url('index.php/carapemesanan'), 'refresh');
	}
	public function tambah_pesan()
	{
		# code...
		$id_produk = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$harga_produk = $this->input->post('harga_produk');
		$jumlah_produk = $this->input->post('jumlah_produk');
		$total_produk = $this->input->post('total_produk');

		$this->load->helper('url');
		$this->load->model('pesan_model');
		$this->pesan_model->tambah_pesan($id_produk, $nama_produk, $harga_produk, $jumlah_produk, $total_produk);

		redirect(base_url('index.php/carapemesanan'), 'refresh');
	}
}
