<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <a href="<?php echo base_url() ?>"><img src="<?php echo public_url('site/images/logo1.png') ?>"></a>
                </div>
                <div class="linkgame">
                    <ul>
                        <li>
                            <a href="http://zum.club/"><img src="<?php echo public_url('site/images/gamedg.png') ?>"></a>
                        </li>
                        <li>
                            <a href="http://zum.club/"><img src="<?php echo public_url('site/images/gamesl.png') ?>"></a>
                        </li>
                    </ul>
                </div>
                <div class="register">
                    <ul>
                        <li>
                            <a href="http://zum.club/"><img src="<?php echo public_url('site/images/user.png') ?>"><span>Đăng ký</span></a>
                        </li>
                        <li>
                            <a href="http://zum.club/"><img src="<?php echo public_url('site/images/logout.png') ?>"><span>Đăng nhập</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">

        </div>


    </div>

</header>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="<?php echo base_url() ?>">Trang chủ</a></li>
                <?php echo $menu_list ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form action="<?php echo base_url('search') ?>" method="get">
                        <input type="text" placeholder="Tìm kiếm" id="searchIn" name="title">
                        <button type="submit" id="search_button"><img src="<?php echo public_url('site/images/search.png')?>"></button>
                    </form>

                </li>

            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
