<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Victory extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('victory_model');
        $this->load->model('system_model');

    }


    function index()
    {
        $str = "";
        $listmonth = array();
        $lists = array();
        $input = array();

       // $input['order'] = array('month', 'ASC');
        $list = $this->victory_model->get_list_victory();
        if(!empty($list)){
	foreach($list as $row){
            array_push($lists,$row->month);
        }
	}
        for ($i = 1; $i <= 12; $i++) {
          array_push($listmonth,$i);
        }
        $listsys = $this->system_model->get_list();
        foreach($listsys as $item)
        {
            $this->data['meta_title'] = "Vinh danh";
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
        $result = array_diff($listmonth, $lists);
        $this->data['result'] = $result;
        $this->data['list'] = $list;
        $this->data['temp'] = 'site/victory/index';
        $this->load->view('site/main', $this->data);
    }

    function detail()
    {
        $last = end($this->uri->segments);
        if(preg_match_all('/\d+/', $last, $numbers))
            $id = end($numbers[0]);
        $info = $this->victory_model->get_info($id);
        $listsys = $this->system_model->get_list();

        $this->data['info'] = $info;
        $this->data['meta_title'] =$info->titlepage;
        $this->data['meta_keyword'] = $info->keyword;
        $this->data['meta_description'] = $info->metadescription;
        $list = $this->victory_model->get_list_victory_other($id);
        $this->data['list'] = $list;

        $this->data['temp'] = 'site/victory/detail';
        $this->load->view('site/main-home', $this->data);

    }
}
