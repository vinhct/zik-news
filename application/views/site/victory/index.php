<div class="break-crum">
    <div class="text-crum">Người chiến thắng</div>

</div>

<div class="winner">
    <div class="winner_top"></div>
    <div class="winner-content">
        <ul>
            <?php for($i = 1; $i <= 12; $i++ ): ?>
		<?php if(!empty($list)):?>
                <?php foreach($list as $row):?>
                    <?php if($i == $row->month): ?>
                        <li class="m<?php echo $row->month ?>">
                            <a href="<?php echo base_url('vinh-danh/'.$row->seolink.'-'.$row->id) ?>">
                                <div class="month-top"><span class="t<?php echo $row->month ?>"></span></div>
                                <div class="content-month" style="cursor: pointer">
                                    <div class="showinfo">
                                        <p>
                                            <img src="<?php echo public_url('uploads/victory/'.$row->avatar) ?>">
                                        </p>

                                        <p class="name-member"><?php echo $row->username ?></p>

                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endif; ?>
                <?php endforeach; ?>
		<?php endif?>
            <?php foreach($result as $key => $value):?>
            <?php if($i == $value): ?>
                        <li class="m<?php echo $value?>">
                            <a href="#">
                                <div class="month-top"><span class="t<?php echo $value?>"></span></div>

                                <div class="content-month disable" style="z-index: 1"></div>
                            </a>
                        </li>
            <?php endif; ?>
            <?php endforeach;?>
            <?php endfor;?>
        </ul>
    </div>
</div>
