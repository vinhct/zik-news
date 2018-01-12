<?php

Class Adv extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('adv_model');

    }

    function index()
    {
        $input = array();
        $list = $this->adv_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/adv/index';
        $this->load->view('admin/main', $this->data);
    }

    function add()
    {
        if (isset($_POST['addnews'])) {
            $file_name = $_FILES['images']['name'];
            $file_size = $_FILES['images']['size'];
            $file_tmp = $_FILES['images']['tmp_name'];
            $file_ext = strtolower(end(explode('.', $_FILES['images']['name'])));
            $expensions = array("jpeg", "jpg", "png");
            if (in_array($file_ext, $expensions) === false) {
                $this->session->set_flashdata('message', 'Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.');
            }
            if ($file_size > 2097152) {
                $this->session->set_flashdata('message', 'Kích cỡ file nên là 2 MB');
            }
            if (empty($errors) == true) {
                if ($this->input->post('position') == 0)
                    move_uploaded_file($file_tmp, "public/uploads/adv/left/" . $file_name);
                else
                    move_uploaded_file($file_tmp, "public/uploads/adv/right/" . $file_name);
            }
            $data = array(
                'title' => $this->input->post('title'),
                'link' => $this->input->post('link'),
                'position' => $this->input->post('position'),
                'orderno' => $this->input->post('orderno'),
                'images' => $_FILES['images']['name'],
                'status' => $this->input->post('status')

            );
            if ($this->adv_model->create($data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm mới thành công</label>');
                redirect(admin_url('adv'));
            } else {
                $this->session->set_flashdata('message', 'Thêm mới không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/adv/add';
        $this->load->view('admin/main', $this->data);
    }

    function edit()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $info = $this->adv_model->get_info($id);
        $this->data['info'] = $info;

        if (isset($_POST['addnews'])) {
            $file_name = $_FILES['images']['name'];
            $file_size = $_FILES['images']['size'];
            $file_tmp = $_FILES['images']['tmp_name'];
            $file_ext = strtolower(end(explode('.', $_FILES['images']['name'])));
            $expensions = array("jpeg", "jpg", "png");
            if (in_array($file_ext, $expensions) === false) {
                $this->session->set_flashdata('message', 'Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.');
            }
            if ($file_size > 2097152) {
                $this->session->set_flashdata('message', 'Kích cỡ file nên là 2 MB');
            }
            if ($_FILES['images']['name'] != "") {
                if ($this->input->post('position') == 0)
                    move_uploaded_file($file_tmp, "public/uploads/adv/left/" . $file_name);
                else
                    move_uploaded_file($file_tmp, "public/uploads/adv/right/" . $file_name);
                $data = array(
                    'title' => $this->input->post('title'),
                    'link' => $this->input->post('link'),
                    'position' => $this->input->post('position'),
                    'orderno' => $this->input->post('orderno'),
                    'images' => $_FILES['images']['name'],
                'status' => $this->input->post('status')

                );
            } else {
                $data = array(
                    'title' => $this->input->post('title'),
                    'link' => $this->input->post('link'),
                    'position' => $this->input->post('position'),
                    'orderno' => $this->input->post('orderno'),
                    'images' => $this->input->post('imagevalue'),
 'status' => $this->input->post('status')

                );
            }
            if ($this->adv_model->update($id, $data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật thành công</label>');
                redirect(admin_url('adv'));
            } else {
                $this->session->set_flashdata('message', 'Cập nhật không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/adv/edit';
        $this->load->view('admin/main', $this->data);
    }

    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->adv_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại quảng cáo');
            redirect(admin_url('faq'));
        }
        //thuc hiện xóa
        $this->adv_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('adv'));
    }
}