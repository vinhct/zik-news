<script type="text/javascript">
    $(document).ready(function() {
        $('.slideshow').cycle({
            fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        });
    });
</script>
<div class="slideshow">
    <?php if( !empty($list1) ) {?>
    <?php foreach($list1 as $row): ?>
       <a target="_blank" href="<?php echo $row->link?>"><img src="<?php echo "../public/uploads/adv/left/".$row->images?>" style="width: 286px;float: left"/></a>
        <?php endforeach?>
    <?php }?>
</div>