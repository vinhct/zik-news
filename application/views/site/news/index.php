
<?php if(!empty($info)):?>
<?php if($info->isActive==1):?>

<div class="col-md-9 col-sm-12 col-xs-12 " id="listnew">
    <div class="main-content">
        <article>
            <div class="entry-header">
                <h2 class="entry-title">
                    <a href="#" rel="bookmark" title="">
                        <?php echo $info->title ?>
                        </a>
                </h2>

                <div class="entry-meta"><span class="category">Lúc: <?php echo date("d/m/Y", strtotime($info->createTime)) ?></span></div>
            </div>
            <div class="entry-content">
                <?php echo $info->content ?>
            </div>
        </article>
    </div>

</div>
<?php else:?>
    <div class="col-md-9 col-sm-12 col-xs-12 " id="listnew">
        <div class="main-content">
            <article>
                <div class="entry-header">
                    <h2 class="entry-title">
                        <a href="" rel="bookmark" title="">
                            Bài viết không tồn tại .....!
                    </h2>
                </div>
            </article>
        </div>
    </div>
<?php endif?>

<?php else:?>
    <div class="col-md-9 col-sm-12 col-xs-12 " id="listnew">
        <div class="main-content">
            <article>
                <div class="entry-header">
                    <h2 class="entry-title">
                        <a href="" rel="bookmark" title="">
                            Bài viết không tồn tại .....!
                    </h2>
                </div>
            </article>
        </div>
    </div>
<?php endif?>
<script type="text/javascript">
  $("document").ready(function(){
    var url      = window.location.href; 
    $(".fb-like").attr("data-href",url);
  });
            function ratestar($id,$rate){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("home/updateRate")?>',
                    data:{'id':$id,'rate':$rate},
                    success: function(data) { 
                       location.reload();
                    }
                });
            }
        </script>

<script async src="//static.addtoany.com/menu/page.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
    $(document).ready(function() {
         $('link[rel=canonical]').attr('href',$(location).attr('href') );
    });
</script>
