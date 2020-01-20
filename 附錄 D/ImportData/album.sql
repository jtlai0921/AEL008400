-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Mar 19, 2011, 02:12 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `album`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `album`
-- 

CREATE TABLE `album` (
  `ID` int(11) NOT NULL auto_increment,
  `LocalName` varchar(30) NOT NULL,
  `ServName` varchar(40) NOT NULL,
  `ThumbName` varchar(45) NOT NULL,
  `FileSize` int(11) NOT NULL,
  `FileType` varchar(15) NOT NULL,
  `Comment` varchar(50) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- 
-- 列出以下資料庫的數據： `album`
-- 

INSERT INTO `album` VALUES (4, 'cheesecake-01.jpg', 'files/20110317080757-cheesecake-01.jpg', 'thumbnail/20110317080757-cheesecake-01.jpg', 53508, 'image/pjpeg', '消化餅130克捍碎');
INSERT INTO `album` VALUES (5, 'cheesecake-02.jpg', 'files/20110317080808-cheesecake-02.jpg', 'thumbnail/20110317080808-cheesecake-02.jpg', 46291, 'image/pjpeg', '奶油退冰和消化餅拌勻');
INSERT INTO `album` VALUES (6, 'cheesecake-03.jpg', 'files/20110317080819-cheesecake-03.jpg', 'thumbnail/20110317080819-cheesecake-03.jpg', 87166, 'image/pjpeg', '碎核桃和消化餅拌勻');
INSERT INTO `album` VALUES (8, 'cheesecake-04.jpg', 'files/20110317080831-cheesecake-04.jpg', 'thumbnail/20110317080831-cheesecake-04.jpg', 58106, 'image/pjpeg', '保鮮膜舖在消化餅上');
INSERT INTO `album` VALUES (9, 'cheesecake-05.jpg', 'files/20110317080843-cheesecake-05.jpg', 'thumbnail/20110317080843-cheesecake-05.jpg', 52439, 'image/pjpeg', '用容器將消化餅壓平');
INSERT INTO `album` VALUES (10, 'cheesecake-06.jpg', 'files/20110317080854-cheesecake-06.jpg', 'thumbnail/20110317080854-cheesecake-06.jpg', 67004, 'image/pjpeg', '將消化餅放入冰箱冰30分鐘固定型狀');
INSERT INTO `album` VALUES (11, 'cheesecake-07.jpg', 'files/20110317080908-cheesecake-07.jpg', 'thumbnail/20110317080908-cheesecake-07.jpg', 62958, 'image/pjpeg', 'Cream Cheese 500克退冰打勻');
INSERT INTO `album` VALUES (12, 'cheesecake-08.jpg', 'files/20110317080921-cheesecake-08.jpg', 'thumbnail/20110317080921-cheesecake-08.jpg', 47972, 'image/pjpeg', '加入酸奶3/4杯打勻');
INSERT INTO `album` VALUES (13, 'cheesecake-09.jpg', 'files/20110317080934-cheesecake-09.jpg', 'thumbnail/20110317080934-cheesecake-09.jpg', 39909, 'image/pjpeg', '白砂糖140克');
INSERT INTO `album` VALUES (14, 'cheesecake-10.jpg', 'files/20110317080947-cheesecake-10.jpg', 'thumbnail/20110317080947-cheesecake-10.jpg', 60019, 'image/pjpeg', '加入白砂糖打勻');
INSERT INTO `album` VALUES (15, 'cheesecake-11.jpg', 'files/20110317081003-cheesecake-11.jpg', 'thumbnail/20110317081003-cheesecake-11.jpg', 52605, 'image/pjpeg', '加入2個全蛋打勻');
INSERT INTO `album` VALUES (16, 'cheesecake-12.jpg', 'files/20110317081013-cheesecake-12.jpg', 'thumbnail/20110317081013-cheesecake-12.jpg', 41219, 'image/pjpeg', '所有材料一起打勻至光滑');
INSERT INTO `album` VALUES (17, 'cheesecake-13.jpg', 'files/20110317081025-cheesecake-13.jpg', 'thumbnail/20110317081025-cheesecake-13.jpg', 40789, 'image/pjpeg', '拌好的起司糊倒入冰好的消化餅');
INSERT INTO `album` VALUES (18, 'cheesecake-14.jpg', 'files/20110317081037-cheesecake-14.jpg', 'thumbnail/20110317081037-cheesecake-14.jpg', 33755, 'image/pjpeg', '將模型震一下消除氣泡');
INSERT INTO `album` VALUES (19, 'cheesecake-15.jpg', 'files/20110317081052-cheesecake-15.jpg', 'thumbnail/20110317081052-cheesecake-15.jpg', 44472, 'image/pjpeg', '烤箱預熱160度C, 再放入模型');
INSERT INTO `album` VALUES (20, 'cheesecake-16.jpg', 'files/20110317081129-cheesecake-16.jpg', 'thumbnail/20110317081129-cheesecake-16.jpg', 44705, 'image/pjpeg', '模型放入烤盤');
INSERT INTO `album` VALUES (21, 'cheesecake-17.jpg', 'files/20110317081139-cheesecake-17.jpg', 'thumbnail/20110317081139-cheesecake-17.jpg', 37842, 'image/pjpeg', '烤盤內倒1杯水隔水加熱');
INSERT INTO `album` VALUES (22, 'cheesecake-18.jpg', 'files/20110317081149-cheesecake-18.jpg', 'thumbnail/20110317081149-cheesecake-18.jpg', 40783, 'image/pjpeg', '烤80分鐘,起司會脹起');
INSERT INTO `album` VALUES (23, 'cheesecake-19.jpg', 'files/20110317081158-cheesecake-19.jpg', 'thumbnail/20110317081158-cheesecake-19.jpg', 45463, 'image/pjpeg', '烤好後取出退熱 ');
INSERT INTO `album` VALUES (24, 'cheesecake-20.jpg', 'files/20110318030922-cheesecake-20.jpg', 'thumbnail/20110318030922-cheesecake-20.jpg', 36066, 'image/pjpeg', '放涼後放入冰箱冰過再吃, 口感較佳');
