<div class="col-md-3 col-sm-12 col-xs-12">
    <div class="sidebar">

        <?php if($list2 != false): ?>
        <li id="random_banner_widget-2" class="widget widget_random_banner_widget">
            <a href="<?php  echo $list2[0]->link?>"><img src="<?php echo public_url('uploads/adv/right/'.$list2[0]->images)?>" width="277" height="278"></a>
        </li>
        <?php endif; ?>
        <li id="wpt_widget-3" class="widget widget_wpt">
            <div class="wpt_widget_content" id="wpt_widget-3_content" data-widget-number="3">
                <ul class="wpt-tabs has-2-tabs">
                    <li class="tab_title selected hover"><label id="popular-tab">Tin Tức</label></li>
                </ul>
                <div class="clear"></div>
                <div class="inside">
                    <div id="popular-tab-content" class="tab-content">
                        <ul>
                            <?php if($listright != false): ?>
                                <?php foreach($listright as $row): ?>
                                <li>
                                    <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?> </a>
                                </li>
                                    <?php endforeach; ?>
                            <?php endif; ?>


                        </ul>
                    </div>
                </div>

            </div>
        </li>
        <li id="fbw_id-2" class="widget widget_fbw_id">
            <div class="fb-page" data-href="<?php echo $linkface ?>" data-small-header="false"
                 data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a
                        href="<?php echo $linkface ?>"></a></blockquote>
            </div>
        </li>

    </div>
    <div id="fb-root"></div>
</div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=532997920162382";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script>


</script>
