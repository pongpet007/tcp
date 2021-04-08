<?php

class Blog_model extends CI_Model{

	public function getAll($limit, $start,$search=array())
	{
		$this->db->from('blog')
				 ->join('blog_language','blog.blog_id =  blog_language.blog_id','left');

		$this->db->where('is_active',1);
		$this->db->order_by('pos asc');	

		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->where("blog_language.tags like '%$search[tag]%' " );	
		}

		$this->db->limit($limit, $start);	
		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}

		$query = $this->db->get();

		return $query->result();

	}

	public function getTags()
	{
	
		$this->db->select('tags');
		$this->db->from('blog')
				 ->join('blog_language','blog.blog_id =  blog_language.blog_id','left');	
		$this->db->group_by('blog.blog_id');
		$this->db->where('is_active',1);	
		$this->db->where(" blog_language.tags <> '' ");

		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}

		$query = $this->db->get();		
		return $query->result();		
	}

	public function getAllPopular()
	{
		$this->db->select('COUNT(*) TotalCount, blog.* , blog_language.*');

		$this->db->from('blog')
				 ->join('blog_language','blog.blog_id =  blog_language.blog_id','left')
				 ->join('counter_blog','counter_blog.blog_id =  blog.blog_id','left');

		$this->db->where('is_active',1);
		$this->db->group_by('blog.blog_id');
		$this->db->order_by('TotalCount desc');		
		
		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}
		$this->db->limit(6, 0);
		$query = $this->db->get();

		return $query->result();

	}

	public function record_count($search = array())
	{	
		$this->db->from('blog')
				 ->join('blog_language','blog.blog_id =  blog_language.blog_id','left');

		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->where("blog_language.tags like '%$search[tag]%' " );	
		}		 
		
		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}
		
		$this->db->where('is_active',1);
			
		return $this->db->count_all_results();
	}
	
    public function getOne($id){
		
		$this->db->from('blog')
				 ->join('blog_language','blog.blog_id =  blog_language.blog_id','left');	
		$this->db->where('blog.blog_id',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
