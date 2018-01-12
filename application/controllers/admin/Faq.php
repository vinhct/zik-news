<?php

Class Faq extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('faq_model');
        $this->load->model('category_model');
    }

    function index()
    {
        $input = array();
        $question = $this->input->get('question');
        if($question)
        {
            $input['like'] = array('question', $question);
        }
        $list = $this->faq_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/faq/index';
        $this->load->view('admin/main', $this->data);
    }

    function add()
    {
        $list = $this->get_service();
        $this->data['list'] = $list;
        if (isset($_POST['addnews'])) {

            $data = array(
                'catid' => $this->input->post('service'),
                'parent_id' => $this->input->post('category'),
                'question' => $this->input->post('desc'),
                'answer' => $this->input->post('content'),
                'seoLink' => $this->create_slug($this->input->post('question')),
                'status' => $this->input->post('status'),
                'orderNo' => $this->input->post('orderno'),
                'keyWord' => $this->input->post('keyword'),
                'metaDescription' => $this->input->post('metadesc'),
                'titlePage' => $this->input->post('titlepage')
            );
            if ($this->faq_model->create($data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm mới thành công</label>');
                redirect(admin_url('faq'));
            } else {
                $this->session->set_flashdata('message', 'Thêm mới không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/faq/add';
        $this->load->view('admin/main', $this->data);
    }
    function  edit()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $info = $this->faq_model->get_info($id);
        $this->data['info'] = $info;
        $list = $this->get_service_edit($info->catid);
        $this->data['list'] = $list;
        if (isset($_POST['addnews'])) {

            $data = array(
                'catid' => $this->input->post('service'),
                'parent_id' => $this->input->post('category'),
                'question' => $this->input->post('desc'),
                'answer' => $this->input->post('content'),
                'seoLink' => $this->create_slug($this->input->post('question')),
                'status' => $this->input->post('status'),
                'orderNo' => $this->input->post('orderno'),
                'keyWord' => $this->input->post('keyword'),
                'metaDescription' => $this->input->post('metadesc'),
                'titlePage' => $this->input->post('titlepage')
            );
            if ($this->faq_model->update($id, $data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> cập nhật thành công</label>');
                redirect(admin_url('faq'));
            } else {
                $this->session->set_flashdata('message', 'cập nhật không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/faq/edit';
        $this->load->view('admin/main', $this->data);

    }

    function get_service()
    {
        $str = "";
        $categorys = $this->category_model->get_category_faq();
        $str .= "<select id='service' name='service' class='form-control'>";
        if ($categorys != null) {
            $str .= "<option value=''>Chọn dịch vụ</option>";
            foreach ($categorys as $category) {
                $str .= "<option value='$category->id' >";
                $str .= $category->catname;
                $str .= "</option>";
            }
        } else {
            $str .= "<option value='-1' >Danh mục cha</option>";
        }
        $str .= "</select>";
        return $str;
    }

    function  get_service_category()
    {
        $id = $_GET['id'];
        $sub_categorys = $this->category_model->get_subcategory_faq($id);
        //kiem tra get subcategory co ton ai hay
        if ($sub_categorys) {
            foreach ($sub_categorys as $sub_category) {
                //kiem tra con parent hay ko
                echo "<option value='$sub_category->id'>";
                echo $sub_category->catname . "</option>";
                var_dump($sub_category->catname);
            }
        }
    }

//
    function  get_service_category_edit()
    {
        $id = $_GET['id'];
        $parent_id= $_GET['parent_id'];
        $sub_categorys = $this->category_model->get_subcategory_faq($id);
        //kiem tra get subcategory co ton ai hay
        if ($sub_categorys) {
            foreach ($sub_categorys as $sub_category) {
                if ($sub_category->id == $parent_id) {
                    //kiem tra con parent hay ko
                    echo "<option value='$sub_category->id' selected>";
                    echo $sub_category->catname . "</option>";
                }
                else{
                    echo "<option value='$sub_category->id'>";
                    echo $sub_category->catname . "</option>";
                }
            }
        }
    }

    function get_service_edit($id)
    {
        $str = "";
        $categorys = $this->category_model->get_category_faq();
        $str .= "<select id='service' name='service' class='form-control'>";
        if ($categorys != null) {
            $str .= "<option value=''>Chọn dịch vụ</option>";
            foreach ($categorys as $category) {
                if ($category->id == $id) {
                    $str .= "<option value='$category->id' selected >";
                    $str .= $category->catname;
                    $str .= "</option>";
                } else {
                    $str .= "<option value='$category->id' >";
                    $str .= $category->catname;
                    $str .= "</option>";
                }
            }
        } else {
            $str .= "<option value='-1' >Danh mục cha</option>";
        }
        $str .= "</select>";
        return $str;
    }
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->faq_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại danh mục');
            redirect(admin_url('faq'));
        }
        //thuc hiện xóa
        $this->faq_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('faq'));
    }
}
