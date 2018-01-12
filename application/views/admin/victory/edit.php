<section class="content-header">
    <h1>
        Cập nhật vinh danh
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
                                        <input type="text" class="form-control" name="namevic"
                                               value="<?php echo $info->username ?>">
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
                                            <?php for ($i = 1; $i <= 12; $i++): ?>
                                                <?php if ($info->month == $i): ?>
                                                    <option selected value="<?php echo $i ?>">
                                                        Tháng <?php echo $i ?></option>
                                                <?php else : ?>
                                                    <option value="<?php echo $i ?>">Tháng <?php echo $i ?></option>
                                                <?php endif; ?>
                                            <?php endfor; ?>
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
                                        <input type="text" class="form-control" name="title"
                                               value="<?php echo htmlspecialchars($info->title) ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Mô tả:</label>

                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control" name="description" rows="5"
                                                  cols="80">
                                            <?php echo htmlspecialchars($info->description) ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="imagevalue" value="<?php echo $info->avatar ?>">

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
                                        <?php if ($info->avatar != null): ?>
                                            <img id="imageselect"
                                                 src="<?php echo public_url("uploads/victory/" . $info->avatar) ?>"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php else: ?>
                                            <img id="imageselect" src="../../public/admin/images/no-image.png"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php endif; ?>
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
                                            <?php echo $info->content ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">

                                    <label class="col-sm-2 control-label">Tiêu đề page:</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="titlepage"
                                               value="<?php echo htmlspecialchars($info->titlepage) ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Keyword:</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="keyword"
                                               value="<?php echo $info->keyword ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Meta description:</label>

                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control" name="metades" cols="80" rows="5">
                                            <?php echo htmlspecialchars($info->metadescription) ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
				<div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Trạng thái</label>

                                <div class="col-sm-8">
                                    <select id="isactive" name="isActive">
                                        <option value="1" <?php if($info->isActive==1){ echo "selected";}?>>Hiển thị</option>
                                        <option value="0" <?php if($info->isActive==0){ echo "selected";}?>>Không Hiển thị</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3">
                                        <input type="submit" value="Cập nhật" name="submit"
                                               class="btn btn-primary pull-left">
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </div>

                        </div>
                    </fieldset>
            </div>
        </div>
    </div>
</section>
<script>

    $(function () {
        CKEDITOR.replace('editor1');
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
