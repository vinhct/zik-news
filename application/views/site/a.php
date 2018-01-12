<?php echo $linkapi ?>
<div class="content_right">
    <div class="top10">
        <div class="div_victory">
            <div class="title_top10">
                <table>
                    <tr>
                        <td class="w47">STT</td>
                        <td class="w130">Tên nhân vật</td>
                        <td class="w110">Tiền thắng</td>
                    </tr>
                </table>
            </div>
            <div class="content_top10">
                <table>
                    <tbody id="logtoptx"></tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="content_home_left">
        <div class="fb-page" data-href="<?php echo $linkface ?>" data-small-header="false"
             data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a
                    href="<?php echo $linkface ?>">VinPlay.com</a></blockquote>
        </div>
    </div>
    <div class="content_home_left">
        <?php $this->load->view('site/adv/adv_right') ?>
    </div>
</div>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=532997920162382";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script>

    $(document).ready(function () {
        $.ajax({
            type: "POST",
            url: "<?php echo $linkapi ?>",
            data: {
                c: 101,
                mt: 1
            },

            dataType: 'json',
            success: function (result) {
                var stt = 1;
                $.each(result.topTX, function (index, value) {
                    result += resulttopwin(stt, value.username, value.money);
                    stt++;
                });
                $('#logtoptx').html(result);
            }
        });
    })

    function resulttopwin(stt, username, money) {
        var rs = "";
        if (stt == 1) {
            rs += "<tr>";
            rs += "<td class='w47 top1'></td>";
            rs += "<td class='w130 text-top1'>" + username + "</td>";
            rs += "<td class='w110 money_top'>" + commaSeparateNumber(money) + "</td>";
            rs += "</tr>";
        }
        else if (stt == 2) {
            rs += "<tr>";
            rs += "<td class='w47 top2'></td>";
            rs += "<td class='w130 text-top'>" + username + "</td>";
            rs += "<td class='w110 money_top'>" + commaSeparateNumber(money) + "</td>";
            rs += "</tr>";
        }
        else if (stt == 3) {
            rs += "<tr>";
            rs += "<td class='w47 top3'></td>";
            rs += "<td class='w130 text-top'>" + username + "</td>";
            rs += "<td class='w110 money_top'>" + commaSeparateNumber(money) + "</td>";
            rs += "</tr>";
        }
        else {
            rs += "<tr>";
            rs += "<td class='w47'>" + stt + "</td>";
            rs += "<td class='w130 text-top'>" + username + "</td>";
            rs += "<td class='w110 money_top'>" + commaSeparateNumber(money) + "</td>";
            rs += "</tr>";

        }
        return rs;
    }
    function commaSeparateNumber(val) {
        while (/(\d+)(\d{3})/.test(val.toString())) {
            val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
        }
        return val;
    }
</script>
