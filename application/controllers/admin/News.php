<?php

Class News extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->model('category_model');
	 $this->load->model('Rate_model');
    }

    function index()
    {
        $input = array();
        $title = $this->input->get('title');
        $category = $this->input->get('category');
        if($title)
        {
            $input['like'] = array('title', $title);
        }
        if($category){
            $input['where'] = array('catId'=>$category);
        }
        $list = $this->news_model->get_list($input);
        $allCate = $this->category_model->get_category();
        $this->data['title'] = $title;
        $this->data['category'] = $category;
        $this->data['list'] = $list;
        $this->data['allCate'] = $allCate;

        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/news/index';
        $this->load->view('admin/main', $this->data);
    }

    function  add()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        $list = $this->get_category();
        $this->data['list'] = $list;
        if (isset($_POST['addnews'])) {
            if ($this->input->post()) {
                if (isset($_POST['chk'])) {
                    $ishome = 1;
                } else {
                    $ishome = 0;
                }
                if (isset($_POST['chinhsach'])) {
                    $ischinhsach = 1;
                } else {
                    $ischinhsach = 0;
                }
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
                    move_uploaded_file($file_tmp, "public/uploads/news/" . $file_name);
                }
                $date = new DateTime();
                $createtime = date_format($date, 'Y-m-d');

                $data = array(
                    'catId' => $this->input->post('category'),
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('desc'),
                    'content' => $this->input->post('content'),
                    'seoLink' => $this->create_slug($this->input->post('title')),
                    'images' => $_FILES["images"]["name"],
                    'isHome' => $ishome,
                    'chinhsach' => $ischinhsach,
                    'orderNo' => $this->input->post('orderno'),
                    'keyWord' => $this->input->post('keyword'),
                    'metaDescription' => $this->input->post('metadesc'),
                    'titlePage' => $this->input->post('titlepage'),
                    'catName' => $this->getCatName($this->input->post('category')),
                    'createTime' => $createtime,
                    'updateTime' => $createtime,
                    'isActive' => $this->input->post('isActive'),
                    'ExpireDate' => $this->input->post('ExpireDate')
                );

                if ($this->news_model->create($data)) {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm mới thành công</label>');
                    redirect(admin_url('news'));
                } else {
                    $this->session->set_flashdata('message', 'Thêm mới không thành công');
                }
            } else {
                $error = "Bạn chọn file ảnh không đúng định dạng";
                $this->session->set_flashdata('message', $error);
            }

        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/news/add';
        $this->load->view('admin/main', $this->data);
    }

    function edit()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $info = $this->news_model->get_info($id);
        $this->data['info'] = $info;

        $list = $this->get_category_edit($info->catId);
        $this->data['list'] = $list;
        if (isset($_POST['editnews'])) {
            if ($this->input->post()) {
                if (isset($_POST['chk'])) {
                    $ishome = 1;
                } else {
                    $ishome = 0;
                }
                if (isset($_POST['chinhsach'])) {
                    $ischinhsach = 1;
                } else {
                    $ischinhsach = 0;
                }

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
                $date = new DateTime();
                $createtime = date_format($date, 'Y-m-d');
                if ($_FILES['images']['name'] != "") {
                    $data = array(
                        'catId' => $this->input->post('category'),
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('desc'),
                        'content' => $this->input->post('content'),
                        'seoLink' => $this->create_slug($this->input->post('title')),
                        'images' => $_FILES['images']['name'],
                        'isHome' => $ishome,
                        'chinhsach' => $ischinhsach,
                        'orderNo' => $this->input->post('orderno'),
                        'keyWord' => $this->input->post('keyword'),
                        'metaDescription' => $this->input->post('metadesc'),
                        'titlePage' => $this->input->post('titlepage'),
                        'catName' => $this->getCatName($this->input->post('category')),
                        'updateTime' => $createtime,
                        'isActive' => $this->input->post('isActive'),
                        'ExpireDate' => $this->input->post('ExpireDate')
                    );
                    $rs = move_uploaded_file($file_tmp, "public/uploads/news/" . $file_name);

                    //insert and update rate
            
            if ($this->news_model->update($id, $data)) {
		
            	                        //tạo ra nội dung thông báo
                        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> cập nhật thành công</label>');
                        redirect(admin_url('news'));
                    } else {
                        $this->session->set_flashdata('message', 'Thêm mới không thành công');
                    }
                } else {

                    $data = array(
                        'catId' => $this->input->post('category'),
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('desc'),
                        'content' => $this->input->post('content'),
                        'seoLink' => $this->create_slug($this->input->post('title')),
                        'images' => $this->input->post('imagevalue'),
                        'isHome' => $ishome,
                        'chinhsach' => $ischinhsach,
                        'orderNo' => $this->input->post('orderno'),
                        'keyWord' => $this->input->post('keyword'),
                        'metaDescription' => $this->input->post('metadesc'),
                        'titlePage' => $this->input->post('titlepage'),
                        'catName' => $this->getCatName($this->input->post('category')),
                        'updateTime' => $createtime,
                        'isActive' => $this->input->post('isActive'),
                        'ExpireDate' => $this->input->post('ExpireDate')
                    );

                    if ($this->news_model->update($id, $data)) {
                        //tạo ra nội dung thông báo
                        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> cập nhật thành công</label>');
                        redirect(admin_url('news'));
                    } else {
                        $this->session->set_flashdata('message', 'Thêm mới không thành công');
                    }
                }
            } else {
                $error = "Bạn chọn file ảnh không đúng định dạng";
                $this->session->set_flashdata('message', $error);
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/news/edit';
        $this->load->view('admin/main', $this->data);
    }

    function get_category_edit($idcat)
    {
        $str = "";
        $listcat = $this->category_model->get_category();
        $str .= "<select id='category' name='category' class='form-control'>";
        if ($listcat != null) {
            $str .= "<option value='' >Danh mục cha</option>";
            foreach ($listcat as $category) {
                //lay menu cap 2
                $catlv2 = $this->category_model->get_subcategory($category->id);
                if ($category->id == $idcat) {
                    $str .= "<option value='$category->id' selected>";
                    $str .= $category->catname;
                    $str .= "</option>";
                } else {
                    $str .= "<option value='$category->id'>";
                    $str .= $category->catname;
                    $str .= "</option>";
                }
                //hien thi menu cap 2
                if ($catlv2 != null) {
                    foreach ($catlv2 as $itemlv2) {
                        //lay menu cap 3
                        $catlv3 = $this->category_model->get_subcategory($itemlv2->id);
                        if ($itemlv2->id == $idcat) {
                            $str .= "<option value='$itemlv2->id' selected>";
                            $str .="----". $itemlv2->catname;
                            $str .= "</option>";
                        } else {
                            $str .= "<option value='$itemlv2->id'>";
                            $str .= "----".$itemlv2->catname;
                            $str .= "</option>";
                        }
                        //hien thi menu cap 3
                        if ($catlv3 != null) {
                            foreach ($catlv3 as $itemlv3) {
                                if ($itemlv3->id == $idcat) {
                                    $str .= "<option value='$itemlv3->id' selected>";
                                    $str .="-------". $itemlv3->catname;
                                    $str .= "</option>";
                                } else {
                                    $str .= "<option value='$itemlv3->id'>";
                                    $str .= "-------".$itemlv3->catname;
                                    $str .= "</option>";
                                }
                            }
                        }
                    }
                }

            }
        } else {
            $str .= "<option value='' >Danh mục cha</option>";
        }

        $str .= "</select>";
        return $str;
    }

    function get_category()
    {
        $str = "";
        $categorys = $this->category_model->get_category();
        $str .= "<select id='category' name='category' class='form-control required'>";
        if ($categorys != null) {
            $str .= "<option value=''>Danh mục cha</option>";
            foreach ($categorys as $category) {
                $str .= "<option value='$category->id' >";
                $str .= $category->catname;
                $str .= $this->get_subcategory($category->id, $i = 0);
                $str .= "</option>";
            }
        } else {
            $str .= "<option value='-1' >Danh mục cha</option>";
        }
        $str .= "</select>";
        return $str;
    }

    function get_subcategory($category_ids, $i = 0)
    {
        $str = "";
        $sub_categorys = $this->category_model->get_subcategory($category_ids);
        //kiem tra get subcategory co ton ai hay
        if ($sub_categorys) {
            foreach ($sub_categorys as $sub_category) {
                //kiem tra con parent hay ko
                $str .= "<option value='$sub_category->id'>";
                $str .= "----" . $sub_category->catname;
                $sub_category_con = $this->category_model->get_subcategory($sub_category->id);
                //kiem tra get subcategory co ton ai hay
                if ($sub_category_con) {
                    foreach ($sub_category_con as $sub_category) {
                        //kiem tra con parent hay ko
                        $str .= "<option value='$sub_category->id'>";
                        $str .= "--------" . $sub_category->catname;
                        $str .= "</option>";
                    }
                }

                $str .= "</option>";
            }
        }
        return $str;
    }
    function getCatName($id)
    {
        $info = $this->category_model->get_info($id);
        return $info->catname;
    }
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->news_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại danh mục');
            redirect(admin_url('news'));
        }
        //thuc hiện xóa
        $this->news_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('news'));
    }
//check danh mục tin tức
    function check_category()
    {
        if (isset($_POST['category'])) {
            $select = $_POST['category'];
            if ($select == -1) {
                $this->form_validation->set_message(__FUNCTION__, 'Chọn danh mục');
                return false;
            }
        }
        return true;
    }
}

?>
