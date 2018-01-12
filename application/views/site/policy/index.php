
            <div class="break-crum">
                <div class="text-crum">chính sách</div>

            </div>
            <div class="page_vip">
                <div class="content_page_left"></div>
                <div class="content_page_right">
                    <div class="text_page">tại sao chúng ta trở thành thành viên vip</div>
                    <div class="bd">
                        <div class="vip">
                            <div class="content_polices">
                            <div class="item-vip">
                                <ul>
				   <?php if(!empty($listvip)):?>	
                                    <?php foreach ($listvip as $row): ?>
                                        <li><a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a></li>
                                    <?php endforeach; ?>
				   <?php else:?>
					<li><a>Đang cập nhật</a></li>
				  <?php endif?>
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
                    <div class="text_page">chính sách danh cho các cấp độ thành viên</div>
                    <div class="bd">
                        <div class="vip">
                            <div class="content_polices">
                                <div class="tablevip">
                                    <table>
                                        <tr>
                                            <td class="w266"></td>
                                            <td class="w100 icon_da"><span class="text_tb">Đá</span></td>
                                            <td class="w100 icon_dong"><span  class="text_tb">Đồng</span></td>
                                            <td class="w100 icon_bac"><span  class="text_tb">Bạc</span></td>
                                            <td class="w100 icon_vang"><span  class="text_tb">Vàng</span></td>
                                            <td class="w100 icon_bachkim"><span  class="text_tb">Bạch kim</span></td>
                                            <td class="w100 icon_kimcuong"><span  class="text_tb">Kim cương</span></td>
                                        </tr>
                                        <tr class="old">
                                            <td class="w266"><span>Tặng xu (Sắp ra mắt)</span></td>
                                            <td class="w100 "><span class="center_text">200k</span></td>
                                            <td class="w100 "><span class="center_text">400k</span></td>
                                            <td class="w100 "><span class="center_text">600k</span></td>
                                            <td class="w100 "><span class="center_text">800k</span></td>
                                            <td class="w100 "><span class="center_text">1000k</span></td>
                                            <td class="w100 "><span class="center_text">1200k</span></td>
                                        </tr>
                                        <tr >
                                            <td class="w266"><span>Tặng số lần đổi nickname (Sắp ra mắt)</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">1</span></td>
                                            <td class="w100 "><span class="center_text">1</span></td>
                                            <td class="w100 "><span class="center_text">1</span></td>
                                            <td class="w100 "><span class="center_text">1</span></td>
                                            <td class="w100 "><span class="center_text">1</span></td>
                                        </tr>
                                        <tr class="old">
                                            <td class="w266"><span>Mầu tên nhân vật</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                        </tr>
                                        <tr >
                                            <td class="w266"><span>Tăng hạn mức "Tán lộc" (số lần/hạn mức)</span></td>
                                            <td class="w100 "><span class="center_text">3/2k</span></td>
                                            <td class="w100 "><span class="center_text">5/5k</span></td>
                                            <td class="w100 "><span class="center_text">5/10k</span></td>
                                            <td class="w100 "><span class="center_text">10/10k</span></td>
                                            <td class="w100 "><span class="center_text">25/20k</span></td>
                                            <td class="w100 "><span class="center_text">25/50k</span></td>
                                        </tr>
                                        <tr class="old">
                                            <td class="w266"><span>Tăng số lượng bạn bè</span></td>
                                            <td class="w100 "><span class="center_text">5</span></td>
                                            <td class="w100 "><span class="center_text">10</span></td>
                                            <td class="w100 "><span class="center_text">30</span></td>
                                            <td class="w100 "><span class="center_text">50</span></td>
                                            <td class="w100 "><span class="center_text">100</span></td>
                                            <td class="w100 "><span class="center_text">200</span></td>
                                        </tr>
                                        <tr >
                                            <td class="w266"><span>Thay đổi Avatar VIP</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                        </tr>
                                        <tr class="old">
                                            <td class="w266"><span>Quà chúc mừng Sinh nhật, sự kiện</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">Quà</span></td>
                                            <td class="w100 "><span class="center_text">Quà</span></td>
                                            <td class="w100 "><span class="center_text">Quà</span></td>
                                        </tr>
                                        <tr>
                                            <td class="w266"><span>Tặng VIN chơi thử game mới</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                        </tr>
                                        <tr class="old">
                                            <td class="w266"><span>Tham gia VIP Event</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">-</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                            <td class="w100 "><span class="center_text">x</span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

