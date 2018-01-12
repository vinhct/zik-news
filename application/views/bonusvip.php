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

                    <div class="bd">
                        <div class="vip">
                            <div class="filter">
                                <div class="search">
                                    <input type="text" id="txtKeyWork" maxlength="100" name="q"
                                           placeholder="Nhập nội dung cần tìm" class="input-txt" autocomplete="off">
                                    <a href="javascript:doSearch();">Tìm kiếm</a>
                                </div>
                                <div class="listbyprice">
                                    <ul>
                                        <li>Phạm vi</li>
                                        <li>
                                            <input type="text" name="q" placeholder="100" class="input-txt"
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
                                            <input id="maxvalue" type="text" name="q" placeholder="2.500"
                                                   class="input-txt" autocomplete="off"></li>
                                        <li>Điểm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page_vip1">
                <div class="content_page_left"></div>
                <div class="content_page_right">
                    <div class="bonus-gift">
                        <ul>
                            <li>
                                <div class="bouns_vip">
                                    <div class="bonus">
                                        <div class="bonus-imges">
                                            <div class="title_bonus">
                                                <div class="text_bouns">IPhone 6</div>
                                            </div>
                                            <img src="public/site/images/vip0.png">
                                        </div>

                                        <div class="bonus-doiqua">
                                            <div class="btnbox">
                                                <a href="#" class="exchange" onclick="PopupProduct.ClickToDetail(1);">Đổiquà</a>
                                                <a href="#modal-1" onclick="PopupProduct.ClickToDetail(1);">Chi tiết</a>
                                            </div>
                                        </div>
                                        <div class="bonus-detail">
                                            <a href="#" id="a1">
                                                <input type="hidden" class="imgpro" value="/Content/rikclub/images/anh-15.jpg">
                                                <input type="hidden" class="namepro" value="Vertu Signature Touch Jet Alligator">
                                                <input type="hidden" class="vp-text" value="VP: 90.741">
                                                <input class="hiddenField" type="hidden" value="Khung sản phẩm được làm từ Titan 5 lớp cao cấp|
						Mặt sau được bọc da cá sấu màu đen|
						Các phím bấm mặt trước được làm bằng gốm|
						Mặt trước của máy được bảo vệ bằng lớp kính sapphire thế hệ thứ 5|
						Màn hình: 4.7 inch độ phân giải 1.080 x 1.920 pixel, kính sapphire|
						Camera chính: 13MP, đèn flash LED kép|
						Camera trước: 2.1MP|
						Nền tảng Qualcomm Snapdragon 801, bộ xử lý lõi tứ 4 nhân 2,3 GHz|
						Bộ nhớ: 64GB|
						Loa 11mmx15mm|
						Sạc không dây tương thích Qi|
						Hệ điều hành Android 4.4 KitKat|
						Pin 2275 mAh.">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bouns_vip">
                                    <div class="bonus">
                                        <div class="bonus-imges">
                                            <div class="title_bonus">
                                                <div class="text_bouns">IPhone 6</div>
                                            </div>
                                            <img src="public/site/images/vip0.png">
                                        </div>

                                        <div class="bonus-doiqua">
                                            <div class="btnbox">
                                                <a href="#" class="exchange" onclick="PopupProduct.ClickToDetail(2);">Đổiquà</a>
                                                <a href="#modal-1" onclick="PopupProduct.ClickToDetail(2);">Chi tiết</a>
                                            </div>
                                        </div>
                                        <div class="bonus-detail">
                                            <a href="#" id="a2">
                                                <input type="hidden" class="imgpro" value="/Content/rikclub/images/anh-15.jpg">
                                                <input type="hidden" class="namepro" value="Vertu Signature Touch Jet Alligator">
                                                <input type="hidden" class="vp-text" value="VP: 90.741">
                                                <input class="hiddenField" type="hidden" value="Khung sản phẩm được làm từ Titan 5 lớp cao cấp|
						Mặt sau được bọc da cá sấu màu đen|
						Các phím bấm mặt trước được làm bằng gốm|
						Mặt trước của máy được bảo vệ bằng lớp kính sapphire thế hệ thứ 5|
						Màn hình: 4.7 inch độ phân giải 1.080 x 1.920 pixel, kính sapphire|
						Camera chính: 13MP, đèn flash LED kép|
						Camera trước: 2.1MP|
						Nền tảng Qualcomm Snapdragon 801, bộ xử lý lõi tứ 4 nhân 2,3 GHz|
						Bộ nhớ: 64GB|
						Loa 11mmx15mm|
						Sạc không dây tương thích Qi|
						Hệ điều hành Android 4.4 KitKat|
						Pin 2275 mAh.">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bouns_vip">
                                    <div class="bonus">
                                        <div class="bonus-imges">
                                            <div class="title_bonus">
                                                <div class="text_bouns">IPhone 6</div>
                                            </div>
                                            <img src="public/site/images/vip0.png">
                                        </div>

                                        <div class="bonus-doiqua">
                                            <div class="btnbox">
                                                <a href="#" class="exchange" onclick="PopupProduct.ClickToDetail(3);">Đổiquà</a>
                                                <a href="#modal-1" onclick="PopupProduct.ClickToDetail(3);">Chi tiết</a>
                                            </div>
                                        </div>
                                        <div class="bonus-detail">
                                            <a href="#" id="a3">
                                                <input type="hidden" class="imgpro" value="/Content/rikclub/images/anh-15.jpg">
                                                <input type="hidden" class="namepro" value="Vertu Signature Touch Jet Alligator">
                                                <input type="hidden" class="vp-text" value="VP: 90.741">
                                                <input class="hiddenField" type="hidden" value="Khung sản phẩm được làm từ Titan 5 lớp cao cấp|
						Mặt sau được bọc da cá sấu màu đen|
						Các phím bấm mặt trước được làm bằng gốm|
						Mặt trước của máy được bảo vệ bằng lớp kính sapphire thế hệ thứ 5|
						Màn hình: 4.7 inch độ phân giải 1.080 x 1.920 pixel, kính sapphire|
						Camera chính: 13MP, đèn flash LED kép|
						Camera trước: 2.1MP|
						Nền tảng Qualcomm Snapdragon 801, bộ xử lý lõi tứ 4 nhân 2,3 GHz|
						Bộ nhớ: 64GB|
						Loa 11mmx15mm|
						Sạc không dây tương thích Qi|
						Hệ điều hành Android 4.4 KitKat|
						Pin 2275 mAh.">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bouns_vip">
                                    <div class="bonus">
                                        <div class="bonus-imges">
                                            <div class="title_bonus">
                                                <div class="text_bouns">IPhone 6</div>
                                            </div>
                                            <img src="public/site/images/vip0.png">
                                        </div>

                                        <div class="bonus-doiqua">
                                            <div class="btnbox">
                                                <a href="#" class="exchange" onclick="PopupProduct.ClickToDetail(4);">Đổiquà</a>
                                                <a href="#modal-1" onclick="PopupProduct.ClickToDetail(4);">Chi tiết</a>
                                            </div>
                                        </div>
                                        <div class="bonus-detail">
                                            <a href="#" id="a4">
                                                <input type="hidden" class="imgpro" value="/Content/rikclub/images/anh-15.jpg">
                                                <input type="hidden" class="namepro" value="Vertu Signature Touch Jet Alligator">
                                                <input type="hidden" class="vp-text" value="VP: 90.741">
                                                <input class="hiddenField" type="hidden" value="Khung sản phẩm được làm từ Titan 5 lớp cao cấp|
						Mặt sau được bọc da cá sấu màu đen|
						Các phím bấm mặt trước được làm bằng gốm|
						Mặt trước của máy được bảo vệ bằng lớp kính sapphire thế hệ thứ 5|
						Màn hình: 4.7 inch độ phân giải 1.080 x 1.920 pixel, kính sapphire|
						Camera chính: 13MP, đèn flash LED kép|
						Camera trước: 2.1MP|
						Nền tảng Qualcomm Snapdragon 801, bộ xử lý lõi tứ 4 nhân 2,3 GHz|
						Bộ nhớ: 64GB|
						Loa 11mmx15mm|
						Sạc không dây tương thích Qi|
						Hệ điều hành Android 4.4 KitKat|
						Pin 2275 mAh.">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bouns_vip">
                                    <div class="bonus">
                                        <div class="bonus-imges">
                                            <div class="title_bonus">
                                                <div class="text_bouns">IPhone 6</div>
                                            </div>
                                            <img src="public/site/images/vip0.png">
                                        </div>

                                        <div class="bonus-doiqua">
                                            <div class="btnbox">
                                                <a href="#" class="exchange" onclick="PopupProduct.ClickToDetail(5);">Đổiquà</a>
                                                <a href="#modal-1" onclick="PopupProduct.ClickToDetail(5);">Chi tiết</a>
                                            </div>
                                        </div>
                                        <div class="bonus-detail">
                                            <a href="#" id="a5">
                                                <input type="hidden" class="imgpro" value="/Content/rikclub/images/anh-15.jpg">
                                                <input type="hidden" class="namepro" value="Vertu Signature Touch Jet Alligator">
                                                <input type="hidden" class="vp-text" value="VP: 90.741">
                                                <input class="hiddenField" type="hidden" value="Khung sản phẩm được làm từ Titan 5 lớp cao cấp|
						Mặt sau được bọc da cá sấu màu đen|
						Các phím bấm mặt trước được làm bằng gốm|
						Mặt trước của máy được bảo vệ bằng lớp kính sapphire thế hệ thứ 5|
						Màn hình: 4.7 inch độ phân giải 1.080 x 1.920 pixel, kính sapphire|
						Camera chính: 13MP, đèn flash LED kép|
						Camera trước: 2.1MP|
						Nền tảng Qualcomm Snapdragon 801, bộ xử lý lõi tứ 4 nhân 2,3 GHz|
						Bộ nhớ: 64GB|
						Loa 11mmx15mm|
						Sạc không dây tương thích Qi|
						Hệ điều hành Android 4.4 KitKat|
						Pin 2275 mAh.">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bouns_vip">
                                    <div class="bonus">
                                        <div class="bonus-imges">
                                            <div class="title_bonus">
                                                <div class="text_bouns">IPhone 6</div>
                                            </div>
                                            <img src="public/site/images/vip0.png">
                                        </div>

                                        <div class="bonus-doiqua">
                                            <div class="btnbox">
                                                <a href="#" class="exchange" onclick="PopupProduct.ClickToDetail(6);">Đổiquà</a>
                                                <a href="#modal-1" onclick="PopupProduct.ClickToDetail(6);">Chi tiết</a>
                                            </div>
                                        </div>
                                        <div class="bonus-detail">
                                            <a href="#" id="a6">
                                                <input type="hidden" class="imgpro" value="/Content/rikclub/images/anh-15.jpg">
                                                <input type="hidden" class="namepro" value="Vertu Signature Touch Jet Alligator">
                                                <input type="hidden" class="vp-text" value="VP: 90.741">
                                                <input class="hiddenField" type="hidden" value="Khung sản phẩm được làm từ Titan 5 lớp cao cấp|
						Mặt sau được bọc da cá sấu màu đen|
						Các phím bấm mặt trước được làm bằng gốm|
						Mặt trước của máy được bảo vệ bằng lớp kính sapphire thế hệ thứ 5|
						Màn hình: 4.7 inch độ phân giải 1.080 x 1.920 pixel, kính sapphire|
						Camera chính: 13MP, đèn flash LED kép|
						Camera trước: 2.1MP|
						Nền tảng Qualcomm Snapdragon 801, bộ xử lý lõi tứ 4 nhân 2,3 GHz|
						Bộ nhớ: 64GB|
						Loa 11mmx15mm|
						Sạc không dây tương thích Qi|
						Hệ điều hành Android 4.4 KitKat|
						Pin 2275 mAh.">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bouns_vip">
                                    <div class="bonus">
                                        <div class="bonus-imges">
                                            <div class="title_bonus">
                                                <div class="text_bouns">IPhone 6</div>
                                            </div>
                                            <img src="public/site/images/vip0.png">
                                        </div>

                                        <div class="bonus-doiqua">
                                            <div class="btnbox">
                                                <a href="#" class="exchange" onclick="PopupProduct.ClickToDetail(7);">Đổiquà</a>
                                                <a href="#modal-1" onclick="PopupProduct.ClickToDetail(7);">Chi tiết</a>
                                            </div>
                                        </div>
                                        <div class="bonus-detail">
                                            <a href="#" id="a7">
                                                <input type="hidden" class="imgpro" value="/Content/rikclub/images/anh-15.jpg">
                                                <input type="hidden" class="namepro" value="Vertu Signature Touch Jet Alligator">
                                                <input type="hidden" class="vp-text" value="VP: 90.741">
                                                <input class="hiddenField" type="hidden" value="Khung sản phẩm được làm từ Titan 5 lớp cao cấp|
						Mặt sau được bọc da cá sấu màu đen|
						Các phím bấm mặt trước được làm bằng gốm|
						Mặt trước của máy được bảo vệ bằng lớp kính sapphire thế hệ thứ 5|
						Màn hình: 4.7 inch độ phân giải 1.080 x 1.920 pixel, kính sapphire|
						Camera chính: 13MP, đèn flash LED kép|
						Camera trước: 2.1MP|
						Nền tảng Qualcomm Snapdragon 801, bộ xử lý lõi tứ 4 nhân 2,3 GHz|
						Bộ nhớ: 64GB|
						Loa 11mmx15mm|
						Sạc không dây tương thích Qi|
						Hệ điều hành Android 4.4 KitKat|
						Pin 2275 mAh.">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bouns_vip">
                                    <div class="bonus">
                                        <div class="bonus-imges">
                                            <div class="title_bonus">
                                                <div class="text_bouns">IPhone 6</div>
                                            </div>
                                            <img src="public/site/images/vip0.png">
                                        </div>

                                        <div class="bonus-doiqua">
                                            <div class="btnbox">
                                                <a href="#" class="exchange" onclick="PopupProduct.ClickToDetail(8);">Đổiquà</a>
                                                <a href="#modal-1" onclick="PopupProduct.ClickToDetail(8);">Chi tiết</a>
                                            </div>
                                        </div>
                                        <div class="bonus-detail">
                                            <a href="#" id="a8">
                                                <input type="hidden" class="imgpro" value="/Content/rikclub/images/anh-15.jpg">
                                                <input type="hidden" class="namepro" value="Vertu Signature Touch Jet Alligator">
                                                <input type="hidden" class="vp-text" value="VP: 90.741">
                                                <input class="hiddenField" type="hidden" value="Khung sản phẩm được làm từ Titan 5 lớp cao cấp|
						Mặt sau được bọc da cá sấu màu đen|
						Các phím bấm mặt trước được làm bằng gốm|
						Mặt trước của máy được bảo vệ bằng lớp kính sapphire thế hệ thứ 5|
						Màn hình: 4.7 inch độ phân giải 1.080 x 1.920 pixel, kính sapphire|
						Camera chính: 13MP, đèn flash LED kép|
						Camera trước: 2.1MP|
						Nền tảng Qualcomm Snapdragon 801, bộ xử lý lõi tứ 4 nhân 2,3 GHz|
						Bộ nhớ: 64GB|
						Loa 11mmx15mm|
						Sạc không dây tương thích Qi|
						Hệ điều hành Android 4.4 KitKat|
						Pin 2275 mAh.">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bouns_vip">
                                    <div class="bonus">
                                        <div class="bonus-imges">
                                            <div class="title_bonus">
                                                <div class="text_bouns">IPhone 6</div>
                                            </div>
                                            <img src="public/site/images/vip0.png">
                                        </div>

                                        <div class="bonus-doiqua">
                                            <div class="btnbox">
                                                <a href="#" class="exchange" onclick="PopupProduct.ClickToDetail(15);">Đổiquà</a>
                                                <a href="#modal-1" onclick="PopupProduct.ClickToDetail(15);">Chi tiết</a>
                                            </div>
                                        </div>
                                        <div class="bonus-detail">
                                            <a href="#" id="a15">
                                                <input type="hidden" class="imgpro" value="/Content/rikclub/images/anh-15.jpg">
                                                <input type="hidden" class="namepro" value="Vertu Signature Touch Jet Alligator">
                                                <input type="hidden" class="vp-text" value="VP: 90.741">
                                                <input class="hiddenField" type="hidden" value="Khung sản phẩm được làm từ Titan 5 lớp cao cấp|
						Mặt sau được bọc da cá sấu màu đen|
						Các phím bấm mặt trước được làm bằng gốm|
						Mặt trước của máy được bảo vệ bằng lớp kính sapphire thế hệ thứ 5|
						Màn hình: 4.7 inch độ phân giải 1.080 x 1.920 pixel, kính sapphire|
						Camera chính: 13MP, đèn flash LED kép|
						Camera trước: 2.1MP|
						Nền tảng Qualcomm Snapdragon 801, bộ xử lý lõi tứ 4 nhân 2,3 GHz|
						Bộ nhớ: 64GB|
						Loa 11mmx15mm|
						Sạc không dây tương thích Qi|
						Hệ điều hành Android 4.4 KitKat|
						Pin 2275 mAh.">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="bouns_vip">
                                    <div class="bonus">
                                        <div class="bonus-imges">
                                            <div class="title_bonus">
                                                <div class="text_bouns">IPhone 6</div>
                                            </div>
                                            <img src="public/site/images/vip0.png">
                                        </div>

                                        <div class="bonus-doiqua">
                                            <div class="btnbox">
                                                <a href="#" class="exchange" onclick="PopupProduct.ClickToDetail(15);">Đổiquà</a>
                                                <a href="#modal-1" onclick="PopupProduct.ClickToDetail(15);">Chi tiết</a>
                                            </div>
                                        </div>
                                        <div class="bonus-detail">
                                            <a href="#" id="a15">
                                                <input type="hidden" class="imgpro" value="/Content/rikclub/images/anh-15.jpg">
                                                <input type="hidden" class="namepro" value="Vertu Signature Touch Jet Alligator">
                                                <input type="hidden" class="vp-text" value="VP: 90.741">
                                                <input class="hiddenField" type="hidden" value="Khung sản phẩm được làm từ Titan 5 lớp cao cấp|
						Mặt sau được bọc da cá sấu màu đen|
						Các phím bấm mặt trước được làm bằng gốm|
						Mặt trước của máy được bảo vệ bằng lớp kính sapphire thế hệ thứ 5|
						Màn hình: 4.7 inch độ phân giải 1.080 x 1.920 pixel, kính sapphire|
						Camera chính: 13MP, đèn flash LED kép|
						Camera trước: 2.1MP|
						Nền tảng Qualcomm Snapdragon 801, bộ xử lý lõi tứ 4 nhân 2,3 GHz|
						Bộ nhớ: 64GB|
						Loa 11mmx15mm|
						Sạc không dây tương thích Qi|
						Hệ điều hành Android 4.4 KitKat|
						Pin 2275 mAh.">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="#">Trang trước</a></li>
                            <li><a class="current" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Trang sau</a></li>
                        </ul>
                    </div>
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
                    <p id="popupVpText" class="vp-text"></p>
                    <p id="popupRik" class="rik-text"></p>
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

                if (_percent >= 0 && _percent <= 10) value = 1000;
                else if (_percent >= 11 && _percent <= 20) value = 2000;
                else if (_percent >= 21 && _percent <= 30) value = 3000;
                else if (_percent >= 31 && _percent <= 40) value = 4000;
                else if (_percent >= 41 && _percent <= 50) value = 5000;
                else if (_percent >= 51 && _percent <= 60) value = 6000;
                else if (_percent >= 61 && _percent <= 70) value = 7000;
                else if (_percent >= 71 && _percent <= 80) value = 8000;
                else if (_percent >= 81 && _percent <= 90) value = 9000;
                else if (_percent >= 91 && _percent <= 100) value = 10000;

                $('#maxvalue').attr('placeholder', PopupProduct.formatMoney(value));
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
            var vp = obj_a.children('.vp-text').val();

            var rik = obj_a.children('.rik-text').val();
            var description = obj_a.children('.hiddenField').val().split('|');
            var html = '';

            $("#popupImg").attr('src', img_src);
            $("#popupVpText").text(vp);
            $("#popupRik").text(rik);
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
            var vp = obj_a.children('.vp-text').text();
            var rik = obj_a.children('.rik-text').text();
            var description = obj_a.children('.hiddenField').val().split('|');
            var html = '';

            $("#popupImg").attr('src', img_src);
            $("#popupVpText").text(vp);
            $("#popupRik").text(rik);
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
</body>
</html>