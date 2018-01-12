<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('system_model');

    }


    function index()
    {
        $listsys = $this->system_model->get_list();
        foreach ($listsys as $item) {
            $this->data['meta_title'] = $item->titlePage;
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
        if ($this->session->userdata('infouser') != null) {
            redirect(base_url(''));
        } else {
            $this->data['temp'] = 'site/login/index';
            $this->load->view('site/main-login', $this->data);
        }


    }
}