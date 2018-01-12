<div class="break-crum">
    <div class="text-crum">FAQ</div>

</div>

<div class="news-home">
    <div class="benefit">
        <div class="tit-benefit">Các câu hỏi thường gặp</div>
        <div class="bd">
            <div class="vip">
                <div class="content_polices">
                    <div class="tablevip" style="color: #fff">
                        <?php $i = 1 ?>
                        <?php foreach ($list as $row): ?>
                            <div class="item-faq">
                                <div>
                                    <p>
                                        <strong><?php echo $i?>. Hỏi:</strong> <em><em><?php echo $row->question?></em></em>
                                    </p>
                                </div>
                                <div class="answer"><strong style="color: #ff9700;">Trả lời:</strong>
                                   <p> <?php echo $row->answer?></p>
                                </div>
                                <p></p>
                            </div>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>