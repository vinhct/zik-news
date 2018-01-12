<?php

Class Bonusvip extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('bonusvip_model');

    }

    function index()
    {
        $input = array();
        $list = $this->bonusvip_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/bonusvip/index';
        $this->load->view('admin/main', $this->data);
    }
    function check_name_title()
    {
        $title = $this->input->post('title');
        $where = array('title' => $title);
        //kiêm tra xem username đã tồn tại chưa
        if ($this->bonusvip_model->check_exists($where)) {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Tiêu đề  đã tồn tại');
            return false;
        }
        return true;
    }
    function add(){

        $this->load->library('form_validation');
        $this->load->helper('form');

        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post("submit")) {
            $this->form_validation->set_rules('title', 'Tiêu đề', 'required|callback_check_name_title');
            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                $title = $this->input->post('title');
                $description = $this->input->post('description');
                $titlepage = $this->input->post('titlepage');
                $keyword = $this->input->post('keyword');
                $metades = $this->input->post('metades');
                $vippoint = $this->input->post('vippoint');
                $orderNo = $this->input->post('orderno');
                $vin = $this->input->post('vin');
                $temp = explode(".", $_FILES["avatar"]["name"]);
                $extension = end($temp);
                if($extension == 'png' || $extension == 'jpg'){
                $config = array("");
                $config['upload_path'] = './public/uploads/bonusvip/';
                $config['allowed_types'] = '*';
                $config['max_size'] = 10000000000;
                $config['file_name'] = time().'imagevip';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('avatar'))
                {
                    $error = "Bạn chưa chọn ảnh";
                    $this->session->set_flashdata('message', $error);

                }
                else
                {

                    $data = array('upload_data' => $this->upload->data());
                    foreach($data as $key => $value){
                        $data1 = array(
                            'title' => $title,
                            'description' => $description,
                            'titlepage' => $titlepage,
                            'keyword' => $keyword,
                            'metadescription' => $metades,
                            'vippoint' => $vippoint,
                            'vin' => $vin,
                            'images' =>  $value["file_name"],
                            'orderNo' => $orderNo
                        );
                        if ($this->bonusvip_model->create($data1)) {
                            //tạo ra nội dung thông báo
                            $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm dữ liệu thành công</label>');
                            redirect(admin_url('bonusvip'));
                        } else {
                            $this->session->set_flashdata('message', 'Không thêm được');
                        }
                    }
                }
                }
                else{
                    $error =  "Bạn chưa chọn file ảnh đúng định dạng";
                    $this->session->set_flashdata('message', $error);
                }
                //chuyen tới trang danh sách quản trị viên

            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/bonusvip/add';
        $this->load->view('admin/main', $this->data);

    }
    function edit(){
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $this->load->library('form_validation');
        $this->load->helper('form');
        $info = $this->bonusvip_model->get_info($id);
        $this->data['info'] = $info;

        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post("submit")) {
            $this->form_validation->set_rules('title', 'Tiêu đề', 'required');
            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                $title = $this->input->post('title');
                $description = $this->input->post('description');
                $titlepage = $this->input->post('titlepage');
                $keyword = $this->input->post('keyword');
                $metades = $this->input->post('metades');
                $vippoint = $this->input->post('vippoint');
                $vin = $this->input->post('vin');
                $orderNo = $this->input->post('orderno');
                $avatar = $this->input->post('imagevalue');
                $temp = explode(".", $_FILES["avatar"]["name"]);
                $extension = end($temp);
                if($extension == 'png' || $extension == 'jpg'){
                    $config = array("");
                    $config['upload_path'] = './public/uploads/bonusvip/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 10000000000;
                    $config['file_name'] = time().'imagevip';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if ( ! $this->upload->do_upload('avatar'))
                    {
                        $error = "Bạn chưa chọn ảnh";
                        $this->session->set_flashdata('message', $error);

                    }
                    else
                    {

                        $data = array('upload_data' => $this->upload->data());
                        foreach($data as $key => $value){
                            $data1 = array(
                                'title' => $title,
                                'description' => $description,
                                'titlepage' => $titlepage,
                                'keyword' => $keyword,
                                'metadescription' => $metades,
                                'vippoint' => $vippoint,
                                'vin' => $vin,
                                'images' =>  $value["file_name"],
                                'orderNo' => $orderNo
                            );
                            if ($this->bonusvip_model->update($id,$data1)) {
                                //tạo ra nội dung thông báo
                                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật dữ liệu thành công</label>');
                                redirect(admin_url('bonusvip'));
                            } else {
                                $this->session->set_flashdata('message', 'Không thêm được');
                            }
                        }
                    }
                }
                else{
                    $data1 = array(
                        'title' => $title,
                        'description' => $description,
                        'titlepage' => $titlepage,
                        'keyword' => $keyword,
                        'metadescription' => $metades,
                        'vippoint' => $vippoint,
                        'vin' => $vin,
                        'images' =>$avatar,
                         'orderNo' => $orderNo
                    );
                    if ($this->bonusvip_model->update($id,$data1)) {
                        //tạo ra nội dung thông báo
                        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật dữ liệu thành công</label>');
                        redirect(admin_url('bonusvip'));
                    } else {
                        $this->session->set_flashdata('message', 'Không thêm được');
                    }
                }
                //chuyen tới trang danh sách quản trị viên

            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/bonusvip/edit';
        $this->load->view('admin/main', $this->data);

    }
    function delete(){
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->bonusvip_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại danh mục');
            redirect(admin_url('bonusvip'));
        }
        //thuc hiện xóa
        $this->bonusvip_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('bonusvip'));
    }
}