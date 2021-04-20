<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Country_model');
	}

	
	public function index()
	{	
		$data['countrys'] = $this->Country_model->getAll();
		// $this->load->view('2021_theme_1/about',$data);	
		$this->load->view('2021_theme_1/contact_us',$data);	

	}
}