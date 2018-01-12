<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adv extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('adv_model');

    }

   function  adv_left(){
       $list = $this->adv_model->get_adv_left();
       $this->data['list'] = $list;
       $this->data['temp'] = 'site/home/index';
       $this->load->view('site/main-home', $this->data);

   }
    function  adv_right(){
        $list = $this->adv_model->get_adv_right();
        $this->data['list'] = $list;
        $this->data['temp'] = 'site/home/index';
        $this->load->view('site/main-home', $this->data);
    }
}