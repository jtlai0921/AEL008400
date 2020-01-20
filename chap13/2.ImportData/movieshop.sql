-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Mar 10, 2011, 02:51 PM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `movieshop`
-- 
CREATE DATABASE `movieshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `movieshop`;

-- --------------------------------------------------------

-- 
-- 資料表格式： `movie`
-- 

CREATE TABLE `movie` (
  `id` int(10) unsigned zerofill NOT NULL auto_increment,
  `title` varchar(20) NOT NULL COMMENT '片名',
  `director` varchar(10) NOT NULL COMMENT '導演',
  `actor` varchar(20) NOT NULL COMMENT '演員',
  `country` varchar(10) NOT NULL COMMENT '國家',
  `category` varchar(4) NOT NULL COMMENT '影片分級',
  `movietype` varchar(10) NOT NULL COMMENT '影片內容類別',
  `storetype` varchar(7) NOT NULL COMMENT 'DVD/VCD',
  `oldnewtype` varchar(4) NOT NULL COMMENT '新舊片',
  `issuedate` date NOT NULL COMMENT '發行日期',
  `lengthmin` smallint(6) NOT NULL COMMENT '分鐘',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

-- 
-- 列出以下資料庫的數據： `movie`
-- 

INSERT INTO `movie` VALUES (0000000001, '全面啟動', '克里斯多夫諾蘭', '李奧納多狄卡皮歐、渡邊謙、喬瑟夫高登拉維', '美國', '普遍級', '劇情片', 'DVD', '新片', '2010-07-16', 148);
INSERT INTO `movie` VALUES (0000000002, '中央車站', '華特薩勒斯', '馬瑞莉亞貝拉 / 菲達妲坦蒙納葛羅 ', '巴西', '保護級 ', '劇情片', 'DVD/VCD', '舊片', '2004-06-30', 110);
INSERT INTO `movie` VALUES (0000000003, '香料共和國', '迪索布麥特斯 ', '伊洛科里米蓋得斯/ 喬治柯拉費司 ', '希臘', '輔導級', '劇情/喜劇', 'DVD/VCD', '舊片', '2005-01-05', 128);
INSERT INTO `movie` VALUES (0000000004, '享受吧！ 一個人的旅行', '雷恩莫瑞', '茱莉亞羅勃茲、詹姆斯法蘭柯、哈維巴登', '美國', '普遍級', '愛情片', 'DVD', '新片', '2011-01-05', 140);
INSERT INTO `movie` VALUES (0000000005, '我叫金三順', '金尹哲', '玄杉/金宣兒', '韓國', '普遍級', '喜劇', 'DVD/VCD', '舊片', '2005-12-22', 0);
INSERT INTO `movie` VALUES (0000000006, '再見,總有一天', '李宰漢', '中山美穗/西島秀俊', '日本', '保護級 ', '劇情片', 'DVD/VCD', '新片', '2010-07-21', 134);
INSERT INTO `movie` VALUES (0000000007, '白色巨塔', '西谷弘,河野圭太 ', '唐澤壽明、江口洋介', '日本', '普遍級', '劇情片', 'DVD/VCD', '舊片', '2004-02-05', 0);
INSERT INTO `movie` VALUES (0000000008, '赤壁', '吳宇森 ', '金城武 / 梁朝偉/張豐毅/張震/林志玲', '香港', '保護級', '劇情片', 'DVD', '新片', '2008-09-26', 145);
INSERT INTO `movie` VALUES (0000000009, '投名狀', '陳可辛', '李連杰/金城武/ 劉德華  ', '香港', '輔導級', '動作片', 'DVD', '舊片', '2008-02-05', 126);
INSERT INTO `movie` VALUES (0000000010, '達文西密碼', '朗霍華 ', '湯姆漢克斯/奧黛莉朵杜 ', '美國', '保護級 ', '劇情片', 'DVD', '舊片', '2006-10-25', 147);
INSERT INTO `movie` VALUES (0000000011, '海角七號', '魏德聖', '范逸臣/田中千繪 台灣 ', '台灣', '普遍級', '劇情片', 'DVD', '舊片', '2008-12-13', 130);
INSERT INTO `movie` VALUES (0000000012, '告白', '中島哲也', '松隆子、岡田將生、木村佳乃', '日本', '普通級', '懸疑/驚片', 'DVD', '新片', '2011-02-01', 106);
INSERT INTO `movie` VALUES (0000000013, '想飛的鋼琴少年', 'Fredi M. M', 'Teo Gheorghiu、Bruno ', '瑞士', '普遍級 ', '劇情片', 'DVD', '舊片', '2007-07-01', 120);
INSERT INTO `movie` VALUES (0000000014, '放牛班的春天', 'Christophe', 'Gerard Jugnot/Franco', '法國', '普遍級 ', '劇情片', 'DVD', '舊片', '2004-09-17', 95);
INSERT INTO `movie` VALUES (0000000015, '社群網戰', '大衛芬奇', '賈斯汀、傑西艾森柏格', '美國', '普遍級 ', '劇情片', 'DVD', '新片', '2011-02-04', 120);
INSERT INTO `movie` VALUES (0000000016, '迷情密碼', '尹在具', '車勝元/宋允兒', '韓國', '輔導級', '懸疑片 ', 'DVD', '舊片', '2010-09-03', 110);
INSERT INTO `movie` VALUES (0000000017, '聽說', '鄭芬芬', '彭于晏、陳意涵、陳妍希、林美秀、羅北安', '台灣', '保護級', '勵志片', 'DVD', '舊片', '2009-08-28', 109);
INSERT INTO `movie` VALUES (0000000018, '一八九五', '洪智育', '楊謹華 / 溫昇豪 / 李興文', '台灣', '保護級', '劇情片', 'DVD', '新片', '2009-01-14', 110);
INSERT INTO `movie` VALUES (0000000019, '媽媽咪呀!', '菲麗達羅伊 ', '皮爾斯布洛斯南 /梅莉史翠普/ 柯林佛斯', '美國', '普遍級 ', '劇情片', 'DVD', '新片', '2009-01-01', 108);
INSERT INTO `movie` VALUES (0000000020, '唐山大地震', '馮小剛', '徐帆/陳道明/張靜初/李晨/陸毅', '大陸', '普通級', '劇情片', 'DVD', '新片', '2010-08-20', 150);
INSERT INTO `movie` VALUES (0000000021, '冏男孩', '楊雅吉吉 ', '李冠毅 ， 潘親御 ', '台灣', '普遍級 ', '劇情片', 'DVD', '舊片', '2009-01-01', 103);
INSERT INTO `movie` VALUES (0000000022, '美麗人生', '羅貝多貝里尼 ', '羅貝多貝里尼/ 妮可麗塔布拉斯契  ', '義大利', '保護級', '劇情片', 'DVD/VCD', '舊片', '2004-06-30', 114);
INSERT INTO `movie` VALUES (0000000023, '初戀紅豆冰', '阿牛', '李心潔、阿牛、品冠、曹格、梁靜茹', '馬來西亞', '普遍級 ', '愛情片', 'DVD', '新片', '2010-11-01', 104);
INSERT INTO `movie` VALUES (0000000024, '艾蜜莉的異想世界', '尚皮耶居內 ', '馬修卡索維茲/奧黛莉朵杜 ', '法國', '普遍級 ', '劇情片', 'DVD/VCD', '舊片', '2004-06-30', 122);
INSERT INTO `movie` VALUES (0000000025, '忠犬小八', '賴斯霍史東', '李察吉爾、瓊艾倫', '美國', '普通級', '家庭片', 'DVD', '舊片', '2010-05-01', 93);
INSERT INTO `movie` VALUES (0000000026, '艋舺', '鈕承澤', '趙又廷、阮經天、鳳小岳、柯佳嬿、馬如龍', '台灣', '普通級', '動作片', 'DVD', '新片', '2010-07-01', 141);
INSERT INTO `movie` VALUES (0000000027, '第36個故事', '蕭雅全', '桂綸鎂/林辰唏/張翰', '台灣', '普通級', '劇情片', 'DVD', '新片', '2010-08-01', 82);
INSERT INTO `movie` VALUES (0000000028, '父後七日', '王育麟、劉梓潔', '王莉雯、吳朋奉、陳家祥、太保', '台灣', '普遍級', '劇情片', 'DVD', '新片', '2010-12-10', 92);
INSERT INTO `movie` VALUES (0000000029, '九降風', '林書宇 ', '鳳小岳 /紀培慧 ', '台灣', '普遍級 ', '劇情片', 'DVD', '舊片', '2008-11-19', 107);
INSERT INTO `movie` VALUES (0000000030, '當幸福來敲門', '蓋布瑞穆契諾', '威爾史密斯', '美國', '輔導級', '勵志片', 'DVD', '舊片', '2007-06-01', 116);
INSERT INTO `movie` VALUES (0000000031, 'PS我愛你', '吉娜葛森/ 麗莎庫卓', '吉娜葛森/ 麗莎庫卓/ 希拉蕊史旺/傑瑞', '美國', '普遍級', '劇情片', 'DVD', '新片', '2008-05-16', 126);
INSERT INTO `movie` VALUES (0000000032, '微笑馬戲團', '菲利浦慕勒', 'Marie Gillain/Cali/L', '法國', '普遍級 ', '溫馨片', 'DVD', '舊片', '2009-07-01', 91);
INSERT INTO `movie` VALUES (0000000033, '阿凡達', '詹姆斯柯麥隆', '席歌妮薇佛/山姆沃辛頓/喬凡尼雷比西', '美國', '輔導級', '科幻片', 'DVD', '新片', '2010-11-01', 156);
INSERT INTO `movie` VALUES (0000000034, '時尚女王香奈兒', '安妮芳妲', '奧黛莉朵杜/亞利山卓尼維拉/', '法國', '普通級', '劇情片', 'DVD', '舊片', '2010-02-01', 110);
INSERT INTO `movie` VALUES (0000000035, '蝴蝶', '菲利浦慕勒  ', '米歇爾塞侯  ', '法國', '普遍級 ', '劇情片', 'DVD/VCD', '舊片', '2004-06-30', 85);
INSERT INTO `movie` VALUES (0000000036, '攻其不備', '約翰李漢考', '珊卓布拉克/珊卓布拉克/凱西貝茲', '美國', '普通級', '家庭片', 'DVD', '新片', '2010-06-01', 128);
INSERT INTO `movie` VALUES (0000000037, '美味關係', '諾拉伊佛朗', ' 梅莉史翠普、艾美亞當斯', '美國', '普通級', '劇情片', 'DVD', '舊片', '2010-01-01', 123);
INSERT INTO `movie` VALUES (0000000038, '巴黎我愛你', '克勞蒂歐薩', '布魯諾波達利斯 ', '法國', '普遍級 ', '愛情片', 'DVD', '舊片', '2007-02-14', 120);
INSERT INTO `movie` VALUES (0000000039, '未婚妻的漫長等待', '尚皮耶居內', '奧黛莉朵杜 ', '法國', '輔導級', '劇情片', 'DVD', '舊片', '2005-07-09', 134);
INSERT INTO `movie` VALUES (0000000040, '窮得只剩下錢', '里奇•梅塔', '魯賓德‧納格拉/納瑟魯丁‧薩/寇爾‧普瑞', '印度', '普遍級 ', '劇情片', 'DVD', '舊片', '2009-09-21', 101);
