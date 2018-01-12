<section class="content-header">
    <h1>
        Thêm mới quảng cáo
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
                                <label class="col-sm-2 control-label">Tiêu đề:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="title" name="title" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Đường dẫn:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="link" name="link" value="">
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
                                <label class="col-sm-2 control-label">Ví trí:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="position" name="position">

                                        <option value="1">Bên phải</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh quảng cáo:</label>
                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span
                                                class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="images" name="images"><div class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span></div>
                                    <img id="imageselect" src="../../public/admin/images/no-image.png"
                                         style="margin-top: 5px;width: 150px">
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
<script src="../../public/site/js/validate-adv.js"></script>
<script type="javascript">
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