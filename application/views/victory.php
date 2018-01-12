<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <link type="text/css" rel="stylesheet" href="public/site/css/vinplay-news.css">
    <script src="public/site/js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="public/site/js/jquery-ui.js" type="text/javascript"></script>
</head>
<body>

<div id="container">
    <div class="header">
        <div class="header_content">
            <div class="header_left">
                <div class="div_game">
                    <ul>
                        <li><a href="#" class="game_dangian"></a></li>
                        <li><a href="#" class="game_slot"></a></li>
                    </ul>
                </div>
            </div>
            <div class="header_right">
                <ul>
                    <li><a href="#" class="btn_login"></a></li>
                    <li><a href="#" class="btn_reg"></a></li>
                </ul>
            </div>
        </div>
        <div class="nav">
            <div class="nav_content">
                <nav>
                    <ul>
                        <li class="icon_home"><a href="/"></a></li>
                        <li><a href="#">tin tức</a></li>
                        <li><a href="#">chính sách</a></li>
                        <li><a href="#">thưởng vip</a>
                            <ul>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">User Experience</a></li>
                            </ul>
                        </li>
                        <li><a href="#">vinh danh</a></li>
                        <li><a href="#">hỗ trợ</a>
                            <ul>
                                <li><a href="#">liên hệ</a></li>
                                <li><a href="#">faq</a></li>
                            </ul>
                        </li>
                        <li><a href="#">hướng dẫn</a>
                            <ul>
                                <li><a href="#">hướng dẫn chơi game ba cây</a></li>
                                <li><a href="#">hướng dẫn chơi game binh</a></li>
                                <li><a href="#">hướng dẫn chơi game sâm </a>
                                    <ul>
                                        <li><a href="#">hướng dẫn chơi game sâm lốc </a></li>
                                        <li><a href="#">hướng dẫn chơi game sâm solo </a></li>
                                    </ul>
                                </li>
                            </ul></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="content_page">
            <div class="break-crum">
                <div class="text-crum">Thưởng vip</div>
                <div class="line-top"></div>
            </div>
            <div class="page_vip">
                <div class="content_page_left"></div>
                <div class="content_page_right">

                </div>
            </div>
            <div class="page_vip1">
                <div class="content_page_left"></div>
                <div class="content_page_right">


                </div>
            </div>
        </div>

    </div>
    <div class="footer">
        <div class="footer_content">
            <div class="footer_top">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">chính sách</a></li>
                        <li><a href="#">thưởng vip</a></li>
                        <li><a href="#">vinh danh</a></li>
                        <li><a href="#">hố trợ</a></li>
                    </ul>
                    <div class="line"></div>
                    <div class="div_pay">
                        <div class="div_pay_left">
                            <div class="title_pay">Các phương thức thanh toán</div>
                            <div class="div_pay_images">
                                <img src="public/site/images/payment.png">
                            </div>
                        </div>
                        <div class="div_pay_right">
                            <div class="title_pay">Kết nối với chúng tôi</div>
                            <div class="div_pay_images">
                                <img src="public/site/images/face.png">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div id="LoadingOverlay" style="display:none"></div>
<div id="productPopup" style="display:none;min-height:250px">
    <div class="pad_dialog">
        <a href="javascript:PopupProduct.CloseDialog();" class="btn-close" aria-hidden="true">&nbsp;</a>

        <div class="modal-body">

            <div class="img-info-pro">
                <p><img id="popupImg" src="" style="width:160px;height:95px"></p>

                <div class="action">
                    <p id="popupVpText" class="vp-text">VP: 25.00</p>

                    <p id="popupRik" class="rik-text">VIN: 205.000</p>
                </div>
                <div class="btnbox">
                    <a href="#" class="exchange change1">Đổi quà</a>

                    <p class="rik-text warningtext"></p>
                </div>
            </div>
            <div class="listinfo-pro">
                <div class="tit-pro" id="popupName">IPHONE 6</div>
                <div id="popupDescription">
                    <p>Thông số kỹ thuật</p>

                    <p>Màn hình: Retina HD, 4.7", 1334 x 750</p>

                    <p>CPU: Apple A8, 2 nhân, 1.4 GHz</p>

                    <p>RAM 1 GB</p>

                    <p>Hệ điều hành: iOS 8.0</p>

                    <p>Camera chính: 8.0 MP, Quay phim FullHD 1080p@60fps</p>

                    <p>Camera phụ: 1.2 MP</p>

                    <p>Bộ nhớ trong: 128GB</p>

                    <p>Thẻ nhớ ngoài: Không</p>

                    <p>Dung lượng pin: 1810 mAh</p>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>