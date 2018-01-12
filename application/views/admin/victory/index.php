<section class="content-header">
    <h1>
        Danh sách vinh danh
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group has-success successful">
                                <?php if(isset($message) && $message):?>
                                    <?php echo $message?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>User name</th>
                                    <th>Tháng</th>
                                    <th>Tiêu đề</th>
                                    <th>Seolink</th>
                                    <th>Avatar</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($list as $row): ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row->username ?></td>
                                        <td><?php echo $row->month ?></td>
                                        <td><?php echo $row->title ?></td>
                                        <td><?php echo $row->seolink ?></td>
                                        <td><img width="30" height="30" src="<?php echo public_url("uploads/victory/".$row->avatar)  ?>"></td>
                                        <td><a href="<?php echo admin_url('victory/edit/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/edit.png"/>
                                            </a>
                                            <a class="verify_action" href="<?php echo admin_url('victory/delete/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/delete.png"/>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="dialog-confirm" title="Xóa tin vinh danh?">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:4px 12px 20px 0;"></span><span style="font-size: 15px;color: #ff0000">Bạn có chắc chắn muốn xóa vinh danh này không ?</span> </p>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(".successful").click(function(){
        $(".successful").hide();
    });
$(function() {
    var url="";
        var title="";
        $(".verify_action").click(function(e) {
            e.preventDefault();
           url=$(this).attr("href");
            title=$(this).attr("data-id");
            $("#titledl").html(title);
            $('#dialog-confirm').dialog('open');
        });

        $( "#dialog-confirm" ).dialog({
            resizable: false,
            height:200,
            modal: true,
            minWidth: 400,
            autoOpen:false,
            buttons: {
                "OK": function() {
                    location.href=url;
                },
                Cancel: function() {
                    $( this ).dialog( "close" );
                }
            }
        });
    });
</script>
