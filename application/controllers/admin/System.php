<?php
Class System extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('system_model');
    }
    function index()
    {
        $input = array();
        $list = $this->system_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/system/index';
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
                move_uploaded_file($file_tmp, "public/uploads/adv/" . $file_name);
            }
            $data = array(
                'linkface' => $this->input->post('linkface'),
                'linkgoogle' => $this->input->post('linkgoogle'),
                'linkyoutube' => $this->input->post('linkyoutube'),
                'linkblog' => $this->input->post('linkblog'),
                'linktwiter' => $this->input->post('linktwiter'),
                'codeGA' => $this->input->post('codeGa'),
                'titlePage' => $this->input->post('titlepage'),
                'keyword' => $this->input->post('keyword'),
                'metadescription'=> $this->input->post('metadesc'),
                'contact'=> $this->input->post('contact'),
                'h1' => $this->input->post('txth1'),
                'images'=>$_FILES["images"]["name"],
                'linklogin' => $this->input->post('linklogin'),
		 'sign' => $this->input->post('sign'),
		'ispopup' => $this->input->post('ispopup'),
                 'linkpopup' => $this->input->post('linkpopup'),

            );
            if ($this->system_model->create($data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm mới thành công</label>');
                redirect(admin_url('system'));
            } else {
                $this->session->set_flashdata('message', 'Thêm mới không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/system/add';
        $this->load->view('admin/main', $this->data);
    }
    function edit(){
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $info = $this->system_model->get_info($id);
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
                $data = array(
                    'linkface' => $this->input->post('linkface'),
                    'linkgoogle' => $this->input->post('linkgoogle'),
                    'linkyoutube' => $this->input->post('linkyoutube'),
                    'linkblog' => $this->input->post('linkblog'),
                    'linktwiter' => $this->input->post('linktwiter'),
                    'codeGA' => $this->input->post('codeGa'),
                    'titlePage' => $this->input->post('titlepage'),
                    'keyword' => $this->input->post('keyword'),
                    'metadescription' => $this->input->post('metadesc'),
                    'contact' => $this->input->post('contact'),
                    'h1' => $this->input->post('txth1'),
                    'linklogin' => $this->input->post('linklogin'),
                    'images' => $_FILES['images']['name'],
		    'sign' => $this->input->post('sign'),
                    'ispopup' => $this->input->post('ispopup'),
                    'linkpopup' => $this->input->post('linkpopup'),
                );
                move_uploaded_file($file_tmp, "public/uploads/adv/" . $file_name);
                if ($this->system_model->update($id, $data)) {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật thành công</label>');
                    redirect(admin_url('system'));
                } else {
                    $this->session->set_flashdata('message', 'Cập nhật không thành công');
                }
            }
            else{
                $data = array(
                    'linkface' => $this->input->post('linkface'),
                    'linkgoogle' => $this->input->post('linkgoogle'),
                    'linkyoutube' => $this->input->post('linkyoutube'),
                    'linkblog' => $this->input->post('linkblog'),
                    'linktwiter' => $this->input->post('linktwiter'),
                    'codeGA' => $this->input->post('codeGa'),
                    'titlePage' => $this->input->post('titlepage'),
                    'keyword' => $this->input->post('keyword'),
                    'metadescription' => $this->input->post('metadesc'),
                    'contact' => $this->input->post('contact'),
                    'h1' => $this->input->post('txth1'),
                    'linklogin' => $this->input->post('linklogin'),
                    'images' => $this->input->post('imagevalue'),
 	             'sign' => $this->input->post('sign'),
                     'ispopup' => $this->input->post('ispopup'),
                 'linkpopup' => $this->input->post('linkpopup'),        
                );

                if ($this->system_model->update($id, $data)) {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật thành công</label>');
                    redirect(admin_url('system'));
                } else {
                    $this->session->set_flashdata('message', 'Cập nhật không thành công');
                }
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/system/edit';
        $this->load->view('admin/main', $this->data);
    }
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->system_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại bản ghi này');
            redirect(admin_url('system'));
        }
        //thuc hiện xóa
        $this->system_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('system'));
    }
}
