<section class="content-header">
    <h1>
      Cập nhật tin tức
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

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="title" id="title" value="<?php echo  htmlspecialchars($info->title)?>">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Mô tả:</label>
                                <div class="col-sm-8">
                                    <textarea id="desc" name="desc" rows="20" cols="80">
                                        <?php echo $info->description?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Nội dung:</label>

                                <div class="col-sm-8">
                                    <textarea id="content" name="content" rows="20" cols="80">
                                         <?php echo $info->content?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Thứ tự:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="orderno" name="orderno" value=" <?php echo $info->orderNo?>">
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
                                    <?php if ($info->images != null): ?>
                                        <img id="imageselect"
                                             src="<?php echo public_url("uploads/news/" . $info->images) ?>"
                                             style="margin-top: 5px;width: 150px">
                                    <?php else: ?>
                                        <img id="imageselect" src="../../public/admin/images/no-image.png"
                                             style="margin-top: 5px;width: 150px">
                                    <?php endif; ?>
                                    <input type="hidden" name="imagevalue" value="<?php echo $info->images ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Hiển thị trang chủ:</label>

                                <div class="col-sm-3">
                                    <?php if ($info->isHome ==1): ?>
                                        <input type="checkbox" name="chk" value="1" checked>
                                        <?php else: ?>
                                        <input type="checkbox" name="chk" value="0">
                                    <?php endif?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Hiển thị chính sách:</label>

                                <div class="col-sm-3">
                                    <?php if ($info->chinhsach ==1): ?>
                                        <input type="checkbox" name="chinhsach" value="1" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="chinhsach" value="0">
                                    <?php endif?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề page:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="titlepage" value="<?php echo htmlspecialchars($info->titlePage)?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Keyword:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="keyword" value="<?php echo htmlspecialchars($info->keyword)?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Meta description:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="metadesc"  value="<?php echo htmlspecialchars($info->metaDescription)?>">
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
                                <label class="col-sm-2 control-label">Ngày đăng</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="datepicker" name="ExpireDate" value="<?php echo $info->ExpireDate?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <input type="submit" value="Cập nhật" name="editnews"
                                           class="btn btn-primary pull-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>

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
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
</script>