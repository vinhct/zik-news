/*
Navicat MySQL Data Transfer

Source Server         : Gameportal
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : xengclub.net

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-01-16 16:59:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for adv
-- ----------------------------
DROP TABLE IF EXISTS `adv`;
CREATE TABLE `adv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `orderNo` int(11) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of adv
-- ----------------------------
INSERT INTO `adv` VALUES ('7', 'sfđf', 'http://zum.club/', '1', '1', 'sidebar.png', '1');

-- ----------------------------
-- Table structure for bonusvip
-- ----------------------------
DROP TABLE IF EXISTS `bonusvip`;
CREATE TABLE `bonusvip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `description` text,
  `images` varchar(255) DEFAULT NULL,
  `vippoint` int(11) DEFAULT NULL,
  `vin` bigint(20) DEFAULT NULL,
  `titlepage` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `metadescription` varchar(255) NOT NULL,
  `orderNo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bonusvip
-- ----------------------------
INSERT INTO `bonusvip` VALUES ('6', 'iPhone 7', '                                                                                        Màn hình Retina , 4.7 inches, 750 x 1334 pixels.                                                                                ', '1476067449imagevip.png', '74074', '30000000', '', '', '                                                                                                                                                                                                                                                               ', '17');
INSERT INTO `bonusvip` VALUES ('7', 'Iphone 7 Plus', '                                                                                        Trên iPhone 7 Plus, hãng Apple đã  khai tử nút Home vật lý để thay mới vào đó là nút Home dạng tĩnh.                                                                                ', '1476074424imagevip.jpg', '82962', '33600000', '', '', '                                                                                                                                                                                                                                                               ', '16');
INSERT INTO `bonusvip` VALUES ('8', 'Sennheiser Orpheus', 'Màng loa được “phủ” một lớp Titanium (“phủ” thay vì “mạ”), cũng như tần số đáp ứng chạy dài từ 5Hz đến 100.000Hz', '1476085418imagevip1.jpg', '3703703', '1500000000', '', '', '                                                                                                                                                                                                                                                               ', '10');
INSERT INTO `bonusvip` VALUES ('9', 'Final Sonorous X', '  Sonorous X sở hữu drive 50mm \"chuyển động khí cân bằng\" từ titanium.', '1476083280imagevip.jpg', '474074', '192000000', '', '', '                                                                                                                                                                                                                                                               ', '9');
INSERT INTO `bonusvip` VALUES ('10', 'Surface Book', '                                            Bộ nhớ trong	256GB SSD\r\nRam	16GB\r\nKích thước màn hình	12.3\"\r\nĐộ phân giải	2763 x 1824 pixels                                        ', '1476081960imagevip.jpg', '130370', '52800000', '', '', '                                                                                                                                                                                                                                                            ', '15');
INSERT INTO `bonusvip` VALUES ('11', 'SH 125cc', '                                                                                                                                                                                                                                                                        SH125/SH150 được trang bị động cơ 4 kỳ nhỏ gọn làm mát bằng dung dịch với hệ thống phun xăng điện tử PGM-FI giúp vận hành mạnh mẽ, tin cậy và khả năng tăng tốc nhanh chóng.                                                                                                                                                                                                                                                ', '1476072603imagevip.jpg', '251851', '102000000', '', '', '                                                                                                                                                                                                                                                               ', '5');
INSERT INTO `bonusvip` VALUES ('12', 'Vespa LX125', '                                                                                                                                                                                Thiết kế nhỏ gọn, tiết kiệm nhiên liệu, vận hành tốt – đó là những ưu điểm của Vespa LT125 3V i.e                                                                                                                                                                 ', '1476081528imagevip.jpg', '254814', '103200000', '', '', '                                                                                                                                                                                                                                                               ', '6');
INSERT INTO `bonusvip` VALUES ('13', 'Honda CBR150', '                                              Honda CBR150 2016 nhập khẩu nguyên chiếc từ Indonesia về Việt Nam sở hữu thiết kế ấn tượng, động cơ 150cc sản sinh công suất 16,7 mã lực.                                                                                                                        ', '1476083017imagevip.jpg', '171851', '69600000', '', '', '                                                                                                                                                                                                                                                            ', '4');
INSERT INTO `bonusvip` VALUES ('14', 'samsung S7', '                                            Galaxy S7 và S7 edge được thiết kế tinh xảo ở mọi góc độ và khía cạnh.                                        ', '1476074956imagevip.jpg', '53333', '21600000', '', '', '                                                                                                                                                                                                                                                               ', '18');
INSERT INTO `bonusvip` VALUES ('15', 'Mobiado', '                                            Khung máy được làm từ vàng 24K và được đánh bóng bằng công nghệ CNC.                                        ', '1476082467imagevip.jpg', '370370', '150000000', '', '', '                                                                                                                                                                                                                                                               ', '14');
INSERT INTO `bonusvip` VALUES ('16', 'Vertu Signature', '                                             Khung của Vertu Signature S được làm bằng vàng nguyên khối 18 k\r\n  Bàn phím làm từ 4,75 carats đá ruby\r\n Mở nắp sau bằng cách vặn khóa hình bán nguyệt độc đáo                                                                                                                                                                                                                                                         ', '1476072190imagevip.jpg', '918518', '372000000', '', '', '                                                                                                                                                                                                                                                               ', '13');
INSERT INTO `bonusvip` VALUES ('17', 'ipad pro', '                                            Kích cỡ màn hình2048 x 2739 pixel, 12.9 inches.\r\nBộ nhớ trong128 GB, 4 GB RAM.                                                                                                                                                                                                                                                                   ', '1476071368imagevip.jpg', '80000', '32400000', '', '', '                                                                                                                                                                                                                                                               ', '12');
INSERT INTO `bonusvip` VALUES ('18', 'Lexus 570 lx', '                                                                                                                                                                                                                            Xe có thể tăng tốc từ 0 đến 100km/h trong 7.8 giây và đạt tốc độ tối đa là 220km/h ( giới hạn điện tử)                                                                                                                                                                                                                                                                                                                                                                                                                 ', '1476439126imagevip.jpg', '24296296', '9840000000', '', '', '                                                                                                                                                                                                                                                               ', '3');
INSERT INTO `bonusvip` VALUES ('20', 'Audi Q7', '                                                                                         Xe có kích thước tổng thể chiều dài x chiều rộng x chiều cao tương ứng là 5.050 x 1.970 x 1.740 mm và chiều dài cơ sở là 2.990 mm.                                                                                 ', '1476069815imagevip.jpg', '11851851', '4800000000', '', '', '                                                                                                                                                                                                                                                               ', '2');
INSERT INTO `bonusvip` VALUES ('22', 'range rover', 'LandRover Range rover Black Autobiography LWB – 2016                                                                                                                                                                                                                                      ', '1476773635imagevip.png', '35555555', '14400000000', '', '', '                                                                                                                                                                                                                                                               ', '1');
INSERT INTO `bonusvip` VALUES ('23', 'Macbook air', '                                            Màn hình rộng 13.3-inch LED-backlit\r\nVi xử lý dual-core Intel Core i5 1.6GHz\r\nTurbo Boost up to 2.7GHz with 3MB shared L3 cache.\r\nRAM 8GB 1600mHz LPDDR3.                                        ', '1476070841imagevip.jpg', '85925', '34800000', '', '', '                                                                                                                                                                                                                                                               ', '11');
INSERT INTO `bonusvip` VALUES ('24', 'Rolex Oyster', '                                            Chất liệu: Rose gold & Steel\r\nCase Size: 36 MM                                        ', '1476081228imagevip.jpg', '690370', '279600000', '', '', '                                                                                                                                                                                                                                                               ', '8');
INSERT INTO `bonusvip` VALUES ('25', 'Exciter 150', '                                                                                                                                                                                                                                                                                                                                                                Khối động cơ 4 thì, 4 van, SOHC, làm mát bằng dung dịch, xi-lanh đơn, dung tích 149,7 cc, công suất cực đại 15,4 mã lực và mô-men xoắn 13,8 Nm.                                                                                                                                                                                                                                                                                                                                ', '1484732430imagevip.jpg', '139300', '56400000', '', '', '                                                                                                                                                                                                                                                               ', '7');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `catname` varchar(50) DEFAULT NULL,
  `seolink` varchar(255) DEFAULT NULL,
  `description` text,
  `titlePage` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `metaDescription` varchar(255) DEFAULT NULL,
  `orderno` int(11) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `isfooter` tinyint(1) DEFAULT '0',
  `typepage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------

-- ----------------------------
-- Table structure for faq
-- ----------------------------
DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `question` text,
  `answer` text,
  `titlepage` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `metadescription` varchar(255) DEFAULT NULL,
  `orderno` int(11) DEFAULT NULL,
  `seolink` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of faq
-- ----------------------------
INSERT INTO `faq` VALUES ('8', '28', '33', 'L&agrave;m thế n&agrave;o để đăng k&yacute; nick Xeng.Club?', '<p>\r\n	Đầu ti&ecirc;n bạn v&agrave;o&nbsp;<a href=\"http://vinplay.com/\">http://Xeng.Club/</a> rồi click v&agrave;o đăng k&yacute;, sau đ&oacute; điền đầy đủ th&ocirc;ng tin username v&agrave; pass theo mẫu rồi nhấn đồng &yacute;.</p>\r\n', '', '', '', '7', '', '1');
INSERT INTO `faq` VALUES ('9', '28', '33', 'Vin, Xu l&agrave; g&igrave; ? ', '<p>\r\n	VIN v&agrave; Xu l&agrave; đồng tiền ảo sử dụng trong hệ thống cổng Xeng.club &nbsp;Để chơi tất cả c&aacute;c game của Xeng.Club. Ri&ecirc;ng đồng VIN l&agrave; đồng tiền để giao dịch đổi thưởng như: mua m&atilde; thẻ điện thoại hay giao dịch chuyển khoản th&ocirc;ng qua k&ecirc;nh đại l&yacute;</p>\r\n', '', '', '', '2', '', '1');
INSERT INTO `faq` VALUES ('10', '28', '33', 'C&oacute; bao nhi&ecirc;u c&aacute;ch nạp Vin? ', '<p>\r\n	Hiện tại Nạp Vin c&oacute; 2 c&aacute;ch nạp: Nạp qua thẻ c&agrave;o, nạp qua SMS, &nbsp;nạp qua T&agrave;i khoản thẻ ng&acirc;n h&agrave;ng ( Internet banking)</p>\r\n<p>\r\n	Chi tiết xem tại: Xengclub.net</p>\r\n', '', '', '', '3', '', '1');
INSERT INTO `faq` VALUES ('11', '28', '33', 'T&ocirc;i c&oacute; thể chơi game Xeng.Club tr&ecirc;n c&aacute;c tr&igrave;nh duyệt n&agrave;o? ', '<p>\r\n	C&oacute; thể chơi tốt nhất tr&ecirc;n c&aacute;c tr&igrave;nh duyệt tr&ecirc;n FireFox, Chrome hoặc Coccoc</p>\r\n', '', '', '', '4', '', '1');
INSERT INTO `faq` VALUES ('12', '28', '33', 'T&ocirc;i c&oacute; bắt buộc phải k&iacute;ch hoạt t&agrave;i khoản? ', '<p>\r\n	Việc k&iacute;ch hoạt t&agrave;i khoản l&agrave; bắt buộc. Mục đ&iacute;ch của việc n&agrave;y l&agrave; gi&uacute;p quản l&yacute; v&agrave; bảo vệ t&agrave;i khoản của c&aacute;c bạn được tốt hơn, ngo&agrave;i ra c&ograve;n để trao thưởng v&agrave; đảm bảo c&aacute;c quyền lợi kh&aacute;c của c&aacute;c bạn.&nbsp;</p>\r\n', '', '', '', '5', '', '1');
INSERT INTO `faq` VALUES ('13', '28', '33', 'T&ocirc;i cần l&agrave;m g&igrave; khi qu&ecirc;n mật khẩu? ', '<p>\r\n	Bạn click v&agrave;o phần Đăng nhập, sau đ&oacute; click v&agrave;o phần Qu&ecirc;n mật khẩu tr&ecirc;n chỗ th&ocirc;ng tin c&aacute; nh&acirc;n để lấy lại mật khẩu</p>\r\n', '', '', '', '6', '', '1');
INSERT INTO `faq` VALUES ('14', '28', '33', 'Vip point được t&iacute;nh như thế n&agrave;o? ', '<p>\r\n	Ch&uacute;ng t&ocirc;i tin rằng tất cả người chơi sẽ phải nhận được phần thưởng trong suốt thời gian chơi game. V&agrave; bạn c&agrave;ng chơi nhiều th&igrave; bạn sẽ c&agrave;ng nhận được nhiều hơn. Ch&iacute;nh v&igrave; vậy hệ thống VIP POINT l&agrave; điểm số để đ&aacute;nh gi&aacute; sự đ&oacute;ng g&oacute;p của c&aacute;c bạn tr&ecirc;n hệ thống game sử dụng đồng VIN. Dựa tr&ecirc;n số VIN m&agrave; bạn chơi trong hệ thống ch&uacute;ng t&ocirc;i, mỗi 1 đơn vị bạn đặt v&agrave;o c&aacute;c game tr&ecirc;n cổng XENG.CLIB đều được ghi nhận v&agrave; t&iacute;ch lũy th&agrave;nh điểm VIP Point.</p>\r\n', '', '', '', '8', '', '1');
INSERT INTO `faq` VALUES ('15', '28', '33', 'Chơi những game n&agrave;o th&igrave; được nhận Vip point? ', '<p>\r\n	Bạn c&oacute; thể kiếm được Vip Point khi chơi bằng VIN tại bất k&igrave; game n&agrave;o tr&ecirc;n cổng game Xeng.Club</p>\r\n', '', '', '', '10', '', '1');
INSERT INTO `faq` VALUES ('16', '28', '33', 'L&agrave;m thế n&agrave;o để tăng Vip point nhanh? ', '<div>\r\n	-<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Sử dụng 1 t&agrave;i khoản để chơi t&iacute;ch lũy Vip point</div>\r\n<div>\r\n	-<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Lựa chọn c&aacute;c game ph&ugrave; hợp với khả năng chơi của m&igrave;nh</div>\r\n<div>\r\n	-<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Lựa chọn chiến thuật ph&ugrave; hợp để l&agrave;m sao bảo to&agrave;n t&agrave;i khoản v&agrave; c&oacute; l&atilde;i để duy tr&igrave; được l&acirc;u d&agrave;i</div>\r\n<div>\r\n	-<span class=\"Apple-tab-span\" style=\"white-space:pre\"> </span>Tăng lượng đặt VIN v&agrave;o c&aacute;c game cao nhất c&oacute; thể</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '', '', '', '9', '', '1');
INSERT INTO `faq` VALUES ('17', '28', '33', 'C&oacute; g&igrave; kh&aacute;c biệt khi trở th&agrave;nh th&agrave;nh vi&ecirc;n VIP? ', '<p>\r\n	V&agrave;o trang <a href=\"http://xengclub.net/chinh-sach\">http://xengclub.net/chinh-sach</a> v&agrave; kh&aacute;m ph&aacute; th&ecirc;m nhiều hơn &quot; Ch&iacute;nh s&aacute;ch &quot; theo từng cấp bậc</p>\r\n', '', '', '', '11', '', '1');
INSERT INTO `faq` VALUES ('18', '28', '33', 'C&oacute; phải trả ph&iacute; thường ni&ecirc;n/ h&agrave;ng th&aacute;ng để duy tr&igrave; cấp độ VIP kh&ocirc;ng? ', '<p>\r\n	Kh&ocirc;ng, Bạn sẽ kh&ocirc;ng mất bất kỳ chi ph&iacute; n&agrave;o cho việc duy tr&igrave;.</p>\r\n', '', '', '', '12', '', '1');
INSERT INTO `faq` VALUES ('19', '28', '33', 'L&agrave;m g&igrave; kh&ocirc;ng tương t&aacute;c được với game? Kh&ocirc;ng v&agrave;o được b&agrave;n chơi khi đủ tiền? Kh&ocirc;ng tương t&aacute;c được với c&aacute;c qu&acirc;n b&agrave;i? ', '- Bạn nhấn ph&iacute;m F5 để refresh lại tr&igrave;nh duyệt<br />\r\n<br />\r\n- Nếu trong trường hợp nhấn F5 m&agrave; vẫn kh&ocirc;ng tương t&aacute;c được với game, bạn c&oacute; thể x&oacute;a cache tr&igrave;nh duyệt<br />\r\n<br />\r\nNgo&agrave;i ra, c&oacute; bất cứ thắc mắc g&igrave;, c&aacute;c bạn c&oacute; thể li&ecirc;n hệ trực tiếp tới tổng đ&agrave;i hỗ trợ <span style=\"font-size:14px;\"><strong>1900 6697</strong></span>&nbsp; hoặc Inbox <span style=\"font-size:14px;\"><strong><a href=\"https://www.facebook.com/XengClub/\" target=\"_blank\">Fanpage Xeng.Club&nbsp;</a></strong></span>để được giải đ&aacute;p ', 'Xeng.Club - Hướng dẫn khắc phục sự cố', '', '', '1', '', '1');
INSERT INTO `faq` VALUES ('20', '28', '33', 'Tại sao t&ocirc;i n&ecirc;n đăng k&yacute; bảo mật t&agrave;i khoản? ', 'Đăng k&yacute; bảo mật t&agrave;i khoản l&agrave; 1 c&aacute;ch <strong>an to&agrave;n nhất cho số tiền của bạn trong t&agrave;i khoản Xeng.Club</strong>. Ph&ograve;ng chống c&aacute;c trường hợp mất t&agrave;i khoản Xeng.Club, bị c&agrave;i phần mềm gi&aacute;n điệp trộm tiền trong t&agrave;i khoản Xeng VIP, bị lừa đăng nhập&hellip;. Khi đ&atilde; c&agrave;i bảo mật bằng tin nhắn th&igrave; sẽ <strong>v&ocirc; hiệu h&oacute;a mọi vấn đề mất t&agrave;i khoản XENG VIP</strong><br />\r\n<br />\r\nĐể v&agrave;o được t&agrave;i khoản cần m&atilde; x&aacute;c nhận đăng nhập bằng 1 <strong>m&atilde; OTP gửi đến cho bạn qua SMS</strong> mới c&oacute; thể đăng nhập th&agrave;nh c&ocirc;ng t&agrave;i khoản ( V&agrave; khi chuyển tiền cũng vậy). Bạn <strong>kh&ocirc;ng phải lo mất số tiền trong t&agrave;i khoản</strong> ', 'Bảo mật tài khoản Xeng.Club', '', '', '1', '', '1');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catId` int(11) DEFAULT NULL,
  `title` text,
  `description` text,
  `content` text,
  `seoLink` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `isHome` tinyint(1) DEFAULT '0',
  `orderNo` int(11) DEFAULT '9999',
  `keyword` varchar(255) DEFAULT NULL,
  `metaDescription` varchar(255) DEFAULT NULL,
  `titlePage` varchar(255) DEFAULT NULL,
  `createTime` date DEFAULT NULL,
  `updateTime` date DEFAULT NULL,
  `catName` varchar(255) DEFAULT NULL,
  `chinhsach` tinyint(1) NOT NULL DEFAULT '0',
  `isActive` tinyint(1) DEFAULT '1',
  `ExpireDate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('275', '0', 'Chào e', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/Capture.PNG\" style=\"height:720px; width:800px\" /><img alt=\"\" src=\"/ckfinder/userfiles/images/Capture(1).PNG\" style=\"height:720px; width:800px\" />hihifsfsfs</p>\r\n', '<p>sfsfssffsfs</p>\r\n', 'chao-e', 'Back.jpg', '1', '9999', '', '', '', '2018-01-10', '2018-01-13', null, '0', '1', '2018-01-10');
INSERT INTO `news` VALUES ('276', '-1', 'ffsfsfssfsf', '<p>chao esss</p>\r\n', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/Capture(1).PNG\" style=\"height:720px; width:800px\" /></p>\r\n', 'ffsfsfssfsf', 'Capture.PNG', '1', '9999', '', '', '', '2018-01-13', '2018-01-13', null, '0', '1', '2018-01-13');

-- ----------------------------
-- Table structure for news_rating
-- ----------------------------
DROP TABLE IF EXISTS `news_rating`;
CREATE TABLE `news_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT '5',
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news_rating
-- ----------------------------
INSERT INTO `news_rating` VALUES ('3', '212', '5', '150');
INSERT INTO `news_rating` VALUES ('4', '222', '5', '5');
INSERT INTO `news_rating` VALUES ('5', '214', '4', '44');
INSERT INTO `news_rating` VALUES ('6', '223', '5', '53');
INSERT INTO `news_rating` VALUES ('7', '216', '5', '26');
INSERT INTO `news_rating` VALUES ('8', '209', '5', '14');
INSERT INTO `news_rating` VALUES ('9', '210', '5', '6');
INSERT INTO `news_rating` VALUES ('11', '218', '5', '21');
INSERT INTO `news_rating` VALUES ('12', '224', '5', '5');
INSERT INTO `news_rating` VALUES ('13', '125', '5', '742');
INSERT INTO `news_rating` VALUES ('14', null, null, '17');
INSERT INTO `news_rating` VALUES ('15', '211', '5', '95');
INSERT INTO `news_rating` VALUES ('16', '215', '4', '122');
INSERT INTO `news_rating` VALUES ('17', '104', '5', '62');
INSERT INTO `news_rating` VALUES ('18', '112', '5', '303');
INSERT INTO `news_rating` VALUES ('19', '157', '5', '16');
INSERT INTO `news_rating` VALUES ('20', '103', '4', '7');
INSERT INTO `news_rating` VALUES ('21', '99', '3', '21');
INSERT INTO `news_rating` VALUES ('22', '207', '5', '35');
INSERT INTO `news_rating` VALUES ('23', '213', '5', '13');
INSERT INTO `news_rating` VALUES ('24', '118', '4', '46');
INSERT INTO `news_rating` VALUES ('25', '127', '5', '24');
INSERT INTO `news_rating` VALUES ('26', '98', '4', '24');
INSERT INTO `news_rating` VALUES ('27', '206', '4', '22');
INSERT INTO `news_rating` VALUES ('28', '221', '5', '6');
INSERT INTO `news_rating` VALUES ('29', '220', '5', '5');
INSERT INTO `news_rating` VALUES ('30', '217', '5', '13');
INSERT INTO `news_rating` VALUES ('31', '208', '5', '8');
INSERT INTO `news_rating` VALUES ('32', '205', '5', '6');
INSERT INTO `news_rating` VALUES ('33', '204', '5', '5');
INSERT INTO `news_rating` VALUES ('34', '203', '5', '14');
INSERT INTO `news_rating` VALUES ('35', '202', '5', '4');
INSERT INTO `news_rating` VALUES ('36', '201', '5', '5');
INSERT INTO `news_rating` VALUES ('37', '200', '5', '4');
INSERT INTO `news_rating` VALUES ('38', '199', '5', '4');
INSERT INTO `news_rating` VALUES ('39', '198', '5', '1');
INSERT INTO `news_rating` VALUES ('40', '197', '5', '1');
INSERT INTO `news_rating` VALUES ('41', '196', '5', '1');
INSERT INTO `news_rating` VALUES ('42', '195', '5', '1');
INSERT INTO `news_rating` VALUES ('43', '193', '5', '1');
INSERT INTO `news_rating` VALUES ('44', '187', '5', '1');
INSERT INTO `news_rating` VALUES ('45', '186', '5', '7');
INSERT INTO `news_rating` VALUES ('46', '185', '5', '1');
INSERT INTO `news_rating` VALUES ('47', '181', '5', '2');
INSERT INTO `news_rating` VALUES ('48', '182', '4', '5');
INSERT INTO `news_rating` VALUES ('49', '180', '5', '1');
INSERT INTO `news_rating` VALUES ('50', '177', '5', '1');
INSERT INTO `news_rating` VALUES ('51', '178', '3', '3');
INSERT INTO `news_rating` VALUES ('52', '179', '5', '1');
INSERT INTO `news_rating` VALUES ('53', '176', '5', '17');
INSERT INTO `news_rating` VALUES ('54', '175', '5', '1');
INSERT INTO `news_rating` VALUES ('55', '174', '5', '1');
INSERT INTO `news_rating` VALUES ('56', '173', '5', '1');
INSERT INTO `news_rating` VALUES ('57', '172', '5', '1');
INSERT INTO `news_rating` VALUES ('58', '171', '5', '1');
INSERT INTO `news_rating` VALUES ('59', '170', '4', '2');
INSERT INTO `news_rating` VALUES ('60', '168', '5', '1');
INSERT INTO `news_rating` VALUES ('61', '169', '5', '1');
INSERT INTO `news_rating` VALUES ('62', '165', '5', '1');
INSERT INTO `news_rating` VALUES ('63', '166', '5', '1');
INSERT INTO `news_rating` VALUES ('64', '164', '5', '1');
INSERT INTO `news_rating` VALUES ('65', '163', '5', '1');
INSERT INTO `news_rating` VALUES ('66', '161', '5', '1');
INSERT INTO `news_rating` VALUES ('67', '162', '3', '4');
INSERT INTO `news_rating` VALUES ('68', '159', '5', '39');
INSERT INTO `news_rating` VALUES ('69', '158', '5', '32');
INSERT INTO `news_rating` VALUES ('70', '155', '4', '2');
INSERT INTO `news_rating` VALUES ('71', '156', '5', '1');
INSERT INTO `news_rating` VALUES ('72', '154', '5', '1');
INSERT INTO `news_rating` VALUES ('73', '153', '4', '7');
INSERT INTO `news_rating` VALUES ('74', '152', '5', '18');
INSERT INTO `news_rating` VALUES ('75', '148', '3', '29');
INSERT INTO `news_rating` VALUES ('76', '149', '5', '1');
INSERT INTO `news_rating` VALUES ('77', '147', '5', '1');
INSERT INTO `news_rating` VALUES ('78', '146', '5', '6');
INSERT INTO `news_rating` VALUES ('79', '145', '5', '1');
INSERT INTO `news_rating` VALUES ('80', '143', '5', '2');
INSERT INTO `news_rating` VALUES ('81', '144', '5', '6');
INSERT INTO `news_rating` VALUES ('82', '142', '5', '1');
INSERT INTO `news_rating` VALUES ('83', '102', '3', '12');
INSERT INTO `news_rating` VALUES ('84', '192', '5', '1');
INSERT INTO `news_rating` VALUES ('85', '167', '5', '4');
INSERT INTO `news_rating` VALUES ('86', '225', '5', '1');
INSERT INTO `news_rating` VALUES ('87', '97', '5', '29');
INSERT INTO `news_rating` VALUES ('88', '227', '5', '2');
INSERT INTO `news_rating` VALUES ('89', '108', '5', '44');
INSERT INTO `news_rating` VALUES ('90', '226', '5', '3');
INSERT INTO `news_rating` VALUES ('91', '101', '5', '9');
INSERT INTO `news_rating` VALUES ('92', '95', '5', '17');
INSERT INTO `news_rating` VALUES ('93', '114', '5', '27');
INSERT INTO `news_rating` VALUES ('94', '228', '5', '1');
INSERT INTO `news_rating` VALUES ('95', '133', '5', '10');
INSERT INTO `news_rating` VALUES ('96', '231', '5', '45');
INSERT INTO `news_rating` VALUES ('97', '229', '5', '1');
INSERT INTO `news_rating` VALUES ('98', '124', '2', '7');
INSERT INTO `news_rating` VALUES ('99', '230', '5', '1');
INSERT INTO `news_rating` VALUES ('100', '232', '5', '11');
INSERT INTO `news_rating` VALUES ('101', '234', '3', '2');
INSERT INTO `news_rating` VALUES ('102', '135', '5', '2');
INSERT INTO `news_rating` VALUES ('103', '188', '5', '65');
INSERT INTO `news_rating` VALUES ('104', '236', '5', '8');
INSERT INTO `news_rating` VALUES ('105', '239', '5', '82');
INSERT INTO `news_rating` VALUES ('106', '233', '5', '26');
INSERT INTO `news_rating` VALUES ('107', '243', '5', '1');
INSERT INTO `news_rating` VALUES ('108', '110', '4', '4');
INSERT INTO `news_rating` VALUES ('109', '245', '3', '2');
INSERT INTO `news_rating` VALUES ('110', '247', '5', '1');
INSERT INTO `news_rating` VALUES ('111', '246', '5', '17');
INSERT INTO `news_rating` VALUES ('112', '238', '5', '197');
INSERT INTO `news_rating` VALUES ('113', '100', '5', '78');
INSERT INTO `news_rating` VALUES ('114', '242', '5', '122');
INSERT INTO `news_rating` VALUES ('115', '240', '5', '248');
INSERT INTO `news_rating` VALUES ('116', '129', '5', '37');
INSERT INTO `news_rating` VALUES ('117', '131', '2', '179');
INSERT INTO `news_rating` VALUES ('118', '244', '5', '19');
INSERT INTO `news_rating` VALUES ('119', '241', '5', '146');
INSERT INTO `news_rating` VALUES ('120', '130', '5', '4');
INSERT INTO `news_rating` VALUES ('121', '237', '2', '16');
INSERT INTO `news_rating` VALUES ('122', '128', '5', '1');
INSERT INTO `news_rating` VALUES ('123', '126', '5', '6');
INSERT INTO `news_rating` VALUES ('124', '105', '5', '10');
INSERT INTO `news_rating` VALUES ('125', '106', '5', '52');
INSERT INTO `news_rating` VALUES ('126', '109', '3', '2');
INSERT INTO `news_rating` VALUES ('127', '189', '2', '1');
INSERT INTO `news_rating` VALUES ('128', '107', '4', '3');
INSERT INTO `news_rating` VALUES ('129', '115', '5', '1');
INSERT INTO `news_rating` VALUES ('130', '248', '5', '129');
INSERT INTO `news_rating` VALUES ('131', '137', '2', '1');
INSERT INTO `news_rating` VALUES ('132', '256', '3', '27');
INSERT INTO `news_rating` VALUES ('133', '268', '4', '61');
INSERT INTO `news_rating` VALUES ('134', '269', '5', '2');
INSERT INTO `news_rating` VALUES ('135', '272', '5', '73');
INSERT INTO `news_rating` VALUES ('136', '249', '5', '17');
INSERT INTO `news_rating` VALUES ('137', '271', '5', '25');
INSERT INTO `news_rating` VALUES ('138', '273', '2', '101');
INSERT INTO `news_rating` VALUES ('139', '253', '3', '101');
INSERT INTO `news_rating` VALUES ('140', '252', '5', '14');
INSERT INTO `news_rating` VALUES ('141', '262', '5', '35');
INSERT INTO `news_rating` VALUES ('142', '255', '5', '34');
INSERT INTO `news_rating` VALUES ('143', '257', '5', '15');
INSERT INTO `news_rating` VALUES ('144', '254', '5', '7');
INSERT INTO `news_rating` VALUES ('145', '259', '5', '32');
INSERT INTO `news_rating` VALUES ('146', '261', '5', '90');
INSERT INTO `news_rating` VALUES ('147', '250', '5', '23');
INSERT INTO `news_rating` VALUES ('148', '266', '5', '4');
INSERT INTO `news_rating` VALUES ('149', '267', '5', '5');

-- ----------------------------
-- Table structure for system
-- ----------------------------
DROP TABLE IF EXISTS `system`;
CREATE TABLE `system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkface` varchar(400) DEFAULT NULL,
  `codeGA` text,
  `titlePage` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `metaDescription` varchar(255) DEFAULT NULL,
  `contact` text,
  `h1` varchar(255) DEFAULT NULL,
  `linkgoogle` varchar(255) DEFAULT NULL,
  `linkyoutube` varchar(255) DEFAULT NULL,
  `linkblog` varchar(255) NOT NULL,
  `linktwiter` varchar(255) NOT NULL,
  `linklogin` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `sign` text,
  `ispopup` bit(1) DEFAULT NULL,
  `linkpopup` varchar(255) DEFAULT NULL,
  `desHome` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system
-- ----------------------------
INSERT INTO `system` VALUES ('1', 'https://www.facebook.com/Vinhfalcao-339370636464987/', '<!-- Global Site Tag (gtag.js) - Google Analytics -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-106740414-1\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments)};\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'UA-106740414-1\');\r\n</script>\r\n', 'abc CỔNG GAME ONLINE ', 'game bài đổi thưởng, game đổi thưởng, đánh bài đổi thưởng, game bài online đổi thưởng, game bài online đổi tiền', 'Xeng.club cổng game chơi đánh bài online đổi thưởng tiền thật uy tín qua đại lý toàn quốc, đổi thưởng, trả thưởng cực nhanh qua đại lý', '<p>\r\n	<strong><span style=\"font-size:16px\">TH&Ocirc;NG TIN LI&Ecirc;N HỆ</span></strong></p>\r\n<p>\r\n	<br />\r\n	<strong><span style=\"font-size:14px\">Group:&nbsp;</span></strong><strong><span style=\"font-size:14px\"><a href=\"https://www.facebook.com/groups/xeng.club/\" target=\"_blank\">https://www.facebook.com/groups/xeng.club/</a></span></strong></p>\r\n<p>\r\n	<br />\r\n	<strong><span style=\"font-size:14px\">Fanpage:&nbsp;</span></strong><strong><span style=\"font-size:14px\"><a href=\"https://www.facebook.com/xeng.club/\" target=\"_blank\">https://www.facebook.com/xeng.club/</a></span></strong></p>\r\n<p>\r\n	<br />\r\n	<strong><span style=\"font-size:14px\">Hotline: 1900 669796</span></strong></p>\r\n<p>\r\n	<br />\r\n	<strong><span style=\"font-size:14px\">Hỗ trợ: hotro@xeng.club</span></strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 'Xeng.club cổng game đánh bài online đổi thưởng tiền thật uy tín qua đại lý', '', '', '', '', '', 'Quay_kho_Bau_Zing_Chau_Bau.png', '<p>\r\n	<strong><span style=\"font-size:14px\">XENG.CLUB CỔNG GAME ONLINE<br />\r\n	<span style=\"color:#ff0000\">Hotline:</span> 1900 6697</span></strong><br />\r\n	<strong><span style=\"font-size:14px\">Link tải Android:&nbsp;</span></strong><strong><span style=\"font-size:14px\">https://goo.gl/iKMkwY</span></strong><br />\r\n	<strong><span style=\"font-size:14px\">Link tải IOS:&nbsp;</span></strong><strong><span style=\"font-size:14px\">http://xeng.club/</span></strong><br />\r\n	<strong><span style=\"font-size:14px\"><span style=\"color:#0084ff\">Fanpage:</span><a href=\"https://www.facebook.com/vuongquocvin/?pnref=story\" target=\"_blank\">&nbsp;</a></span></strong><strong><span style=\"font-size:14px\"><a href=\"https://www.facebook.com/xengclub/\" target=\"_blank\">https://www.facebook.com/xeng.club/</a></span></strong><br />\r\n	<strong><span style=\"font-size:14px\"><span style=\"color:#0084ff\">Group:&nbsp;</span></span></strong><strong><span style=\"font-size:14px\"><a href=\"https://www.facebook.com/groups/xeng.club/\" target=\"_blank\">https://www.facebook.com/groups/xeng.club/</a></span></strong><br />\r\n	&nbsp;</p>\r\n', '', 'https://goo.gl/me9RAi', '&lt;p&gt;<br />\r\n&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;XENG.CLUB CỔNG GAME ONLINE&lt;br /&gt;<br />\r\n&lt;span style=&quot;color:#ff0000&quot;&gt;Hotline:&lt;/span&gt; 1900 6697&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;Link tải Android:&amp;nbsp;&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;https://goo.gl/iKMkwY&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;Link tải IOS:&amp;nbsp;&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;http://xeng.club/&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;color:#0084ff&quot;&gt;Fanpage:&lt;/span&gt;&lt;a href=&quot;https://www.facebook.com/vuongquocvin/?pnref=story&quot; target=&quot;_blank&quot;&gt;&amp;nbsp;&lt;/a&gt;&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;a href=&quot;https://www.facebook.com/xengclub/&quot; target=&quot;_blank&quot;&gt;https://www.facebook.com/xeng.club/&lt;/a&gt;&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;color:#0084ff&quot;&gt;Group:&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;a href=&quot;https://www.facebook.com/groups/xeng.club/&quot; target=&quot;_blank&quot;&gt;https://www.facebook.com/groups/xeng.club/&lt;/a&gt;&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;<br />\r\n&amp;nbsp;&lt;/p&gt;');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'vinplay24h@gmail.com', '0987040342', 'Hà Nội', null);
INSERT INTO `users` VALUES ('7', 'namld', '3454c551ae4777445680b7ae50eadcc9', 'namld.vna@gmail.com', '0943895474', 'Số 12 Liễu Giai', null);

-- ----------------------------
-- Table structure for victory
-- ----------------------------
DROP TABLE IF EXISTS `victory`;
CREATE TABLE `victory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `month` varchar(50) DEFAULT NULL,
  `title` text,
  `description` text,
  `content` text,
  `titlepage` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `metadescription` varchar(255) DEFAULT NULL,
  `seolink` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of victory
-- ----------------------------
