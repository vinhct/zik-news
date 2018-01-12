<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('system_model');
    }


    function index()
    {
        $input = array();
        $list = $this->system_model->get_list($input);
        $this->data['list'] = $list;
        $listsys = $this->system_model->get_list();
        foreach($listsys as $item)
        {
            $this->data['meta_title'] = "Liên hệ";
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
        $this->data['temp'] = 'site/contact/index';
        $this->load->view('site/main', $this->data);
    }
}