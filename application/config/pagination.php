<?php

// $config["base_url"] = base_url() . "product/index";
// $config["total_rows"] = $this->Product_model->record_count($search);
// $config["per_page"] = 20;
// $config["uri_segment"] = 3;
// $config['reuse_query_string'] = true;
//$config['suffix'] = "?keyword=$keyword&cat_id=$cat_id";
//$config['page_query_string'] = TRUE;

$config['full_tag_open'] = '<ul class="custom-pagination pagination float-right">';
$config['full_tag_close'] = '</ul>';

$config['first_link'] = 'First';
$config['first_tag_open'] = '<li class="page-item"><div class="page-link">';
$config['first_tag_close'] = '</div></li>';

$config['last_link'] = 'Last';
$config['last_tag_open'] = '<li class="page-item"><div class="page-link">';
$config['last_tag_close'] = '</div></li>';

$config['next_link'] = '&gt;';
$config['next_tag_open'] = '<li class="page-item"><div class="page-link">';
$config['next_tag_close'] = '</div></li>';

$config['prev_link'] = '&lt;';
$config['prev_tag_open'] = '<li class="page-item"><div class="page-link">';
$config['prev_tag_close'] = '</div></li>';

$config['cur_tag_open'] = '<li class="active page-item"><a class="page-link" href="#" >';
$config['cur_tag_close'] = '</a></li>';

$config['num_tag_open'] = '<li class="page-item"><div class="page-link">';
$config['num_tag_close'] = '</div></li>';