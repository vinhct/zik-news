<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('news_model');

    }


    function category()
    {

        $last = end($this->uri->segments);
        if(preg_match_all('/\d+/', $last, $numbers))
            $id = end($numbers[0]);
        $info = $this->category_model->get_info($id);
        $this->data['catetitle'] = $info->catname;
        $list = $this->news_model->get_list_news_category($id);
        $this->data['list'] = $list;
        //seo
        $this->data['meta_title'] = $info->titlePage;
        $this->data['meta_keyword'] = $info->keyword;
        $this->data['meta_description'] = $info->metaDescription;
        $count = $this->news_model->get_count_news_category($id);
        $this->data['count'] = $count;
        $this->data['temp'] = 'site/category/index';
        $this->load->view('site/main-cat', $this->data);
    }
}