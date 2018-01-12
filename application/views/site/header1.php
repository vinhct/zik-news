<div class="header">
    <div class="header_content">
        <div class="header_left">
            <div class="logo">
                <a href="<?php base_url("")?>">   <img src="../public/site/images/logo.png"></a>
            </div>
            <div class="game_top">
                <div class="div_game">
                    <ul>
                        <li><a href="#" class="game_dangian"></a></li>
                        <li><a href="#" class="game_slot"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header_right">
            <ul>
                <li><a href="<?php base_url("login")?>" class="btn_login"></a></li>
                <li><a href="#" class="btn_reg"></a></li>
            </ul>
        </div>
    </div>
    <div class="nav">
        <div class="nav_content">
            <nav>
                <ul>
                    <li><a class="icon_home" href="<?php echo base_url() ?>"></a></li>
                    <?php echo $menu_list ?>
                </ul>
            </nav>
        </div>
    </div>
</div>