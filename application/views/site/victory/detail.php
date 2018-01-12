<div class="content_left">
    <div class="break-crum">
        <div class="text-crum"><?php echo $info->title ?></div>
        <div class="line-top"></div>
    </div>
    <div class="content_news">
        <?php echo $info->content ?>
    </div>
    <?php if ($list != false): ?>
        <div class="content_news_other">

            <span> Các tin khác</span>
            <ul>
                <?php foreach ($list as $row): ?>
                    <li><a href="<?php base_url('victory/detail/' . $row->id) ?>"><?php echo $row->title ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else: ?>
    <?php endif; ?>
</div>