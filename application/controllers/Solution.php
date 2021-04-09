<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solution extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Company_model');
		$this->load->model('Category_model');
		$this->load->model('Country_model');
		$this->load->model('Products_model');
		$this->load->model('Products_picture_model');		
		$this->load->model('News_model');
		$this->load->model('Counter_model');
		$this->load->model('Brand_model');
		$this->load->model('Promotion_model');
		$this->load->model('Image_manage_model');

	}

	
	public function index()
	{		


		$data['countrys'] = $this->Country_model->getAll();


		// $this->load->view('2021_theme_1/about',$data);	
		$this->load->view('2021_theme_1/solution',$data);	

	}
}