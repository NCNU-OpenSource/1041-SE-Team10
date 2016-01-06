-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-01-06 09:25:05
-- 伺服器版本: 5.6.26
-- PHP 版本： 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `masterchef`
--

-- --------------------------------------------------------

--
-- 資料表結構 `cookieoven`
--

CREATE TABLE IF NOT EXISTS `cookieoven` (
  `uid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `cookieoven`
--

INSERT INTO `cookieoven` (`uid`, `name`, `amount`, `exp`, `time`, `cash`, `sold`) VALUES
(1, 'cookie1', 0, 20, 1, 50, 100),
(2, 'cookie2', 1, 30, 2, 60, 120),
(3, 'cookie3', 1, 40, 3, 70, 140),
(4, 'cookie4', 0, 50, 4, 80, 160);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `cookieoven`
--
ALTER TABLE `cookieoven`
  ADD PRIMARY KEY (`uid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `cookieoven`
--
ALTER TABLE `cookieoven`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
