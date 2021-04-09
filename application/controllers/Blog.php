<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		
		$this->load->model('Company_model');
		$this->load->model('Category_model');	
		$this->load->model('Country_model');	
		$this->load->model('Config_model');
		$this->load->model('Image_manage_model');
		$this->load->model('Blog_model');			
		$this->load->model('Counter_model');
		$this->load->model('Products_model');
		$this->load->model('cms/Menu_model');

	}

	public function index()
	{

		// $data['counter'] = $this->Counter_model->count();

		// $tag = $this->input->get('tag');

		// $company = $this->Company_model->getOne(1);		
		// $data['companyData'] = $company;
		// $data['meta_title'] = $company->meta_title;
		// $data['meta_keyword'] = $company->meta_keyword;
		// $data['meta_description'] = $company->meta_description;

		// $theme_path = $company->theme_path;
		// $data['theme_path'] = $theme_path;
		// $data["theme_assets_path"] = $company->theme_assets_path;

		// $data['site_lang_name'] = $this->session->userdata('site_lang_name');
		
		// $menus = $this->Menu_model->getMain();

		// foreach ($menus as $menu) {
		// 	$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		// }
		// $data['menus'] = $menus ;		
		// $data['countrys'] = $this->Country_model->getAll();

		// $search = array();

		// ////////// Pagination ////////////////////////
		// $this->load->config('pagination',TRUE);		
		// $config = $this->config->item('pagination');	

		// $search['tag'] = $tag;

		// $config["base_url"] = base_url() . "Blog/index/";
		// $config["total_rows"] = $this->Blog_model->record_count($search);
		
		// $image_group_blog_id = 2;
		// if ($company->blog_type == 1 or $company->blog_type == 6) {
		// 	$config["per_page"] = 9;
		// }
		// if ($company->blog_type == 2 or $company->blog_type == 7) {
		// 	$config["per_page"] = 12;
		// }
		// if ($company->blog_type == 3 or $company->blog_type == 8) {
		// 	$config["per_page"] = 15;
		// }
		// if ($company->blog_type == 4 or $company->blog_type == 5 or $company->blog_type == 9 or $company->blog_type == 10) {
			
		// 	$config["per_page"] = 6;

		// 	$blogs_pop = $this->Blog_model->getAllPopular();
		// 	foreach ($blogs_pop as $blogs_pop_new) { 
		// 		$blogs_pop_new->images = $this->Image_manage_model->getinuseProduct($image_group_blog_id,$blogs_pop_new->blog_id);
		// 	}
		// 	$data['blogs_pop'] = $blogs_pop;

		// 	$blog_tags = $this->Blog_model->getTags();
		// 	$blog_tags_new = array();
		// 	foreach ($blog_tags as $tag) {
		// 		 if(strstr($tag->tags, ',')){
		// 		 	$keywords = explode(',', $tag->tags);
		// 		 	foreach ($keywords as $keyword) {
		// 		 		$blog_tags_new[] = trim($keyword);
		// 		 	}
		// 		 }
		// 		 else{
		// 		 	$keyword = $tag->tags;
		// 		 	$blog_tags_new[] = $keyword;
		// 		 }
		// 	}
		// 	$data['blog_tags'] = array_unique($blog_tags_new);
		// }
		
		// $config["uri_segment"] = 3;
		// $config['reuse_query_string'] = true;			
		// $this->pagination->initialize($config);		
		// $data["links"] = $this->pagination->create_links();
		// $data['total_rows'] =  $config["total_rows"];
		// $start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;			

		// $blogs = $this->Blog_model->getAll($config["per_page"],$start,$search);
		
		// foreach ($blogs as $blogsnew) { 
		// 	$blogsnew->images = $this->Image_manage_model->getinuseProduct($image_group_blog_id,$blogsnew->blog_id);
		// }
		// $data['blogs'] = $blogs;

		// /////////////////////// get products /////////////////////////////
		
		// $cartarr = array();
		// foreach ($this->cart->contents() as $carts) {
		// 	$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);
		// }
		// $data['cartarr'] = $cartarr;
		$data['countrys'] = $this->Country_model->getAll();

		$this->load->view('2021_theme_1/blog',$data);

	}
	

	public function detail($langu="",$blog_id){

		$data['site_lang_name'] = $this->session->userdata('site_lang_name');
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
 		////////////////////// Theme ///////////////////////////////////
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;

		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;
 		
 		$menus = $this->Menu_model->getMain();
		// echo $this->db->last_query();
		// exit();

		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();

		$blog = $this->Blog_model->getOne($blog_id);
		$image_group_blog_id = 2;
			if (isset($blog)) {
				$blog->images = $this->Image_manage_model->getinuseProduct($image_group_blog_id,$blog->blog_id);
			}
				
		$data['blog'] = $blog;

		//echo $this->db->last_query();
		//exit();
		##################################################
		
		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);
		}
		$data['cartarr'] = $cartarr;

		$blog_tags = $this->Blog_model->getTags();
			$blog_tags_new = array();
			foreach ($blog_tags as $tag) {
				 if(strstr($tag->tags, ',')){
				 	$keywords = explode(',', $tag->tags);
				 	foreach ($keywords as $keyword) {
				 		$blog_tags_new[] = trim($keyword);
				 	}
				 }
				 else{
				 	$keyword = $tag->tags;
				 	$blog_tags_new[] = $keyword;
				 }
			}
			$data['blog_tags'] = array_unique($blog_tags_new);
			
		$this->load->view($theme_path.'/blog_detail',$data);

	}


}