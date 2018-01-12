<header class="main-header">
<a href="index2.html" class="logo">
    <span class="logo-mini"><b>A</b>VP</span>
    <span class="logo-lg"><b><?php echo $admin_info->username ?></b></span>
</a>
<nav class="navbar navbar-static-top">
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
</a>

<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="<?php echo public_url("admin")?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
        <span class="hidden-xs"><?php echo $admin_info->username ?></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="<?php echo public_url("admin")?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            <p>
                <?php echo $admin_info->username ?>
            </p>
        </li>
        <li class="user-footer">
            <div class="pull-right">
                <a href="<?php echo admin_url('user/logout')?>" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
</header>