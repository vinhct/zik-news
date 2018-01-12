/*
Navicat MySQL Data Transfer

Source Server         : vinplay_admin
Source Server Version : 50551
Source Host           : 104.155.235.161:3306
Source Database       : vinplay_admin

Target Server Type    : MYSQL
Target Server Version : 50551
File Encoding         : 65001

Date: 2016-09-01 10:05:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for usertranfer
-- ----------------------------
DROP TABLE IF EXISTS `usertranfer`;
CREATE TABLE `usertranfer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usertranfer
-- ----------------------------
INSERT INTO `usertranfer` VALUES ('1', 'administrator', 'e10adc3949ba59abbe56e057f20f883e', 'A');
