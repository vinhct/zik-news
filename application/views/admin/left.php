<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo public_url("admin")?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $admin_info->username ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li>
                <a href="<?php echo admin_url() ?>">
                    <span>Trang chủ</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Người dùng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo admin_url("user") ?>"><i class="fa fa-circle-o"></i> Danh sách người dùng</a></li>
                    <li><a href="<?php echo admin_url("user/add") ?>"><i class="fa fa-circle-o"></i> Thêm mới người dùng</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Danh mục tin tức</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo admin_url("category") ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="<?php echo admin_url("category/add") ?>"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Danh mục FAQ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo admin_url("category/listfaq") ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="<?php echo admin_url("category/addfaq") ?>"><i class="fa fa-circle-o"></i> Thêm mới danh mục FAQ</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Vinh danh</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo admin_url("victory") ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="<?php echo admin_url("victory/add") ?>"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Thưởng vip</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo admin_url("bonusvip") ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="<?php echo admin_url("bonusvip/add") ?>"><i class="fa fa-circle-o"></i> Thêm mới </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Tin tức</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo admin_url("news") ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="<?php echo admin_url("news/add") ?>"><i class="fa fa-circle-o"></i> Thêm mới </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Hỏi đáp</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo admin_url("faq") ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="<?php echo admin_url("faq/add") ?>"><i class="fa fa-circle-o"></i> Thêm mới </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Quảng cáo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo admin_url("adv") ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="<?php echo admin_url("adv/add") ?>"><i class="fa fa-circle-o"></i> Thêm mới </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Hệ thống</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo admin_url("system") ?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="<?php echo admin_url("system/add") ?>"><i class="fa fa-circle-o"></i> Thêm mới </a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<script>
jQuery(function ($) {
    $("ul a").click(function(e) {
            var link = $(this);
            var item = link.parent("li");
            if (item.hasClass("active")) {
                item.removeClass("active").children("a").removeClass("active");
            } else {
                item.addClass("active").children("a").addClass("active");
            }
            if (item.children("ul").length > 0) {
                var href = link.attr("href");
                console.log(href);
                link.attr("href", "#");
                setTimeout(function () {
                    link.attr("href", href);
                }, 3000);
                e.preventDefault();
            }
        })
        .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("active").parents("li").addClass("active ");
                return false;
            }
        });
});

</script>