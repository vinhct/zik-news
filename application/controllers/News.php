<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('news_model');
	$this->load->model('Rate_model');
    }


    function detail()
    {
        $last = end($this->uri->segments);
        if(preg_match_all('/\d+/', $last, $numbers))
        $id = end($numbers[0]);
        $info = $this->news_model->get_info($id);
        $this->data['info'] = $info;
        $info_rate = $this->Rate_model->get_info_rate_by_newsID($id);
        $result_rate = $this->Rate_model->reportRate($id);
        $this->data['info'] = $info;
        $this->data['info_rate'] = $info_rate;
        $this->data['result_rate'] = $result_rate;
        if(!empty($info)){
	$list = $this->news_model->get_list_news_other($id,$info->catId);
        $this->data['list'] = $list;
	 $this->data['meta_title'] = $info->titlePage;
        $this->data['meta_keyword'] = $info->keyword;
        $this->data['meta_description'] = $info->metaDescription;
	}
	else{
		 $this->data['list'] = null;
		$this->data['meta_title'] = "";
            $this->data['meta_keyword'] ="";
            $this->data['meta_description'] ="";
	}
        $this->data['temp'] = 'site/news/index';
        $this->load->view('site/main-cat', $this->data);
    }
}
