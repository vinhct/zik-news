<div class="break-crum">
    <div class="text-crum"><?php echo $catetitle ?></div>

</div>

<div class="news-home">
    <?php $i = 1 ?>
    <?php if (!empty($list)): ?>
        <div class="benefit">

            <div class="bd">
                <div class="vip">
                    <div class="content_polices">
                        <div class="guide">
                            <table>
                                <?php foreach ($list as $row): ?>
                                    <tr>
                                        <td ><a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><span><?php echo $row->title ?></span></a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <h3 style="color: wheat">
            Đang cập nhật .....
        </h3>
    <?php endif; ?>
</div>
