<section class="content-header">
    <h1>
        Thêm mới FAQ
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <!-- /.box-header -->
                <form id="form-news-add" class="form" enctype="multipart/form-data" method="post" action="" novalidate="novalidate">
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
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Nội dung:</label>

                                <div class="col-sm-8">
                                    <textarea id="content" name="content" rows="20" cols="80">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Thứ tự:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="orderno" name="orderno" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Trạng thái:</label>

                                <div class="col-sm-3">
                                  <select class="form-control" id="status" name="status">
                                      <option value="0">Không hiển thị</option>
                                      <option value="1">Hiển thị</option>
                                  </select>
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
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <input type="submit" value="Thêm mới" name="addnews"
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