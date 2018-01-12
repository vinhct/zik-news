<section class="content-header">
    <h1>
        Quản lý tin tức
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
                        <form method="get" action="<?php echo admin_url('news') ?>" class="list_filter form">
                            <div class="col-sm-12" style="margin-bottom: 10px">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Tiêu đề" value="<?php echo $title ?>">
                                        </div>
                                        <div class="col-sm-3">
                                            <select name="category" id="" class="form-control">
                                                <option value="">--Chọn danh mục--</option>
                                                <?php foreach ($allCate as $cate): ?>
                                                    <option value="<?php echo $cate->id?>" <?php if($cate->id==$category): ?>selected<?php endif; ?>><?php echo $cate->catname ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="reset" onclick="window.location.href = '<?php echo admin_url('news')?>'; " value="Reset" class="btn btn-primary pull-right" style="float: left;margin-left: 10px">
                                            <input type="submit" value="Tìm kiếm " class="btn btn-primary pull-right" style="float: left">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-sm-12">
                            <table id="tblnews" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Danh mục</th>
 				    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($list as $row): ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row->title ?></td>
                                        <td><?php echo $row->catName ?></td>
					<td><?php if ($row->isActive == 1): ?>
                                                <?php echo "Hiển thị" ?>
                                            <?php else: ?>
                                                <span style="color: #ff0000"><?php echo "Không hiển thị" ?></span>
                                            <?php endif ?>
                                        </td>                                    
   					 <td>
                                            <a href="<?php echo admin_url('news/edit/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/edit.png"/>
                                            </a>
                                            <a class="verify_action"
                                               href="<?php echo admin_url('news/delete/' . $row->id) ?>" data-id="<?php echo $row->title ?>">
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
<div id="dialog-confirm" title="Xóa tin tức?">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:4px 12px 20px 0;"></span><span style="font-size: 15px;color: #ff0000">Bạn có chắc chắn muốn xóa tin <span id="titledl"></span>  này không ?</span> </p>
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
