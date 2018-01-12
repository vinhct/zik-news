<section class="content-header">
    <h1>
        Quản lý FAQ
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
                                <?php if (isset($message) && $message): ?>
                                    <?php echo $message ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <form method="get" action="<?php echo admin_url('faq') ?>" class="list_filter form">
                            <div class="col-sm-12" style="margin-bottom: 10px">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <label class="col-sm-2 control-label">Câu hỏi:</label>

                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="question" id="question">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="reset" onclick="window.location.href = '<?php echo admin_url('faq')?>'; " value="Reset" class="btn btn-primary pull-right" style="float: left;margin-left: 10px">
                                            <input type="submit" value="Tìm kiếm " class="btn btn-primary pull-right" style="float: left">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Câu hỏi</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($list as $row): ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row->question ?></td>
                                        <td><?php
                                            if($row->status==1){
                                                echo "Hiển thị";
                                            }
                                            else{
                                                echo "Không hiển thị";
                                            }

                                            ?></td>
                                        <td>
                                            <a href="<?php echo admin_url('faq/edit/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/edit.png"/>
                                            </a>
                                            <a  class="verify_action" href="<?php echo admin_url('faq/delete/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/delete.png"/>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                        <div id="pagination" style="float: right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="dialog-confirm" title="Xóa faq?">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:4px 12px 20px 0;"></span><span style="font-size: 15px;color: #ff0000">Bạn có chắc chắn muốn xóa faq này không ?</span> </p>
</div>

<script>
    $(document).ready(function () {
        Pagging();
    });
    function Pagging() {
        var items = $("tbody tr");
        var numItems = items.length;
        $("#num").html(numItems);
        var perPage = 20;
        // only show the first 2 (or "first per_page") items initially
        items.slice(perPage).hide();
        // now setup pagination
        $("#pagination").pagination({
            items: numItems,
            itemsOnPage: perPage,
            cssStyle: "light-theme",
            onPageClick: function (pageNumber) { // this is where the magic happens
                // someone changed page, lets hide/show trs appropriately
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;

                items.hide() // first hide everything, then show for the new page
                    .slice(showFrom, showTo).show();
            }
        });
    }
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