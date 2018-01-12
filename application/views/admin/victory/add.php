<section class="content-header">
    <h1>
        Thêm mới vinh danh
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <form id="form" class="form" enctype="multipart/form-data" method="post"
                      action="<?php admin_url("victory/add") ?>">
                    <fieldset>
                        <div class="box-body">
                            <div class="form-group ">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Tên tài khoản:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="namevic">
                                    </div>
                                    <div class="col-sm-4"><label class="control-label" for="inputError"
                                                                 style="color: #ff0000"><?php echo form_error('namevic') ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Tháng:</label>

                                    <div class="col-sm-3">
                                        <select class="form-control" name="month">
                                            <option value="1">Tháng 1</option>
                                            <option value="2">Tháng 2</option>
                                            <option value="3">Tháng 3</option>
                                            <option value="4">Tháng 4</option>
                                            <option value="5">Tháng 5</option>
                                            <option value="6">Tháng 6</option>
                                            <option value="7">Tháng 7</option>
                                            <option value="8">Tháng 8</option>
                                            <option value="9">Tháng 9</option>
                                            <option value="10">Tháng 10</option>
                                            <option value="11">Tháng 11</option>
                                            <option value="12">Tháng 12</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4"><label class="control-label" for="inputError"
                                                                 style="color: #ff0000"><?php echo form_error('month') ?></label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Tiêu đề:</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                    <div class="col-sm-2"><label class="control-label" for="inputError"
                                                                 style="color: #ff0000"><?php echo form_error('title') ?></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Mô tả:</label>

                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control" name="description" rows="5"
                                                  cols="80">
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Chọn avatar:</label>

                                    <div class="col-sm-3">
                                        <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                                class="btn btn-primary btn-file"><span
                                                    class="fileinput-new">Chọn file </span> <span
                                                    class="fileinput-exists">ảnh</span>
                                         <input type="file" id="userfile" name="avatar"><div
                                                    class="ripple-wrapper"></div></span> <span
                                                class="fileinput-filename"></span></div>
                                        <img id="imageselect" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    </div>
                                    <div class="col-sm-4 successful"><label class="control-label" for="inputError"
                                                                            style="color: #ff0000"> <?php if (isset($message) && $message): ?>
                                                <?php echo $message ?>
                                            <?php endif; ?></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Nội dung:</label>

                                    <div class="col-sm-8">
                                        <label class="control-label" for="inputError"
                                               style="color: #ff0000"><?php echo form_error('editor1') ?></label>
                                        <textarea id="editor1" name="editor1" rows="20" cols="80">
                                        </textarea>
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
                                        <textarea type="text" class="form-control" name="metades" cols="80"
                                                  rows="5"></textarea>
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
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3">
                                        <input type="submit" value="Thêm mới" name="submit"
                                               class="btn btn-primary pull-left">
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </div>

                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<script>

    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor

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

    $("#userfile").change(function () {
        readURL(this);
    });
    $(".successful").click(function () {
        $(".successful").hide();
    });
</script>
