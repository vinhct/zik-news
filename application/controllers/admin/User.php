<?php

Class User extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

    }

    function index()
    {
        $input = array();
        $list = $this->user_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/user/index';
        $this->load->view('admin/main', $this->data);
    }

    function check_username()
    {
        $username = $this->input->post('username');
        $where = array('username' => $username);
        //kiêm tra xem username đã tồn tại chưa
        if ($this->user_model->check_exists($where)) {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Tài khoản đã tồn tại');
            return false;
        }
        return true;
    }
    function add()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');

        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Tài khoản đăng nhập', 'required|callback_check_username');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
            $this->form_validation->set_rules('repassword', 'Nhập lại mật khẩu', 'matches[password]');
            $this->form_validation->set_rules('email', 'Email đăng nhập', 'required|valid_email');
            $this->form_validation->set_rules('address', 'Địa chỉ', 'required');
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'required|min_length[8]|numeric');

            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                //them vao csdl
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $email = $this->input->post('email');
                $address = $this->input->post('address');
                $phone = $this->input->post('phone');
                $data = array(
                    'username' => $username,
                    'password' => md5($password),
                    'email' => $email,
                    'address' => $address,
                    'phone' => $phone

                );
                if ($this->user_model->create($data)) {
                    //tạo ra nội dung thông báo

                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm dữ liệu thành công</label>');
                } else {
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('user'));
            }
        }
        $this->data['temp'] = 'admin/user/add';
        $this->load->view('admin/main', $this->data);
    }
    function edit()
    {

        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $this->load->library('form_validation');
        $this->load->helper('form');
        //lay thong cua quan trị viên
        $info = $this->user_model->get_info($id);
        $this->data['info'] = $info;
        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post()) {
            $this->form_validation->set_rules('email', 'Email đăng nhập', 'required|valid_email');
            $this->form_validation->set_rules('address', 'Địa chỉ', 'required');
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'required|min_length[8]|numeric');
            $password = $this->input->post('password');
            if ($password) {
                $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
                $this->form_validation->set_rules('repassword', 'Nhập lại mật khẩu', 'matches[password]');
            }
            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                //them vao csdl
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $email = $this->input->post('email');
                $address = $this->input->post('address');
                $phone = $this->input->post('phone');
                $data = array(
                    'username' => $username,
                    'email' => $email,
                    'address' => $address,
                    'phone' => $phone

                );
                if ($password) {
                    $data['password'] = md5($password);
                }
                if ($this->user_model->update($id,$data)) {
                    //tạo ra nội dung thông báo

                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật dữ liệu thành công</label>');
                } else {
                    $this->session->set_flashdata('message', 'Không cập nhật  được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('user'));
            }
        }
        $this->data['temp'] = 'admin/user/edit';
        $this->load->view('admin/main', $this->data);
    }
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->user_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại người dùng');
            redirect(admin_url('user'));
        }
        //thuc hiện xóa
        $this->user_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('user'));
    }
    /*
     * Ham chinh sua thong tin quan tri vien
     */


    function logout()
    {

        if ($this->session->userdata('user_adminnew_login')) {
            $this->session->unset_userdata('user_adminnew_login');
        }
        redirect(admin_url('login'));
    }

}