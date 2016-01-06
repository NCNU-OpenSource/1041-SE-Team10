-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-01-06 09:26:39
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
-- 資料表結構 `breadoven`
--

CREATE TABLE IF NOT EXISTS `breadoven` (
  `uid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `breadoven`
--

INSERT INTO `breadoven` (`uid`, `name`, `amount`, `exp`, `time`, `cash`, `sold`) VALUES
(1, 'bread1', 2, 30, 1, 50, 100),
(3, 'bread3', 1, 50, 3, 70, 140),
(4, 'bread4', 1, 60, 4, 80, 160),
(5, 'bread2', 4, 40, 2, 60, 120);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `breadoven`
--
ALTER TABLE `breadoven`
  ADD PRIMARY KEY (`uid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `breadoven`
--
ALTER TABLE `breadoven`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
