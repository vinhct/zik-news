<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class search extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('news_model');
    }


    function index()
    {

        //seo
        $this->data['meta_title'] = "Tìm kiếm";
        $this->data['meta_keyword'] = "Tìm kiếm";
        $this->data['meta_description'] = "Tìm kiếm";
        $count = $this->news_model->getCountSearchNews();
        $this->data['count'] = $count;
        $list = $this->news_model->searchNews();
        $this->data['list'] = $list['rows'];
        $this->data['temp'] = 'site/search/index';
        $this->load->view('site/main-cat', $this->data);
    }
}