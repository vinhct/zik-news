<section class="content-header">
    <h1>
       cập nhật hệ thống
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <form id="form-news-add" class="form" enctype="multipart/form-data" method="post" action=""
                      novalidate="novalidate">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Đường dẫn facebook:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="linkface" name="linkface" value="<?php echo $info->linkface?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Đường dẫn google:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="linkgoogle" name="linkgoogle" value="<?php echo $info->linkgoogle?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Đường dẫn youtube:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="linkyoutube" name="linkyoutube" value="<?php echo $info->linkyoutube?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Đường dẫn blog:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="linkblog" name="linkblog" value="<?php echo $info->linkblog?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Đường dẫn twiter:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="linktwiter" name="linktwiter" value="<?php echo $info->linktwiter?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">CodeGA:</label>

                                <div class="col-sm-8">
                                    <textarea cols="175" rows="15" id="codeGa" name="codeGa" ><?php echo $info->codeGA ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Liên hệ:</label>

                                <div class="col-sm-8">
                                    <textarea id="contact" name="contact" rows="20" cols="80">
                                        <?php echo $info->contact ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh Login:</label>
                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="images" name="images"><div class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span> </div>
                                    <?php if ($info->images != null): ?>
                                        <img id="imageselect"
                                             src="<?php echo public_url("uploads/adv/" . $info->images) ?>"
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
                                <label class="col-sm-2 control-label">Đường dẫn login:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="linklogin" name="linklogin" value="<?php echo $info->linklogin ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Thẻ H1:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="txth1" value="<?php echo $info->h1?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề page:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="titlepage" value="<?php echo $info->titlePage?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Keyword:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="keyword" value="<?php echo $info->keyword ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Meta description:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="metadesc" value="<?php echo $info->metaDescription?>">
                                </div>
                            </div>
                        </div>
         		 <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Sign:</label>

                                <div class="col-sm-8">
                                     <textarea id="sign" name="sign" rows="20" cols="80"><?php echo $info->sign?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Hiển thị popup:</label>
                                <div class="col-sm-8">
                                     <?php if ($info->ispopup == 1): ?>
                                            <input type="checkbox" name="ispopup" checked>
                                        <?php else : ?>
                                            <input type="checkbox" name="ispopup" value="1">
                                        <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Đường dẫn popup:</label>
                                <div class="col-sm-8">
                                     <input type="text" class="form-control" name="linkpopup" value="<?php echo $info->linkpopup ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <input type="submit" value="Cập nhật" name="addnews"
                                           class="btn btn-primary pull-right">
                                </div>
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
        CKEDITOR.replace('contact');
		CKEDITOR.replace('sign');
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
</script>
