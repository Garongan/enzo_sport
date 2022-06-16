<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('home_model');
		$jersey = $this->home_model->get_jersey();
		$data['jersey'] = $jersey;
		$this->load->view('home', $data);
	}
}
