-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Mar 15, 2009, 11:14 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `album`
-- 
CREATE DATABASE `album` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `album`;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `album`
-- 

