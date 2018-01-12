<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guide extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('news_model');
        $this->load->model('system_model');
    }


    function listguide()
    {

        $last = end($this->uri->segments);
        if(preg_match_all('/\d+/', $last, $numbers))
            $id = end($numbers[0]);
        $info = $this->category_model->get_info($id);
        $this->data['catetitle'] = $info->catname;
        $list = $this->news_model->get_list_news_category($id);

        $listsys = $this->system_model->get_list();
        foreach($listsys as $item)
        {
            $this->data['meta_title'] = "Hướng dẫn";
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
        $this->data['list'] = $list;
        $this->data['temp'] = 'site/guide/index';
        $this->load->view('site/main-guide', $this->data);
    }
}