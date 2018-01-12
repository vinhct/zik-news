<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bonusvip extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('bonusvip_model');
        $this->load->model('system_model');
    }
    function index(){
        $listsys = $this->system_model->get_list();
        foreach($listsys as $item)
        {
            $this->data['meta_title'] = "Thưởng vip";
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
        $list = $this->bonusvip_model->get_list_bonusvip();
        $this->data['list'] = $list['rows'];

        $this->data['temp'] = 'site/bonusvip/index';
        $this->load->view('site/main', $this->data);

    }
    function search(){

    }
}