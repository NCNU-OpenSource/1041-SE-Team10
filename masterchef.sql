-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015-12-28 04:22:14
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
  `uid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bread1` int(11) NOT NULL,
  `bread2` int(11) NOT NULL,
  `bread3` int(11) NOT NULL,
  `bread4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `breadoven`
--

INSERT INTO `breadoven` (`uid`, `bread1`, `bread2`, `bread3`, `bread4`) VALUES
('kris', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `cakeoven`
--

CREATE TABLE IF NOT EXISTS `cakeoven` (
  `uid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cake1` int(11) NOT NULL,
  `cake2` int(11) NOT NULL,
  `cake3` int(11) NOT NULL,
  `cake4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `cakeoven`
--

INSERT INTO `cakeoven` (`uid`, `cake1`, `cake2`, `cake3`, `cake4`) VALUES
('kris', 6, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `cookieoven`
--

CREATE TABLE IF NOT EXISTS `cookieoven` (
  `uid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie1` int(11) NOT NULL,
  `cookie2` int(11) NOT NULL,
  `cookie3` int(11) NOT NULL,
  `cookie4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `cookieoven`
--

INSERT INTO `cookieoven` (`uid`, `cookie1`, `cookie2`, `cookie3`, `cookie4`) VALUES
('kris', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `oven`
--

CREATE TABLE IF NOT EXISTS `oven` (
  `uid` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cakeoven` int(11) NOT NULL,
  `breadoven` int(11) NOT NULL,
  `pizzaoven` int(11) NOT NULL,
  `cookieoven` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `oven`
--

INSERT INTO `oven` (`uid`, `cakeoven`, `breadoven`, `pizzaoven`, `cookieoven`) VALUES
('kris', 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `pizzaoven`
--

CREATE TABLE IF NOT EXISTS `pizzaoven` (
  `uid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pizza1` int(11) NOT NULL,
  `pizza2` int(11) NOT NULL,
  `pizza3` int(11) NOT NULL,
  `pizza4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `password`, `nickname`, `gender`, `cash`, `exp`) VALUES
('kris', '123', 'krisliu', 0, 250, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `cakeoven`
--
ALTER TABLE `cakeoven`
  ADD PRIMARY KEY (`uid`);

--
-- 資料表索引 `oven`
--
ALTER TABLE `oven`
  ADD PRIMARY KEY (`uid`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
