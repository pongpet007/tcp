<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Country_model');
	}

	
	public function index3()
	{	
		// $data = array();
		// $this->load->view('2021_theme_1/index2',$data);	

	}
	public function index()
	{	
		$urlhome = $this->uri->segment(1);
		
		if ($urlhome!="") {
			
		}else{
			redirect($this->session->userdata('site_lang_name').'/Home');
		}
		// $ipAddress = $_SERVER['REMOTE_ADDR'];
		// if(($this->session->userdata('viewed')==''))
		// {

		// 	$params = array();
		// 	$params['ip'] = $ipAddress;
		// 	$params['dt'] = date('Y-m-d H:i:s');

		// 	$this->db->insert('counter',$params);

		// 	$this->session->set_userdata('viewed',1);
		// }

		$lang = $this->session->userdata('site_lang_name');
		$data["lang"] = $lang;
		// print_r($lang);
		// exit();

		$data['countrys'] = $this->Country_model->getAll();
		// $data = array();

		$this->load->view('2021_theme_1/index',$data);	

	}
	
	public function index2(){
		$this->load->view('theme_2020_v1/commingsoon');
	}

	public function stat()
	{
		
		$data["categorys"] = $this->Category_model->getAll();
		$data['lang'] = $this->session->userdata('site_lang');

		if ($data['lang']=221) {
			$data['language'] = "เปลี่ยนภาษา";
		}else{
			$data['language'] = "Change Language";
		}
		$keyword = $this->input->post('keyword');
		$location = $this->input->post('location');
		$search_type = $this->input->post('search_type');
		$order = $this->input->get('order');
		$showitem = $this->input->get('showitem');
		$display = $this->input->get('display');
		$group = $this->input->get('group');
		$data['order'] = $order;
		$data['showitem'] = $showitem;
		$data['display'] = empty($display)?'list':$display;
		$search['keyword'] = $keyword;
		$search['location'] = $location;
		$search['search_type'] = $search_type;
		$data['links'] = '';
		$data['search'] = $search;
		////////////////////// Theme ///////////////////////////////////
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;

		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;

		////////////////////// Menu ///////////////////////////////////
		$menus = $this->Menu_model->getMain();		
		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();

		$mName = array('Jan','Feb','Mar','Apr',
				   'May','Jun','Jul','Aug',
				   'Sep','Oct','Nov','Dec');
		$today = date('m-Y');
		list($cm,$cy) = explode('-',$today);
		if(!empty($_REQUEST['m']))
			$m = $_REQUEST['m'];
		else
			$m=$cm;	
		
		if(!empty($_REQUEST['y']))
			$y = $_REQUEST['y'];
		else
			$y=$cy;	
			
		if(empty($_REQUEST['display']))
			$display = "month";
		else
			$display = $_REQUEST['display'];
		if($display=="year")
		{
			$sql ="select year(dt) as y ,count(ip) as c 
				from counter		
				group by year(dt)
				";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		if($display=="month")
		{
			$sql="select month(dt) as m ,count(ip) as c 
			from counter 
			where year(dt) = $y
			group by month(dt)
			";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		if($display=="day")
		{
			$sql = "
				select day(dt) as d ,count(ip) as c 
				from counter  
				where year(dt)= $y and month(dt)= $m
				group by day(dt)
				";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		$data['table'] = $table; 
		$data['y'] = $y;
		$data['m'] = $m;
		$data['display'] = $display;
		$data['mName'] = $mName;
		$data['counter'] = $this->Counter_model->count();

		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);

		}
		
		$data['cartarr'] = $cartarr;
		
		$data['pages'] = "index/stat";
		$this->load->view($theme_path.'/stat',$data);		
	}
	
	public function subscription()
	{
		$email = trim($this->input->get("email"));

		$sql = "select count(*) as ct from subscription where email =? ";
		$result = $this->db->query($sql,array($email));

		$row = $result->row(0);
		if($row->ct > 0){ 
			echo "already exists";	
		}
		else
		{
			$this->db->insert("subscription",array('email'=>$email,'cdate'=>date('Y-m-d h:i:s')));
			echo "Save complete";
		}
		
	}

}
