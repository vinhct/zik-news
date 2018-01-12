<?php

Class Category extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('news_model');

    }

    function index()
    {
        $list = $this->get_list_category();
        $this->data['list'] = $list;

        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/category/index';
        $this->load->view('admin/main', $this->data);
    }
    function listfaq()
    {
        $list = $this->get_list_category_faq();
        $this->data['list'] = $list;

        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/category/listfaq';
        $this->load->view('admin/main', $this->data);
    }

    function check_name_cate()
    {
        $namecate = $this->input->post('namecate');
        $where = array('catname' => $namecate);
        //kiêm tra xem username đã tồn tại chưa
        if ($this->category_model->check_exists($where)) {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Tên danh mục  đã tồn tại');
            return false;
        }
        return true;
    }

    function add()
    {

        $this->load->library('form_validation');
        $this->load->helper('form');
        $list = $this->get_category();
        $this->data['list'] = $list;
        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post()) {
            $this->form_validation->set_rules('namecate', 'Tên danh mục', 'required|callback_check_name_cate');
            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                $namecate = $this->input->post('namecate');
                $pagetitle = $this->input->post('titlepage');
                $description = $this->input->post('description');
                $keyword = $this->input->post('keyword');
                $metades = $this->input->post('metades');
                $orderno = $this->input->post('orderno');
                $parentid = $this->input->post('parentid');
                $menufooter = $this->input->post('menufooter');
                $typepage = $this->input->post('typepage');
                $data = array(
                    'catname' => $namecate,
                    'titlePage' => $pagetitle,
                    'description' => $description,
                    'keyword' => $keyword,
                    'metaDescription' => $metades,
                    'orderno' => $orderno,
                    'type' => 0,
                    'parent_id' => $parentid,
                    'seolink' => $this->create_slug($namecate),
                    'isfooter' => $menufooter,
                    'typepage' => $typepage

                );
                if ($this->category_model->create($data)) {
                    //tạo ra nội dung thông báo

                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm dữ liệu thành công</label>');
                } else {
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('category'));
            }
        }
        $this->data['temp'] = 'admin/category/add';
        $this->load->view('admin/main', $this->data);
    }

    function edit()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $list = $this->get_category_edit($id);
        $this->data['list'] = $list;
        $this->load->library('form_validation');
        $this->load->helper('form');
        $info = $this->category_model->get_info($id);
        $this->data['info'] = $info;
        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post()) {
            $this->form_validation->set_rules('namecate', 'Tên danh mục', 'required');
            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                $namecate = $this->input->post('namecate');
                $pagetitle = $this->input->post('titlepage');
                $description = $this->input->post('description');
                $keyword = $this->input->post('keyword');
                $metades = $this->input->post('metades');
                $orderno = $this->input->post('orderno');
                $parentid = $this->input->post('parentid');
                $menufooter = $this->input->post('menufooter');
                $typepage = $this->input->post('typepage');
                $data = array(
                    'catname' => $namecate,
                    'titlePage' => $pagetitle,
                    'description' => $description,
                    'keyword' => $keyword,
                    'metaDescription' => $metades,
                    'orderno' => $orderno,
                    'parent_id' => $parentid,
                    'seolink' => $this->create_slug($namecate),
                    'isfooter' => $menufooter,
                    'typepage' => $typepage

                );
                if ($this->category_model->update($id, $data)) {
                    //tạo ra nội dung thông báo

                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật dữ liệu thành công</label>');
                } else {
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('category'));
            }
        }
        $this->data['temp'] = 'admin/category/edit';
        $this->load->view('admin/main', $this->data);
    }

    // add category faq
    function addfaq()
    {

        $this->load->library('form_validation');
        $this->load->helper('form');
        $list = $this->get_category_faq();
        $this->data['list'] = $list;
        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post()) {
            $this->form_validation->set_rules('namecate', 'Tên danh mục', 'required|callback_check_name_cate');
            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                $namecate = $this->input->post('namecate');
                $pagetitle = $this->input->post('titlepage');
                $description = $this->input->post('description');
                $keyword = $this->input->post('keyword');
                $metades = $this->input->post('metades');
                $orderno = $this->input->post('orderno');
                $parentid = $this->input->post('parentid');
                $menufooter = $this->input->post('menufooter');
                $typepage = $this->input->post('typepage');
                $data = array(
                    'catname' => $namecate,
                    'titlePage' => $pagetitle,
                    'description' => $description,
                    'keyword' => $keyword,
                    'metaDescription' => $metades,
                    'orderno' => $orderno,
                    'type' => 1,
                    'parent_id' => $parentid,
                    'seolink' => $this->create_slug($namecate),
                    'isfooter' => $menufooter,
                    'typepage' => $typepage
                );
                if ($this->category_model->create($data)) {
                    //tạo ra nội dung thông báo

                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm dữ liệu thành công</label>');
                } else {
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('category/listfaq'));
            }
        }
        $this->data['temp'] = 'admin/category/addfaq';
        $this->load->view('admin/main', $this->data);
    }

    function editfaq()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $list = $this->get_category_edit_faq($id);
        $this->data['list'] = $list;
        $this->load->library('form_validation');
        $this->load->helper('form');
        $info = $this->category_model->get_info($id);
        $this->data['info'] = $info;
        //neu ma co du lieu post len thi kiem tra
        if ($this->input->post()) {
            $this->form_validation->set_rules('namecate', 'Tên danh mục', 'required');
            //nhập liệu chính xác
            if ($this->form_validation->run()) {
                $namecate = $this->input->post('namecate');
                $pagetitle = $this->input->post('titlepage');
                $description = $this->input->post('description');
                $keyword = $this->input->post('keyword');
                $metades = $this->input->post('metades');
                $orderno = $this->input->post('orderno');
                $parentid = $this->input->post('parentid');
                $menufooter = $this->input->post('menufooter');
                $typepage = $this->input->post('typepage');
                $data = array(
                    'catname' => $namecate,
                    'titlePage' => $pagetitle,
                    'description' => $description,
                    'keyword' => $keyword,
                    'metaDescription' => $metades,
                    'orderno' => $orderno,
                    'parent_id' => $parentid,
                    'seolink' => $this->create_slug($namecate),
                    'isfooter' => $menufooter,
                    'typepage' => $typepage

                );
                if ($this->category_model->update($id, $data)) {
                    //tạo ra nội dung thông báo

                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật dữ liệu thành công</label>');
                } else {
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('category/listfaq'));
            }
        }
        $this->data['temp'] = 'admin/category/editfaq';
        $this->load->view('admin/main', $this->data);
    }

    function get_category()
    {
        $str = "";
        $categorys = $this->category_model->get_category();
        $str .= "<select id='parentid' name='parentid' class='form-control'>";
        if ($categorys != null) {
            $str .= "<option value='-1'>Danh mục cha</option>";
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


    function get_category_faq()
    {
        $str = "";
        $categorys = $this->category_model->get_category_faq();
        $str .= "<select id='parentid' name='parentid' class='form-control'>";
        if ($categorys != null) {
            $str .= "<option value='-1'>Danh mục cha</option>";
            foreach ($categorys as $category) {
                $str .= "<option value='$category->id' >";
                $str .= $category->catname;
                $str .= $this->get_subcategory_faq($category->id, $i = 0);
                $str .= "</option>";
            }
        } else {
            $str .= "<option value='-1' >Danh mục cha</option>";
        }
        $str .= "</select>";
        return $str;
    }

    function get_subcategory_faq($category_idfaq, $i = 0)
    {
        $str = "";
        $sub_categorys = $this->category_model->get_subcategory_faq($category_idfaq);
        //kiem tra get subcategory co ton ai hay
        if ($sub_categorys) {
            foreach ($sub_categorys as $sub_category) {
                //kiem tra con parent hay ko
                $str .= "<option value='$sub_category->id'>";
                $str .= "----" . $sub_category->catname;
                $sub_category_con_faq = $this->category_model->get_subcategory_faq($sub_category->id);
                //kiem tra get subcategory co ton ai hay
                if ($sub_category_con_faq) {
                    foreach ($sub_category_con_faq as $sub_category) {
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


    function get_category_edit($id)
    {
        $str = "";
        $categorys = $this->category_model->get_category();
        $str .= "<select id='parentid' name='parentid' class='form-control'>";
        if ($categorys != null) {
            $str .= "<option value='-1' >Danh mục cha</option>";
            foreach ($categorys as $category) {
                $sub_categorys = $this->category_model->get_subcategory($category->id);
                $menu_select = $this->category_model->get_info($id);
                if ($menu_select->parent_id == $category->id) {
                    $str .= "<option value='$category->id' selected>";
                    $str .= $category->catname;
                    $str .= "</option>";
                } else {
                    $str .= "<option value='$category->id'>";
                    $str .= $category->catname;
                    $str .= "</option>";
                }
                if (!empty($sub_categorys)) {
                    foreach ($sub_categorys as $sub_category) {

                        $sub_category_cons = $this->category_model->get_subcategory($sub_category->id);
                        $menu_select_con = $this->category_model->get_info($id);
                        if ($menu_select_con->parent_id == $sub_category->id) {
                            $str .= "<option value='$sub_category->id' selected>";
                            $str .= "----" . $sub_category->catname;
                            $str .= "</option>";
                        } else {
                            $str .= "<option value='$sub_category->id'>";
                            $str .= "----" . $sub_category->catname;
                            $str .= "</option>";
                        }
                        if (!empty($sub_category_cons)) {
                            foreach ($sub_category_cons as $sub_category_con) {
                                $str .= "<option value='$sub_category_con->id'>";
                                $str .= "--------" . $sub_category_con->catname;
                                $str .= "</option>";
                            }
                        }
                    }
                }

            }
        } else {
            $str .= "<option value='-1' >Danh mục cha</option>";
        }
        $str .= "</select>";
        return $str;
    }

    function get_category_edit_faq($id)
    {
        $str = "";
        $categorys = $this->category_model->get_category_faq();
        $str .= "<select id='parentid' name='parentid' class='form-control'>";
        if ($categorys != null) {
            $str .= "<option value='-1' >Danh mục cha</option>";
            foreach ($categorys as $category) {
                $sub_categorys = $this->category_model->get_subcategory_faq($category->id);
                $menu_select = $this->category_model->get_info($id);
                if ($menu_select->parent_id == $category->id) {
                    $str .= "<option value='$category->id' selected>";
                    $str .= $category->catname;
                    $str .= "</option>";
                } else {
                    $str .= "<option value='$category->id'>";
                    $str .= $category->catname;
                    $str .= "</option>";
                }
                if (!empty($sub_categorys)) {
                    foreach ($sub_categorys as $sub_category) {

                        $sub_category_cons = $this->category_model->get_subcategory_faq($sub_category->id);
                        $menu_select_con = $this->category_model->get_info($id);
                        if ($menu_select_con->parent_id == $sub_category->id) {
                            $str .= "<option value='$sub_category->id' selected>";
                            $str .= "----" . $sub_category->catname;
                            $str .= "</option>";
                        } else {
                            $str .= "<option value='$sub_category->id'>";
                            $str .= "----" . $sub_category->catname;
                            $str .= "</option>";
                        }
                        if (!empty($sub_category_cons)) {
                            foreach ($sub_category_cons as $sub_category_con) {
                                $str .= "<option value='$sub_category_con->id'>";
                                $str .= "--------" . $sub_category_con->catname;
                                $str .= "</option>";
                            }
                        }
                    }
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
        $info = $this->category_model->get_info($id);
        $list_news = $this->news_model->get_list_news_category($id);
        $list_cate =  $this->category_model->get_category_parent($id);
        if($list_news == false && $list_cate == false ){
            $this->category_model->delete($id);

            $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
            redirect(admin_url('category'));
        }else{
            $this->session->set_flashdata('message',  '<label class="control-label" style="color: red" for="inputSuccess"> Bài viết tồn tại trong danh mục hoặc danh mục chứa dạnh mục con</label>');
            redirect(admin_url('category'));
        }

        if (!$info) {
            $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Bài viết tồn tại trong danh mục hoặc danh mục chứa dạnh mục con</label>');
            redirect(admin_url('category'));
        }

//        $this->category_model->delete($id);
//
//        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
//        redirect(admin_url('category'));
    }
    function deletefaq()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $info = $this->category_model->get_info($id);
        $list_news = $this->news_model->get_list_news_category($id);
        $list_cate =  $this->category_model->get_category_parent($id);
        if($list_news == false && $list_cate == false ){
            $this->category_model->delete($id);
            $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
            redirect(admin_url('category/listfaq'));
        }else{
            $this->session->set_flashdata('message',  '<label class="control-label" style="color: red" for="inputSuccess"> Bài viết tồn tại trong danh mục hoặc danh mục chứa dạnh mục con</label>');
            redirect(admin_url('category/listfaq'));
        }

        if (!$info) {
            $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Bài viết tồn tại trong danh mục hoặc danh mục chứa dạnh mục con</label>');
            redirect(admin_url('category/listfaq'));
        }
    }


    function get_list_category()
    {
        $str = "";
        $categorys = $this->category_model->get_category();
        if (!empty($categorys)) {
            foreach ($categorys as $category) {
                $str .= "<tr>";
                $str .= " <td>$category->catname</td>";
                $str .= " <td>$category->seolink</td>";
                $str .= " <td>$category->titlePage</td>";
                $str .= " <td>$category->keyword</td>";
                $str .= " <td>Danh mục thường</td>";
                $str .= " <td>";
                $str .= " <a href=" . admin_url('category/edit/' . $category->id) . ">";
                $str .= "      <img src=" . public_url('admin') . "/images/edit.png>";
                $str .= "       </a>";
                $str .= "     <a class ='verify_action' href=" . admin_url('category/delete/' . $category->id) . ">";
                $str .= "     <img src=" . public_url('admin') . "/images/delete.png>";
                $str .= "     </a>";
                $str .= " </td>";
                $str .= "</tr>";
                $str .= $this->get_sub_list_category($category->id, $i = 0);
            }
        }
        return $str;
    }
    function get_list_category_faq()
    {
        $str = "";
        $categoryfaq = $this->category_model->get_category_faq();
        if (!empty($categoryfaq)) {
            foreach ($categoryfaq as $category) {
                $str .= "<tr>";
                $str .= " <td>$category->catname</td>";
                $str .= " <td>$category->seolink</td>";
                $str .= " <td>$category->titlePage</td>";
                $str .= " <td>$category->keyword</td>";
                $str .= " <td>Danh mục FAQ</td>";
                $str .= " <td>";
                $str .= " <a href=" . admin_url('category/editfaq/' . $category->id) . ">";
                $str .= "      <img src=" . public_url('admin') . "/images/edit.png>";
                $str .= "       </a>";
                $str .= "     <a class ='verify_action' href=" . admin_url('category/deletefaq/' . $category->id) . ">";
                $str .= "     <img src=" . public_url('admin') . "/images/delete.png>";
                $str .= "     </a>";
                $str .= " </td>";
                $str .= "</tr>";
                $str .= $this->get_sub_list_category_faq($category->id, $i = 0);
            }
        }
        return $str;

    }


    function get_sub_list_category($category_ids, $i = 0)
    {
        $str = "";
        $sub_categorys = $this->category_model->get_subcategory($category_ids);
        //kiem tra get subcategory co ton ai hay
        if (!empty($sub_categorys)) {
            foreach ($sub_categorys as $sub_category) {
                $str .= "<tr>";
                //kiem tra con parent hay ko
                $str .= " <td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;$sub_category->catname</td>";
                $str .= " <td>$sub_category->seolink</td>";
                $str .= " <td>$sub_category->titlePage</td>";
                $str .= " <td>$sub_category->keyword</td>";
                $str .= " <td>Danh mục thường</td>";
                $str .= " <td>";
                $str .= "           <a href=" . admin_url('category/edit/' . $sub_category->id) . ">";
                $str .= "      <img src=" . public_url('admin') . "/images/edit.png>";
                $str .= "       </a>";
                $str .= "     <a class ='verify_action' href=" . admin_url('category/delete/' . $sub_category->id) . " >";
                $str .= "     <img src=" . public_url('admin') . "/images/delete.png>";
                $str .= "     </a>";
                $str .= " </td>";
                $str .= "</tr>";
                $sub_category_con = $this->category_model->get_subcategory($sub_category->id);
                if (!empty($sub_category_con)) {
                    foreach ($sub_category_con as $sub_category) {
                        $str .= "<tr>";
                        //kiem tra con parent hay ko
                        $str .= " <td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;$sub_category->catname</td>";
                        $str .= " <td>$sub_category->seolink</td>";
                        $str .= " <td>$sub_category->titlePage</td>";
                        $str .= " <td>$sub_category->keyword</td>";
                        $str .= " <td>Danh mục thường</td>";
                        $str .= " <td>";
                        $str .= "           <a href=" . admin_url('category/edit/' . $sub_category->id) . ">";
                        $str .= "      <img src=" . public_url('admin') . "/images/edit.png>";
                        $str .= "       </a>";
                        $str .= "     <a class ='verify_action' href=" . admin_url('category/delete/' . $sub_category->id) . " >";
                        $str .= "     <img src=" . public_url('admin') . "/images/delete.png>";
                        $str .= "     </a>";
                        $str .= " </td>";
                        $str .= "</tr>";
                    }
                }
                if ($sub_category->id) {
                    $str .= $this->get_sub_list_category($sub_category->id, $i++);
                }
            }

        }
        return $str;
    }

    function get_sub_list_category_faq($category_ids, $i = 0)
    {
        $str = "";
        $sub_categorys = $this->category_model->get_subcategory_faq($category_ids);
        //kiem tra get subcategory co ton ai hay
        if (!empty($sub_categorys)) {
            foreach ($sub_categorys as $sub_category) {
                $str .= "<tr>";
                //kiem tra con parent hay ko
                $str .= " <td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;$sub_category->catname</td>";
                $str .= " <td>$sub_category->seolink</td>";
                $str .= " <td>$sub_category->titlePage</td>";
                $str .= " <td>$sub_category->keyword</td>";
                $str .= " <td>Danh mục FAQ</td>";
                $str .= " <td>";
                $str .= "           <a href=" . admin_url('category/editfaq/' . $sub_category->id) . ">";
                $str .= "      <img src=" . public_url('admin') . "/images/edit.png>";
                $str .= "       </a>";
                $str .= "     <a class ='verify_action' href=" . admin_url('category/deletefaq/' . $sub_category->id) . " >";
                $str .= "     <img src=" . public_url('admin') . "/images/delete.png>";
                $str .= "     </a>";
                $str .= " </td>";
                $str .= "</tr>";
                $sub_category_con = $this->category_model->get_subcategory_faq($sub_category->id);
                if (!empty($sub_category_con)) {
                    foreach ($sub_category_con as $sub_category) {
                        $str .= "<tr>";
                        //kiem tra con parent hay ko
                        $str .= " <td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;$sub_category->catname</td>";
                        $str .= " <td>$sub_category->seolink</td>";
                        $str .= " <td>$sub_category->titlePage</td>";
                        $str .= " <td>$sub_category->keyword</td>";
                        $str .= " <td>Danh mục FAQ</td>";
                        $str .= " <td>";
                        $str .= "           <a href=" . admin_url('category/editfaq/' . $sub_category->id) . ">";
                        $str .= "      <img src=" . public_url('admin') . "/images/edit.png>";
                        $str .= "       </a>";
                        $str .= "     <a class ='verify_action' href=" . admin_url('category/deletefaq/' . $sub_category->id) . " >";
                        $str .= "     <img src=" . public_url('admin') . "/images/delete.png>";
                        $str .= "     </a>";
                        $str .= " </td>";
                        $str .= "</tr>";
                    }
                }
                if ($sub_category->id) {
                    $str .= $this->get_sub_list_category_faq($sub_category->id, $i++);
                }
            }

        }
        return $str;
    }


}