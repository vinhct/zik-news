<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('news_model');
        $this->load->model('system_model');
    }


    function index()
    {
        $listvip = $this->news_model->get_list_news_polices();
        $this->data['listvip'] = $listvip;
        $list = $this->system_model->get_list();
  	if(!empty($list)){
        	foreach($list as $item)
       		 {
        	    $this->data['meta_title'] = "Chính sách";
           	    $this->data['meta_keyword'] = $item->keyword;
            	   $this->data['meta_description'] = $item->metaDescription;
       		 }
	}
	else{
            $this->data['meta_title'] = "Chính sách";
             $this->data['meta_keyword'] = "Chính sách";
                $this->data['meta_description'] = "Chính sách";
        }
        $this->data['temp'] = 'site/policy/index';
        $this->load->view('site/main', $this->data);
	}

   }
