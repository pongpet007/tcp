<?php

class Products_model extends CI_Model{

	public function getAll($limit, $start,$search = array() , $orderby='')
	{
	
		// $this->db->select('products.*,products_language.*,cat_name');
		$this->db->from('products');
		$this->db->join('products_language','products.pro_id = products_language.pro_id ','left');
		$this->db->join('company_category','products.cat_id=company_category.cat_id','left');
		$this->db->join('company_category_language','company_category.cat_id = company_category_language.cat_id ','left');
		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->join('product_tag','product_tag.pro_id=products.pro_id','left');
			$this->db->join('product_tag_data','product_tag_data.pro_tags_id=product_tag.pro_tags_id','left');
		}

		if(isset($search['brand_id']) and count($search['brand_id']) > 0 ){
			$this->db->where_in('products.brand_id', $search['brand_id']);					
		}

		if(isset($search['keyword'])){
			$this->db->like('products_language.pro_name', $search['keyword']);		
		}

		if(isset($search['cat_id']) and count($search['cat_id']) > 0 ){
			$this->db->where_in('products.cat_id', $search['cat_id']);					
		}

		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->where("product_tag_data.tags_name like '%$search[tag]%' " );	
		}

		if(isset($search['promotion_id']) and count($search['promotion_id']) > 0 ){
			$this->db->where_in('promotion_id', $search['promotion_id']);					
		}

		if(isset($search['show_index']) and count($search['show_index']) > 0 ){
			$this->db->where_in('show_index', $search['show_index']);					
		}		
		
		if($orderby){
			$this->db->order_by($orderby);
		}	
		$this->db->group_by('products.pro_id'); 
		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));
			$this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('products_language.country_id', '221');
			$this->db->where('company_category_language.country_id', '221');
		}

		$this->db->limit($limit, $start);	
		$query = $this->db->get();
		return $query->result();
	}


	public function getAll2($limit, $start,$search = array() , $orderby='')
	{
	
		// $this->db->select('products.*,products_language.*,cat_name');
		$this->db->from('products')
		 		 ->join('products_language','products.pro_id = products_language.pro_id ','left')
				 ->join('company_category','products.cat_id=company_category.cat_id','left')
				 ->join('company_category_language','company_category.cat_id = company_category_language.cat_id ','left');

		if(isset($search['brand_id']) and count($search['brand_id']) > 0 ){
			$this->db->where_in('products.brand_id', $search['brand_id']);					
		}

		if(isset($search['keyword'])){
			$this->db->like('products_language.pro_name', $search['keyword']);		
		}

		if(isset($search['cat_id'])){
			$this->db->where_in('products.cat_id', $search['cat_id']);					
		}

		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->where("products_language.tags like '%$search[tag]%' " );	
		}

		if(isset($search['promotion_id']) and count($search['promotion_id']) > 0 ){
			$this->db->where_in('promotion_id', $search['promotion_id']);					
		}

		if(isset($search['show_index']) and count($search['show_index']) > 0 ){
			$this->db->where_in('show_index', $search['show_index']);					
		}		
		
		if($orderby){
			$this->db->order_by($orderby);
		}	

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));
			$this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('products_language.country_id', '221');
			$this->db->where('company_category_language.country_id', '221');
		}

		$this->db->limit($limit, $start);	
		$query = $this->db->get();
		return $query->result();
	}

	public function getAllcheckdata($arrs_new,$country_id){
		
		$this->db->from('product_tag_data')
				 ->join("product_tag",'product_tag.pro_tags_id=product_tag_data.pro_tags_id' ,'left');
		$this->db->where('product_tag_data.country_id',$country_id);
		$this->db->where('product_tag_data.tags_name', $arrs_new);	
		$query = $this->db->get();
		return $query->result();
	}

	public function record_count($search = array())
	{
		$this->db->from('products');
		$this->db->join('products_language','products.pro_id = products_language.pro_id ','left');
		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->join('product_tag','product_tag.pro_id=products.pro_id','left');
			$this->db->join('product_tag_data','product_tag_data.pro_tags_id=product_tag.pro_tags_id','left');
		}
		if(isset($search['keyword'])){
			$this->db->like('pro_name', $search['keyword']);
		}

		if(isset($search['brand_id']) and count($search['brand_id']) > 0 ){
			$this->db->where_in('products.brand_id', $search['brand_id']);					
		}

		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->where(" ( product_tag_data.tags_name like '%$search[tag]%' ) " );	
		}

		if(isset($search['cat_id']) and count($search['cat_id']) > 0 ){
			$this->db->where_in('cat_id', $search['cat_id']);
		}
		if(isset($search['promotion_id']) and count($search['promotion_id']) > 0 ){
			$this->db->where_in('promotion_id', $search['promotion_id']);
		}

		$this->db->where('show_index', 2);

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));		
		}
		else{
			$this->db->where('products_language.country_id', '221');
		}
		
		return $this->db->count_all_results();
		
	}

    public function getOne($id){
		
		$this->db->from('products')
				 ->join('products_language','products.pro_id=products_language.pro_id','left');
				 

		$this->db->where('products.pro_id',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));
			// $this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
			// $this->db->where('promotion_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('products_language.country_id', '221');
			// $this->db->where('company_category_language.country_id', '221');			
			// $this->db->where('promotion_language.country_id', '221');			
		}

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

	public function getTags()
	{
	
		$this->db->select('tags');
		$this->db->from('products')
				  ->join('products_language','products.pro_id=products_language.pro_id','left');		
		$this->db->order_by('products.pro_id','RANDOM');
		$this->db->where('products.is_active',1);	
		$this->db->where(" products_language.tags <> '' ");

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('products_language.country_id', '221');		
		}

		$query = $this->db->get();		
		return $query->result();		
	}

	public function getTagsnew()
	{

		$this->db->from('product_tag_data');
		
		if($this->session->userdata('site_lang')){
			$this->db->where('country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('country_id', '221');		
		}

		$query = $this->db->get();		
		return $query->result();		
	}


}
