<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->model('system_model');
       $this->load->model('Rate_model');
    }
    public function index()
    {
        $list = $this->system_model->get_list();
        foreach($list as $item)
        {
            $this->data['meta_title'] = $item->titlePage;
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
        $list = $this->news_model->get_list_news_home();
        $this->data['list'] = $list;
        $count = $this->news_model->get_count_news_home();
        $this->data['count'] = $count;
        $this->data['temp'] = 'site/home/index';
        $this->load->view('site/main-home', $this->data);
    }
    function infouser(){

        $nickname = $this->input->post('name');
        $vin = $this->input->post('vin');
        $avatar = $this->input->post('ava');
        $vippoint = $this->input->post('vip');
        $session_data[]= array("nickname"=>$nickname,'vin'=>$vin,"avatar"=>$avatar,"vippoint"=>$vippoint);
        $this->session->set_userdata("infouser", $session_data);


    }
    function logout()
    {

        if ($this->session->userdata('infouser')) {
            $this->session->unset_userdata('infouser');
        }
        redirect(base_url(''));
    }
	 function updateRate(){
             $therate = $_POST['rate'];
             $thepost = $_POST['id'];
             $count = $this->Rate_model->get_count_rate_by_newsID($thepost);
             if($count==0){
                 $data = array(
                    'news_id' => $thepost,
                    'rating' => $therate,
                    'count'=>1,
                );
                $this->Rate_model->create($data);
           }
           else{
             $info = $this->Rate_model->get_info_rate_by_newsID($thepost);
             $count1=(int)$info[0]->count+1;
             $data = array(
                    'news_id' => $thepost,
                    'rating' => $therate,
                    'count' => $count1,
                );
              $this->Rate_model->update($info[0]->id,$data);
           }
    }
}
