-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-01-04 14:18:42
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
  `sold` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `breadoven`
--

INSERT INTO `breadoven` (`uid`, `name`, `amount`, `exp`, `time`, `cash`, `sold`, `status`) VALUES
(1, 'bread1', 2, 30, 1, 50, 0, 0),
(2, 'bread2', 4, 40, 2, 60, 0, 0),
(3, 'bread3', 1, 50, 3, 70, 0, 0),
(4, 'bread4', 1, 60, 4, 80, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `cakeoven`
--

CREATE TABLE IF NOT EXISTS `cakeoven` (
  `uid` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `cakeoven`
--

INSERT INTO `cakeoven` (`uid`, `name`, `amount`, `exp`, `time`, `cash`, `sold`, `status`) VALUES
(1, 'cake1', 2, 40, 1, 50, 0, 0),
(2, 'cake2', 0, 50, 2, 60, 0, 0),
(3, 'cake3', 0, 60, 3, 70, 0, 0),
(4, 'cake4', 1, 70, 4, 80, 0, 0);

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
  `sold` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `cookieoven`
--

INSERT INTO `cookieoven` (`uid`, `name`, `amount`, `exp`, `time`, `cash`, `sold`, `status`) VALUES
(1, 'cookie1', 0, 20, 1, 50, 0, 0),
(2, 'cookie2', 1, 30, 2, 60, 0, 0),
(3, 'cookie3', 1, 40, 3, 70, 0, 0),
(4, 'cookie4', 0, 50, 4, 80, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `oven`
--

CREATE TABLE IF NOT EXISTS `oven` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `oven`
--

INSERT INTO `oven` (`id`, `name`, `amount`) VALUES
(1, 'breadoven', 1),
(2, 'cakeoven', 1),
(3, 'cookieoven', 1),
(4, 'pizzaoven', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `pizzaoven`
--

CREATE TABLE IF NOT EXISTS `pizzaoven` (
  `uid` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `pizzaoven`
--

INSERT INTO `pizzaoven` (`uid`, `name`, `amount`, `exp`, `time`, `cash`, `sold`, `status`) VALUES
(1, 'pizza1', 1, 50, 1, 50, 0, 0),
(2, 'pizza2', 3, 60, 2, 60, 0, 0),
(3, 'pizza3', 0, 70, 3, 70, 0, 0),
(4, 'pizza4', 0, 80, 4, 80, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `oven` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `shop`
--

INSERT INTO `shop` (`id`, `name`, `amount`, `exp`, `time`, `cash`, `sold`, `oven`) VALUES
(1, 'bread1', 0, 30, 1, 50, 100, 'bread'),
(2, 'bread2', 0, 40, 2, 60, 120, 'bread'),
(3, 'bread3', 0, 50, 3, 70, 140, 'bread'),
(4, 'bread4', 0, 60, 4, 80, 160, 'bread'),
(5, 'cake1', 0, 40, 1, 50, 100, 'cake'),
(6, 'cake2', 0, 50, 2, 60, 120, 'cake'),
(7, 'cake3', 0, 60, 3, 70, 140, 'cake'),
(8, 'cake4', 0, 70, 4, 80, 160, 'cake'),
(9, 'cookie1', 0, 20, 1, 50, 100, 'cookie'),
(10, 'cookie2', 0, 30, 2, 60, 120, 'cookie'),
(11, 'cookie3', 0, 40, 3, 70, 140, 'cookie'),
(12, 'cookie4', 0, 50, 4, 80, 160, 'cookie'),
(13, 'pizza1', 0, 50, 1, 50, 100, 'pizza'),
(14, 'pizza2', 0, 60, 2, 60, 120, 'pizza'),
(15, 'pizza3', 0, 70, 3, 70, 140, 'pizza'),
(16, 'pizza4', 0, 80, 4, 80, 160, 'pizza');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `expup` int(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `password`, `nickname`, `gender`, `cash`, `exp`, `expup`, `level`) VALUES
('alan', '123', '維倫', 1, 178220, 500, 0, 1),
('kris', '123', 'krisliu', 0, 19870, 0, 0, 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `breadoven`
--
ALTER TABLE `breadoven`
  ADD PRIMARY KEY (`uid`);

--
-- 資料表索引 `cakeoven`
--
ALTER TABLE `cakeoven`
  ADD PRIMARY KEY (`uid`);

--
-- 資料表索引 `cookieoven`
--
ALTER TABLE `cookieoven`
  ADD PRIMARY KEY (`uid`);

--
-- 資料表索引 `oven`
--
ALTER TABLE `oven`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pizzaoven`
--
ALTER TABLE `pizzaoven`
  ADD PRIMARY KEY (`uid`);

--
-- 資料表索引 `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `breadoven`
--
ALTER TABLE `breadoven`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `cakeoven`
--
ALTER TABLE `cakeoven`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `cookieoven`
--
ALTER TABLE `cookieoven`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `oven`
--
ALTER TABLE `oven`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `pizzaoven`
--
ALTER TABLE `pizzaoven`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
