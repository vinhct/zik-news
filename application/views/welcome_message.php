
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta property="og:title" content="">
    <title></title>
    <style>
        .main {
            width: 500px;
            margin: 0 auto;
        }

        .active {
            display: block !important;
        }

        .notactive {
            display: block;
            text-align: left;
            font-size: 30px;
            width: 100%;
            line-height: 30px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

</head>

<body>
<div class="main">
    <div class="item">
        <span class="notactive">Cùng Lê Thành gia nhập hội những cao thủ chơi vin</span>
        <img src="public/site/images/le_thanh.jpg">

    </div>
    <div class="item">
        <span class="notactive"> Cùng Lương Bổng gia nhập hội những cao thủ chơi vin</span>
        <img src="public/site/images/luong_bong.jpg">
    </div>
    <div class="item">
        <span class="notactive">  Cùng Phan Hải gia nhập hội những cao thủ chơi vin</span>
        <img src="public/site/images/phan_hai.jpg">
    </div>
    <div class="item">
        <span class="notactive"> Cùng Phan Quân gia nhập hội những cao thủ chơi vin</span>
        <img src="public/site/images/phan_quan.jpg">
    </div>
    <div class="item">
        <span class="notactive"> Cùng Thế Chột gia nhập hội những cao thủ chơi vin</span>
        <img src="public/site/images/the_chot.jpg">
    </div>
    <div class="item">
        <span class="notactive">Cùng Trần Tuấn gia nhập hội những cao thủ chơi vin</span>
        <img src="public/site/images/tran_tu.jpg">
    </div>
    <div class="item">
        <span class="notactive">Cùng Phan Hương gia nhập hội những cao thủ chơi vin</span>
        <img src="public/site/images/phan_huong.jpg">
    </div>
    <div class="item">
        <span class="notactive">Cùng Bảo Ngậu gia nhập hội những cao thủ chơi vin</span>
        <img src="public/site/images/bao_ngau.jpg">
    </div>
    <div class="item">
        <span class="notactive">Cùng Hùng Cá Rô gia nhập hội những cao thủ chơi vin</span>
        <img src="public/site/images/hung_ca_ro.jpg">
    </div>
    <div class="item">
        <span class="notactive">Cùng Khải Sở Khanh gia nhập hội những cao thủ chơi vin</span>
        <img src="public/site/images/khai_so_khang.jpg">
    </div>
</div>
<script>
    $(document).ready(function () {
        var random = Math.floor(Math.random() * $('.item').length);
        $('.item').hide().eq(random).addClass("active");
        $(function () {
            $(document).attr("title", $(".active").text());
            $("meta[property='og\\:title']").attr('content', $(".active").text());
        });

        setTimeout(function() {
            window.location.href ="https://www.facebook.com/vuongquocvin/";
        }, 10000);
    });


</script>
