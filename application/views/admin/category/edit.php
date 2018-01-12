<section class="content-header">
    <h1>
        Quản lý danh mục
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Cập nhật danh mục</h3>
                </div>
                <!-- /.box-header -->
                <form id="form" class="form" enctype="multipart/form-data" method="post" action="">
                    <fieldset>
                        <div class="box-body">
                            <div class="form-group ">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="namecate"
                                               value="<?php echo $info->catname ?>">
                                    </div>
                                    <div class="col-sm-4"><label class="control-label" for="inputError"
                                                                 style="color: #ff0000"><?php echo form_error('namecate') ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Danh mục cha:</label>

                                    <div class="col-sm-3">
                                        <?php echo $list; ?>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Kiểu  trang:</label>

                                    <div class="col-sm-3">
                                        <select class="form-control" name="typepage">
                                            <option value="0" <?php if($info->typepage == 0){ echo "selected"; } ?>>Tin tức</option>
                                            <option value="1" <?php if($info->typepage == 1){ echo "selected"; } ?>>Vinh danh</option>
                                            <option value="2" <?php if($info->typepage == 2){ echo "selected"; } ?>>Thưởng vip</option>
                                            <option value="3" <?php if($info->typepage == 3){ echo "selected"; } ?>>Liên hệ</option>
                                            <option value="4" <?php if($info->typepage == 4){ echo "selected"; } ?>>FAQ</option>
                                            <option value="5" <?php if($info->typepage == 5){ echo "selected"; } ?>>Chính sách</option>
                                            <option value="6" <?php if($info->typepage == 6){ echo "selected"; } ?>>Hướng dẫn</option>
                                            <option value="7" <?php if($info->typepage == 7){ echo "selected"; }?>>Vòng quay vip</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Mô tả:</label>

                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control" name="description" cols="80"
                                                  rows="5"><?php echo $info->description ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Thứ tự hiển thị:</label>

                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="orderno"
                                               value="<?php echo $info->orderno ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Hiển thị menu footer:</label>

                                    <div class="col-sm-3">
                                        <?php if ($info->isfooter == 1): ?>
                                            <input type="checkbox" name="menufooter" checked
                                                   value="<?php echo $info->orderno ?>">
                                        <?php else : ?>
                                            <input type="checkbox" name="menufooter" value="1">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-2 control-label">Tiêu đề page:</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="titlepage"
                                               value="<?php echo $info->titlePage ?>">
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
                                        <input type="text" class="form-control" name="metades"
                                               value="<?php echo $info->metaDescription ?>">
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
                </form>
            </div>
        </div>
    </div>
</section>
