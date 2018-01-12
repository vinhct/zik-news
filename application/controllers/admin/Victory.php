<?php

Class Victory extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('victory_model');

    }

    function index()
    {
        $input = array();
        $list = $this->victory_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/victory/index';
        $this->load->view('admin/main', $this->data);
    }
    function check_month_victory()
    {
        $namevic = $this->input->post('month');
        $where = array('month' => $namevic);
        //kiêm tra xem username đã tồn tại chưa
        if ($this->victory_model->check_exists($where)) {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Bài viết tháng  đã tồn tại');
            return false;
        }
        return true;
    }
    function add(){
        $this->load->library('form_validation');
        $this->load->helper('form');

        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post("submit")) {
            $this->form_validation->set_rules('namevic', 'Tên người chơi', 'required');
            $this->form_validation->set_rules('month', 'Tháng', 'required|callback_check_month_victory');
            $this->form_validation->set_rules('editor1', 'Nội dung', 'required');
            $this->form_validation->set_rules('title', 'Tiêu đề', 'required');

            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                $namevic = $this->input->post('namevic');
                $month = $this->input->post('month');
                $title = $this->input->post('title');
                $description = $this->input->post('description');
                $avatar = $this->input->post('avatar');
                $content = $this->input->post('editor1');
                $titlepage = $this->input->post('titlepage');
                $keyword = $this->input->post('keyword');
                $metades = $this->input->post('metades');
                $temp = explode(".", $_FILES["avatar"]["name"]);
                $extension = end($temp);
                if($extension == 'png' || $extension == 'jpg'){
                $config = array("");
                $config['upload_path'] = './public/uploads/victory/';
                $config['allowed_types'] = '*';
                $config['max_size'] = 1024;
                $config['file_name'] = time().'imagevip';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('avatar'))
                {
                    $error =  $this->upload->display_errors();
                    $this->session->set_flashdata('message', $error);
                    redirect(admin_url('victory/add'));
                }
                else
                {

                    $data = array('upload_data' => $this->upload->data());
                   foreach($data as $key => $value){
                       $data1 = array(
                           'username' => $namevic,
                           'month' => $month,
                           'title' => $title,
                           'description' => $description,
                           'content' => $content,
                           'titlepage' => $titlepage,
                           'keyword' => $keyword,
                           'metadescription' => $metades,
                           'seolink' => $this->create_slug($title),
                           'avatar' =>  $value["file_name"],
			   'isActive' => $this->input->post('isActive'),
                       );
                       if ($this->victory_model->create($data1)) {
                           //tạo ra nội dung thông báo
                           $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm dữ liệu thành công</label>');
                           redirect(admin_url('victory'));
                       } else {
                           $this->session->set_flashdata('message', 'Không thêm được');
                       }
                   }
                }
            }
                else{
                    $error =  "Bạn chọn file ảnh không đúng định dạng";
                    $this->session->set_flashdata('message', $error);
                }
                //chuyen tới trang danh sách quản trị viên

            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/victory/add';
        $this->load->view('admin/main', $this->data);
    }

    function edit(){

        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $this->load->library('form_validation');
        $this->load->helper('form');
        $info = $this->victory_model->get_info($id);
        $this->data['info'] = $info;
        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post("submit")) {
            $this->form_validation->set_rules('namevic', 'Tên người chơi', 'required');
            $this->form_validation->set_rules('month', 'Tháng', 'required');
            $this->form_validation->set_rules('editor1', 'Nội dung', 'required');

            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                $namevic = $this->input->post('namevic');
                $month = $this->input->post('month');
                $title = $this->input->post('title');
                $description = $this->input->post('description');
                $avatar = $this->input->post('imagevalue');
                $content = $this->input->post('editor1');
                $titlepage = $this->input->post('titlepage');
                $keyword = $this->input->post('keyword');
                $metades = $this->input->post('metades');
                $temp = explode(".", $_FILES["avatar"]["name"]);
                $extension = end($temp);
                if($extension == 'png' || $extension == 'jpg'){
                $config = array("");
                $config['upload_path'] = './public/uploads/victory/';
                $config['allowed_types'] = '*';
                $config['max_size'] = 10000000000;
                $config['file_name'] = time().'imagevip';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('avatar'))
                {
                    $data1 = array(
                        'username' => $namevic,
                        'month' => $month,
                        'title' => $title,
                        'description' => $description,
                        'content' => $content,
                        'titlepage' => $titlepage,
                        'keyword' => $keyword,
                        'metadescription' => $metades,
                        'seolink' => $this->create_slug($title),
                        'avatar' =>  $avatar,
			'isActive' => $this->input->post('isActive'),
                    );
                    if ($this->victory_model->update($id,$data1)) {
                        //tạo ra nội dung thông báo
                        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật dữ liệu thành công</label>');
                        redirect(admin_url('victory'));
                    } else {
                        $this->session->set_flashdata('message', 'Không thêm được');
                    }
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    foreach($data as $key => $value){
                        $data1 = array(
                            'username' => $namevic,
                            'month' => $month,
                            'title' => $title,
                            'description' => $description,
                            'content' => $content,
                            'titlepage' => $titlepage,
                            'keyword' => $keyword,
                            'metadescription' => $metades,
                            'seolink' => $this->create_slug($title),
                            'avatar' =>  $value["file_name"],
		           'isActive' => $this->input->post('isActive'),
                        );
                        if ($this->victory_model->update($id,$data1)) {
                            //tạo ra nội dung thông báo
                            $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật dữ liệu thành công</label>');
                            redirect(admin_url('victory'));
                        } else {
                            $this->session->set_flashdata('message', 'Không thêm được');
                        }
                    }
                }
                }
                else{
                    $data1 = array(
                        'username' => $namevic,
                        'month' => $month,
                        'title' => $title,
                        'description' => $description,
                        'content' => $content,
                        'titlepage' => $titlepage,
                        'keyword' => $keyword,
                        'metadescription' => $metades,
                        'seolink' => $this->create_slug($title),
                        'avatar' =>  $avatar,
			'isActive' => $this->input->post('isActive'),
                    );
                    if ($this->victory_model->update($id,$data1)) {
                        //tạo ra nội dung thông báo
                        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật dữ liệu thành công</label>');
                        redirect(admin_url('victory'));
                    } else {
                        $this->session->set_flashdata('message', 'Không thêm được');
                    }
                }
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/victory/edit';
        $this->load->view('admin/main', $this->data);
    }

    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->victory_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại danh mục');
            redirect(admin_url('victory'));
        }
        //thuc hiện xóa
        $this->victory_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('victory'));
    }
}
