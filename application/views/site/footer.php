<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <ul class="ul-footer">
                    <?php echo $listfooter ?>

                </ul>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="ft-thanhtoan">
                    <div>
                        <span>Các phương thức thanh toán</span>
                    </div>
                    <div>
                        <img src="<?php echo public_url("site/images/nhamang.png")?>">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="ft-thanhtoan">
                    <div>
                        <span>Kết nối với chúng tôi</span>
                    </div>

                    <ul>
                        <li><a target="_blank" href="<?php echo $linkface ?>"> <img
                                    src="<?php echo public_url("site/images/logo-kn6.png") ?>"></a></li>
                        <li><a target="_blank" href="<?php echo $linkgoogle ?>"> <img
                                    src="<?php echo public_url("site/images/logo-kn5.png") ?>"></a></li>

                        <li><a target="_blank" href="<?php echo $linkyoutube ?>"> <img
                                    src="<?php echo public_url("site/images/logo-kn4.png") ?>"></a></li>
                        <li><a target="_blank" href="<?php echo $linktwiter ?>"> <img
                                    src="<?php echo public_url("site/images/logo-kn3.png") ?>"></a></li>
                        <li><a target="_blank" href="#"> <img
                                    src="<?php echo public_url("site/images/logo-kn2.png") ?>"></a></li>
                        <li><a target="_blank" href="<?php echo $linkblog ?>"> <img
                                    src="<?php echo public_url("site/images/logo-kn1.png") ?>"></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</footer>
<?php echo $codeGA ?>
<script type='text/javascript'>
//<![CDATA[
// JavaScript Document
var message="NoRightClicking"; function defeatIE() {if (document.all) {(message);return false;}} function defeatNS(e) {if (document.layers||(document.getElementById&&!document.all)) { if (e.which==2||e.which==3) {(message);return false;}}} if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;} else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;} document.oncontextmenu=new Function("return false")
//]]>
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '483878731961520');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=483878731961520&ev=PageView&noscript=1"
/></noscript>
<script>
<!-- End Facebook Pixel Code -->
// Purchase
// Track purchases or checkout flow completions (ex. landing on "Thank You" or confirmation page)
fbq('track', 'Purchase', {value: '1.00', currency: 'USD'});
// CompleteRegistration
// Track when a registration form is completed (ex. complete subscription, sign up for a service)
fbq('track', 'CompleteRegistration');
</script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 870957946;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/870957946/?guid=ON&amp;script=0"/>
</div>
</noscript>
