<section class="content-header">
    <h1>
        Thêm mới tin tức
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <!-- /.box-header -->
                <form id="form-news-add" class="form" enctype="multipart/form-data" method="post" action="" novalidate="novalidate">
                    <fieldset
                    <div class="box-body">

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Danh mục :</label>

                                <div class="col-sm-3">
                                    <?php echo $list; ?>
                                </div>
                                <div class="col-sm-4"><label class="control-label" for="inputError" style="color: #ff0000"><?php echo form_error('category') ?></label></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                                <div class="col-sm-4"><label class="control-label" for="inputError" style="color: #ff0000"><?php echo form_error('title') ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Mô tả:</label>
                                <div class="col-sm-8">
                                    <textarea id="desc" name="desc" rows="50" cols="80">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Nội dung:</label>

                                <div class="col-sm-8">
                                    <textarea id="content" name="content" rows="50" cols="80">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Thứ tự:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="orderno" name="orderno" value="9999">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh đại diện:</label>
                                <div class="col-sm-3">
                                <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                        class="btn btn-primary btn-file"><span class="fileinput-new">Chọn file </span> <span
                                            class="fileinput-exists">ảnh</span>
                                         <input type="file" id="images" name="images"><div class="ripple-wrapper"></div></span> <span
                                        class="fileinput-filename"></span> </div>
                                    <img id="imageselect" src="../../public/admin/images/no-image.png"
                                         style="margin-top: 5px;width: 150px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Hiển thị trang chủ:</label>

                                <div class="col-sm-3">
                                    <input type="checkbox" name="chk" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Hiển thị chính sách:</label>

                                <div class="col-sm-3">
                                    <input type="checkbox" name="chinhsach" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề page:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="titlepage">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Keyword:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="keyword">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Meta description:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="metadesc">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Trạng thái</label>

                                <div class="col-sm-8">
                                    <select id="isactive" name="isActive">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Không Hiển thị</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ngày đăng</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="datepicker" name="ExpireDate">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <input type="submit" value="Thêm mới" name="addnews" class="btn btn-primary pull-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
<script src="../../public/site/js/validate-news.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('desc');
        CKEDITOR.replace('content');
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageselect').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#images").change(function () {
        readURL(this);
    });
    $(".successful").click(function () {
        $(".successful").hide();
    });
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).datepicker("setDate", new Date());
    } );
</script>