<?php

Class Login extends MY_controller
{
    function index()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        if ($this->input->post()) {
            $this->form_validation->set_rules('login', 'login', 'callback_check_login');
            if ($this->form_validation->run()) {
                $user = $this->_get_user_info();
                $this->session->set_userdata('user_adminnew_login', $user->id);
                redirect(base_url('admin'));
            }
        }
        $this->load->view('admin/login/index');
    }
    private function _get_user_info()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        $this->load->model('user_model');
        $where = array('username' => $username, 'password' => $password);
        $user = $this->user_model->get_info_rule($where);
        return $user;
    }
    /*
     * Kiem tra username va password co chinh xac khong
     */
    function check_login()
    {
        $user = $this->_get_user_info();
        if ($user) {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Không đăng nhập thành công');
        return false;
    }

}