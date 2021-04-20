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

		// $data['loadmore'] = 
		$data['countrys'] = $this->Country_model->getAll();


		$start = 0;

		$limit = 8;

		$data['products'] = $this->Products_model->getMore($start,$limit);

		// print_r($this->db->last_query());

		// print_r($data['products']);
		// exit();

		// $this->load->view('2021_theme_1/about',$data);	
		$this->load->view('2021_theme_1/solution',$data);	

	}

	public function loadmore($start = '')
	{	
		// echo $count;
		$lang = $this->session->userdata('site_lang_name');
		$link = base_url($lang.'/Products/detail/1');
		$link_img = base_url('assets_2021_theme_1/img/about.jpg');

		$start = $start ;

		$limit = 8;

		$products = $this->Products_model->getMore($start,$limit);
		// echo $this->db->last_query();
		
		foreach ($products as $product) {
							

		echo '<div class="col-md-3 col-6 space-product-solution">';
		echo '	<div class="row">';
		echo '  	<div class="col-md-12 product">';
		echo '			<a href="'.$link.'" >';
		echo '				<img src="'.$link_img.'" style="width: 100%">';
		echo '			</a>';
		echo '			<a href="'.$link.'">';
		echo '				<div class="detail-product-short">';
		echo '					'.$product->name.'';
		echo '				</div>';
		echo '			</a>';
		echo '      </div>';
		echo '	</div>';
		echo '</div>';

		}	

		


	}
}