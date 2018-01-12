<script type="text/javascript">
    $(document).ready(function() {
        $('.slideshow').cycle({
            fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        });
    });
</script>
<div class="slideshow">

    <?php if (!empty($list2)) { ?>
        <?php foreach ($list2 as $row): ?>
    <a target="_blank" href="<?php echo $row->link?>"><img src="<?php echo public_url('uploads/adv/right/' . $row->images)?>" style="width: 286px;float: left"/></a>
        <?php endforeach ?>
    <?php } ?>
</div>