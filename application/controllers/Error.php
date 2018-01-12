<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends MY_Controller
{

    function index()
    {
        $this->load->view('errors/html/error_404', $this->data);
    }
}