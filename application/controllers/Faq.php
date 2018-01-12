<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('faq_model');
    }


    function index()
    {
        $input = array();
        $list = $this->faq_model->get_list($input);
        $this->data['list'] = $list;
        $listsys = $this->system_model->get_list();
        foreach($listsys as $item)
        {
            $this->data['meta_title'] = "Hỏi và đáp";
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
        $this->data['temp'] = 'site/faq/index';
        $this->load->view('site/main', $this->data);
    }
}