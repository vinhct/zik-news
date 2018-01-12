<div class="break-crum">
    <div class="text-crum">Thưởng vip <span style="font-size:13px;color:#ec008b"> (Sắp ra mắt)</span></div>

</div>
<div class="page_vip">
    <div class="content_page_left"></div>
    <div class="content_page_right">

        <div class="bd">
            <div class="vip">
                <form action="<?php echo base_url('bonusvip') ?>" method="get">
                    <div class="filter">
                        <div class="search">
                            <input type="text" id="txtKeyWork" maxlength="100" name="title"
                                   placeholder="Nhập nội dung cần tìm" class="input-txt" autocomplete="off">
                            <input type="submit" id="submit" value="Tìm kiếm" class="btnsearch">
                        </div>
                        <div class="listbyprice">
                            <ul>
                                <li>Phạm vi</li>
                                <li>
                                    <input type="text" name="minvalue" placeholder="10000" class="input-txt"
                                           id="minvalue" value="10.000" readonly
                                           autocomplete="off"></li>
                                <li>
                                    <div class="pricebar">
                                        <p>
                            <span class="activebar" style="width: 30%;">
                                <span class="minbar"></span>
                                <span class="maxbar ui-draggable ui-draggable-handle"
                                      style="width: 14px; right: auto; left: 58px; top: -3px;"></span>
                            </span>
                                        </p>

                                    </div>
                                </li>

                                <li>
                                    <input id="maxvalue" type="text" name="maxvalue" placeholder="1000000"
                                           value="1.000.000" readonly
                                           class="input-txt" autocomplete="off"></li>
                                <li>Điểm</li>
                            </ul>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<div class="page_vip1">
    <div class="content_page_left"></div>
    <div class="content_page_right">
        <div class="bonus-gift">
            <ul>
                <?php $i = 1; ?>
                <?php foreach ($list as $row): ?>
                    <li>
                        <div class="bouns_vip">
                            <div class="bonus">
                                <div class="bonus-imges">
                                    <div class="title_bonus">
                                        <div class="text_bouns"><?php echo $row->title ?></div>
                                    </div>
                                    <div class="title_vp">
                                        <div class="text_vp"> <?php echo "VP: " . number_format($row->vippoint) ?></div>
                                    </div>
                                    <img height="115" src="<?php echo public_url('uploads/bonusvip/' . $row->images) ?>">
                                </div>

                                <div class="bonus-doiqua">
                                    <div class="btnbox">
                                        <a href="#" class="exchange"
                                           onclick="PopupProduct.ClickToDetail('<?php echo $i ?>');">Đổi quà</a>
                                        <a href="#modal-<?php echo $i ?>"
                                           onclick="PopupProduct.ClickToDetail('<?php echo $i ?>');">Chi tiết</a>
                                    </div>
                                </div>
                                <div class="bonus-detail">
                                    <a href="#" id="a<?php echo $i ?>">
                                        <input type="hidden" class="imgpro"
                                               value="<?php echo public_url('uploads/bonusvip/' . $row->images) ?>">
                                        <input type="hidden" class="namepro" value="<?php echo $row->title ?>">
                                        <input type="hidden" class="vp-text"
                                               value="<?php echo number_format($row->vippoint) ?>">
                                        <input type="hidden" class="vin-text"
                                               value="<?php echo number_format($row->vin) ?>">
                                        <input class="hiddenField" type="hidden"
                                               value="<?php echo $row->description ?>">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </li>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </ul>
        </div>

        <!--<div class="pagination">-->
        <!--    <ul>-->
        <!--        <li><a href="#">Trang trước</a></li>-->
        <!--        <li><a class="current" href="#">1</a></li>-->
        <!--        <li><a href="#">2</a></li>-->
        <!--        <li><a href="#">3</a></li>-->
        <!--        <li><a href="#">Trang sau</a></li>-->
        <!--    </ul>-->
        <!--</div>-->
    </div>
</div>
<div id="LoadingOverlay" style="display:none"></div>
<div id="productPopup" style="display:none;min-height:250px">
    <div class="pad_dialog">
        <a href="javascript:PopupProduct.CloseDialog();" class="btn-close" aria-hidden="true">&nbsp;</a>

        <div class="modal-body">
            <div class="img-info-pro">
                <p><img id="popupImg" src="" style="width:160px"></p>

                <div class="action">
                    <p id="popupVpText" class="vp-text"></p>

                    <p id="popupVin" class="vin-text"></p>
                </div>
                <div class="btnbox">
                    <a href="#" class="exchange change1">Đổi quà</a>

                    <p class="rik-text warningtext"></p>
                </div>
            </div>
            <div class="listinfo-pro">
                <div class="tit-pro" id="popupName"></div>
                <div id="popupDescription">

                </div>
            </div>
        </div>
    </div>
</div>
<script language="javascript">
    var startPosition = $('.pricebar').offset().left;
    var stopPosition = startPosition + $('.pricebar').width();

    var _startLeft = $('.pricebar').offset().left;
    var _width = $('.pricebar').outerWidth() - 10;
    var _percent, _currentLeft;


    $(document).ready(function () {
        var value = 0;
        $(".maxbar").draggable({
            axis: "x",
            drag: function (event, ui) {

                var offset = $(this).offset();
                _currentLeft = offset.left;
                _percent = parseInt((_currentLeft - _startLeft) / _width * 100);

                if (_percent >= 0 && _percent <= 10) value = 20000;
                else if (_percent >= 11 && _percent <= 20) value = 40000;
                else if (_percent >= 21 && _percent <= 30) value = 60000;
                else if (_percent >= 31 && _percent <= 40) value = 80000;
                else if (_percent >= 41 && _percent <= 50) value = 100000;
                else if (_percent >= 51 && _percent <= 60) value = 200000;
                else if (_percent >= 61 && _percent <= 70) value = 400000;
                else if (_percent >= 71 && _percent <= 80) value = 600000;
                else if (_percent >= 81 && _percent <= 90) value = 800000;
                else if (_percent >= 91 && _percent <= 100) value = 1000000;

                $('#maxvalue').attr('placeholder', PopupProduct.formatMoney(value));
                $('#maxvalue').attr('value', PopupProduct.formatMoney(value));
                $('.activebar').css('width', _percent + '%');
            },
            containment: $('.pricebar')
        });

        $("#txtKeyWork").keyup(function (e) {
            if (e.which == 13) {
                doSearch();
            }
        })

        $(".change1").click(function () {
            $(".warningtext").html("Coming soon...");
            $(".warningtext").show();
            return false;
        })
    });
    var PopupProduct = new function () {
        this.ClickToDetail = function (param) {
            $("#LoadingOverlay").show();
            var obj_a = $('#a' + param);
            var img_src = obj_a.children('.imgpro').val();
            var name = obj_a.children('.namepro').val();
            var vp = "VP: " + obj_a.children('.vp-text').val();
            var vin = "ZIK: " + obj_a.children('.vin-text').val();
            var description = obj_a.children('.hiddenField').val().split('|');
            var html = '';

            $("#popupImg").attr('src', img_src);
            $("#popupVpText").text(vp);
            $("#popupVin").text(vin);
            $("#popupName").text(name);

            for (var i = 0; i < description.length; i++) {
                html += '<p>' + description[i] + '</p>';
            }
            $("#popupDescription").remove();
            $(".listinfo-pro").append('<div id="popupDescription">' + html + '</div>');

            $("#productPopup").dialog({
                width: 550,
                model: true,
                dialogClass: "modal-product"
            }).parent('.ui-dialog').css({'z-index': 9999});
            $('.ui-dialog-titlebar-close').hide();
            $(".warningtext").hide();
        }

        this.CloseDialog = function () {
            $('#productPopup').css('display', 'none');
            $("#LoadingOverlay").hide();
        }

        this.CommingSoon = function (param) {
            var obj_a = $('#a' + param);
            var img_src = $('#a' + param + ' img').attr('src');
            var name = obj_a.children('.namepro').text();
            var vp = "VP: " + obj_a.children('.vp-text').text();
            var vin = "ZIK: " + obj_a.children('.vin-text').val();
            var description = obj_a.children('.hiddenField').val().split('|');
            var html = '';

            $("#popupImg").attr('src', img_src);
            $("#popupVpText").text(vp);
            $("#popupVin").text(vin);
            $("#popupName").text(name);

            html = "Comming soon...";
            $("#popupDescription").remove();
            $(".listinfo-pro").append('<div id="popupDescription">' + html + '</div>');

            $("#productPopup").dialog({
                width: 550,
                model: true,
                dialogClass: "modal-product"
            }).parent('.ui-dialog').css({'z-index': 9999});
            $('.ui-dialog-titlebar-close').hide();
        }

        this.formatMoney = function (argValue) {
            var comma = (1 / 2 + '').charAt(1);
            var digit = ',';
            if (comma == '.') digit = '.';

            var sSign = "";
            if (argValue < 0) {
                sSign = "-";
                argValue = -argValue;
            }

            var sTemp = "" + argValue;
            var index = sTemp.indexOf(comma);
            var digitExt = "";
            if (index != -1) {
                digitExt = sTemp.substring(index + 1);
                sTemp = sTemp.substring(0, index);
            }

            var sReturn = "";
            while (sTemp.length > 3) {
                sReturn = digit + sTemp.substring(sTemp.length - 3) + sReturn;
                sTemp = sTemp.substring(0, sTemp.length - 3);
            }
            sReturn = sSign + sTemp + sReturn;
            if (digitExt.length > 0) {
                sReturn += comma + digitExt;
            }
            return sReturn;
        };
    }

</script>