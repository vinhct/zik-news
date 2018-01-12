<section class="content-header">
    <h1>
        Cập nhật FAQ
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
                                <label class="col-sm-2 control-label">Dịch vụ:</label>

                                <div class="col-sm-3">
                                    <?php echo $list; ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Danh mục:</label>
                                <div class="col-sm-3">
                                    <select id="category" name="category" class="form-control">
                                        <option value="">Chọn danh mục</option>
                                    </select>
                                    <input type="hidden" value="<?php echo $info->parent_id?>" id="cate">
                                </div>
                                <div class="col-sm-4">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Câu hỏi:</label>
                                <div class="col-sm-8">
                                    <textarea id="desc" name="desc" rows="20" cols="80">
                                        <?php echo $info->question?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Nội dung:</label>

                                <div class="col-sm-8">
                                    <textarea id="content" name="content" rows="20" cols="80">
                                         <?php echo $info->answer?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Thứ tự:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="orderno" name="orderno" value=" <?php echo $info->orderno?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Trạng thái:</label>

                                <div class="col-sm-3">
                                    <select class="form-control" id="status" name="status">
                                        <?php if($info->status==0):?>
                                        <option value="0" selected>Không hiển thị</option>
                                            <?php else: ?>
                                            <option value="0">Không hiển thị</option>
                                        <?php endif?>
                                        <?php if($info->status==1):?>
                                            <option value="1" selected>Hiển thị</option>
                                        <?php else: ?>
                                            <option value="1">Hiển thị</option>
                                        <?php endif?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề page:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="titlepage" value="<?php echo htmlspecialchars($info->titlepage)?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Keyword:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="keyword"  value="<?php echo htmlspecialchars($info->keyword)?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Meta description:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="metadesc" value="<?php echo htmlspecialchars($info->metadescription)?>">
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
                </form>
            </div>
        </div>
</section>
<script src="../../public/site/js/validate-faq.js"></script>
<script>

    $(function () {
        $.ajax({
            type:'GET',
            url:'<?php echo base_url("admin/faq/get_service_category_edit"); ?>',
            data:{id:$( "#service option:selected").val(),parent_id:$("#cate").val()},
            success:function(data){
                $("#category").html(data);
            }
        });
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('desc');
        CKEDITOR.replace('content');
    });
    $("#service").change(function(){
        $.ajax({
            type:'GET',
            url:'<?php echo base_url("admin/faq/get_service_category"); ?>',
            data:{id:$(this).val()},
            success:function(data){
                $("#category").html(data);
            }
        });
    });
</script>