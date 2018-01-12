<div class="col-md-9 col-sm-12 col-xs-12 " id="listnew">
    <?php if (!empty($list)): ?>
        <?php $i = 1; ?>
        <?php foreach ($list as $row): ?>
            <?php if ($i <= 5): ?>
                <article>
                    <div class="box">
                        <div class="entry-thumbnail">
                            <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">
                                <div class="post-thumbnail"><img
                                        src="<?php echo public_url('uploads/news/' . $row->images) ?>"></div>
                            </a>
                        </div>
                        <div class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?> </a>
                            </h2>

                            <div class="entry-meta"><span class="category">Lúc: <?php echo date("d/m/Y", strtotime($row->createTime)) ?></span></div>
                        </div>
                        <div class="entry-content">
                            <p><?php echo trim_text($row->description, 400) ?></p>
                        </div>
                        <div class="entry-button">
                            <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><img src="<?php echo public_url('site/images/btn-chitiet.png')?>"></a>
                        </div>
                        <div class="clear"></div>
                    </div>

                </article>
            <?php else : ?>
                <article>
                    <div class="box">
                        <div class="entry-thumbnail">
                            <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">
                                <div class="post-thumbnail"><img
                                        src="<?php echo public_url('uploads/news/' . $row->images) ?>"></div>
                            </a>
                        </div>
                        <div class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?> </a>
                            </h2>

                            <div class="entry-meta"><span class="category">Lúc: <?php echo date("d/m/Y", strtotime($row->createTime)) ?></span></div>
                        </div>
                        <div class="entry-content">
                            <p><?php echo trim_text($row->description, 400) ?></p>
                        </div>
                        <div class="entry-button">
                            <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><img src="<?php echo public_url('site/images/btn-chitiet.png')?>"></a>
                        </div>
                        <div class="clear"></div>
                    </div>

                </article>
            <?php endif ?>
            <?php $i++ ?>
        <?php endforeach; ?>
    <?php endif ?>

<?php  if($count>6):?>
        <div class="pagination">
        </div>
    <?php endif; ?>

</div>
<script>
    // Get the modal
//    var modal = document.getElementById('myModal');
//    // Get the button that opens the modal
//    var btn = document.getElementById("myBtn");
//    // Get the <span> element that closes the modal
//    var span = document.getElementsByClassName("close")[0];
//    // When the user clicks on <span> (x), close the modal
////    span.onclick = function () {
////        modal.style.display = "none";
////    }
//
//    // When the user clicks anywhere outside of the modal, close it
//    window.onclick = function (event) {
//        if (event.target == modal) {
//            modal.style.display = "none";
//        }
//    }
    $(document).ready(function () {
        Pagging();
        if ($("#popup").val() == "1") {
            popunder();
        }
    });
    function Pagging() {
        var items = $("#listnew article");
        var numItems = items.length;
        $("#num").html(numItems);
        var perPage = 5;
        // only show the first 2 (or "first per_page") items initially
        items.slice(perPage).hide();
        // now setup pagination
        $(".pagination").pagination({
            items: numItems,
            itemsOnPage: perPage,
            cssStyle: "",
            onPageClick: function (pageNumber) { // this is where the magic happens
                // someone changed page, lets hide/show trs appropriately
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;

                items.hide() // first hide everything, then show for the new page
                    .slice(showFrom, showTo).show();
            }
        });
    }
    //xu ly popup hien thi 1 lan 1 ngay theo ip

</script>
