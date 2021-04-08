<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	
	public function index()
	{	
		$data = array();
		// $this->load->view('2021_theme_1/about',$data);	
		$this->load->view('2021_theme_1/about-2',$data);	

	}
}