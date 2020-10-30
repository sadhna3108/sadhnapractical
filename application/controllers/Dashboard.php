<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('home');
		$this->load->view('includes/footer');
	}

	public function Add_form()
	{
		$this->load->view('includes/header');
		$this->load->view('add_form');
		$this->load->view('includes/footer');
	}
	



}
