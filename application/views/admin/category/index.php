<section class="content-header">
    <h1>
        Danh sách danh mục
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
                                    <th>Tên danh mục</th>
                                    <th>Seo link</th>
                                    <th>Tiêu đề page</th>
                                    <th>Key word</th>
                                    <th>Loại</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php echo $list; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="dialog-confirm" title="Xóa danh mục tin tức?">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:4px 12px 20px 0;"></span><span style="font-size: 15px;color: #ff0000">Bạn có chắc chắn muốn xóa danh mục này không ?</span> </p>
</div>

<script>
    $(".successful").click(function(){
        $(".successful").hide();
    });
    $(function() {
        $(".verify_action").click(function(e) {
            e.preventDefault();
            $('#dialog-confirm').dialog('open');
        });

        $( "#dialog-confirm" ).dialog({
            resizable: false,
            height:160,
            modal: true,
            minWidth: 450,
            autoOpen:false,
            buttons: {
                "OK": function() {
                    location.href=$(".verify_action").attr("href");
                },
                Cancel: function() {
                    $( this ).dialog( "close" );
                }
            }
        });
    });
</script>