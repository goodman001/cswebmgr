-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 01, 2018 at 11:56 PM
-- Server version: 5.6.36
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_csmgr`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

CREATE TABLE `db_admin` (
  `uid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`uid`, `username`, `password`, `code`) VALUES
('cs_5a37351ab9b09', 'csxueba', 'd90c2a7fa79ceb13c2de15e784058b11', 3330);

-- --------------------------------------------------------

--
-- Table structure for table `db_configure_exchange`
--

CREATE TABLE `db_configure_exchange` (
  `id` int(11) NOT NULL,
  `currency` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `rating` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_guests`
--

CREATE TABLE `db_guests` (
  `wxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `wxname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `paypalemail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `paypalname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_guests`
--

INSERT INTO `db_guests` (`wxid`, `wxname`, `email`, `paypalemail`, `paypalname`, `description`) VALUES
('ggkkkid', 'gname', '', '', '', ''),
('ggxxidid', 'ggxxnamename', '', '', '', ''),
('guesttest', 'guesttestname', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_guest_order`
--

CREATE TABLE `db_guest_order` (
  `wxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `orderid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `g_deadline` datetime NOT NULL,
  `g_state` int(11) NOT NULL DEFAULT '0',
  `remark` int(5) NOT NULL DEFAULT '5',
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_orders`
--

CREATE TABLE `db_orders` (
  `orderid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `createtime` datetime NOT NULL,
  `projectname` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `moneytype` char(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USD',
  `totalprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `guarantee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `description` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_technologies`
--

CREATE TABLE `db_technologies` (
  `techid` int(11) NOT NULL,
  `content` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_technologies`
--

INSERT INTO `db_technologies` (`techid`, `content`, `description`) VALUES
(0, '算法/数据结构', ''),
(1, 'php', ''),
(2, 'nodejs', ''),
(3, '前端', ''),
(4, 'java', ''),
(5, 'web', ''),
(6, 'python', ''),
(7, 'AI/机器学习', ''),
(8, 'R', ''),
(9, 'C/C++', ''),
(10, '网络相关', ''),
(11, 'database', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_workers`
--

CREATE TABLE `db_workers` (
  `wxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `wxname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `addtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_workers`
--

INSERT INTO `db_workers` (`wxid`, `wxname`, `email`, `description`, `addtime`) VALUES
('caoyi95', '曹翊', 'caoyi0905@163.com', '', '2017-12-30 23:36:52'),
('csuZengLu', 'tuofanV5', '0@0.com', '', '2017-12-31 00:58:19'),
('csyhohoho', 'csy', 'chshaoyi7@gmail.com', '周末时间', '2017-12-30 23:41:23'),
('daiwei_cn', 'dave', 'dai.wei@outlook.com', '支付宝:18651883810 戴', '2017-12-30 23:46:27'),
('fychen', '枫烨', '121314440@qq.com', '', '2017-12-30 23:49:46'),
('Greboxer', '繁易web', 'lxxyxzj@gmail.com', 'mssql', '2017-12-30 23:57:06'),
('icedx2012', 'Neko', '360368747@qq.com', '', '2017-12-31 00:28:38'),
('imcuizheng', 'John web', 'admin@iios.net', '', '2017-12-31 00:09:28'),
('kekeng', '柯铿', '0@0.com', '', '2017-12-31 00:14:55'),
('kinghs9', '小王', '875146286@qq.com', '支付宝:18062330558 王', '2017-12-31 01:00:44'),
('l199610122011', 'bug', '0@0.com', '能力未知', '2017-12-30 23:35:05'),
('Lifesign', '云袭', '0@0.com', '', '2017-12-31 01:05:51'),
('lu8533783', '光头', '0@0.com', '', '2017-12-30 23:58:44'),
('lvan_regicide', 'IVAN', 'lvan@protonmail.co', '', '2017-12-31 00:05:27'),
('neo600', '大雄', '0@0.com', '', '2017-12-31 01:07:23'),
('Nirvana_Qzh', 'Nirvana', '408985936@qq.com', '', '2017-12-31 00:33:01'),
('pxr22278', 'XiaorAx', '664158315@qq.com', 'swift js ', '2017-12-31 01:03:54'),
('s18042016047', '郝刚峰', 'haogangfeng@gmail.com', '', '2017-12-31 00:01:18'),
('vebuqi', '白善', 'vebuqi@gmail.com', '支付宝：18600295466 白', '2017-12-30 23:31:07'),
('wq454290437', 'smile face', 'wqlin0@foxmail.com', '', '2017-12-31 01:09:42'),
('wxid_k8qcdydxzzt012', 'SSSSSnow', '511422713@qq.com', '', '2017-12-31 00:56:42'),
('wxid_rwmtmjle5ams21', '前往', '0@0.com', '', '2017-12-31 00:52:00'),
('xiazhi0726', 'M.k265', '0@0.com', 'js', '2017-12-31 00:16:28'),
('xiongjiaji', 'PokerFace', 'xiongjiaji@gmail.com', '', '2017-12-31 00:38:29'),
('xohozu', 'xohozu', '0@0.com', '', '2017-12-31 01:04:58'),
('ylk875933125', 'Kaiux', 'kaiux@foxmail.com', '支付宝 13260905562 虞李凯', '2017-12-31 00:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `db_worker_order`
--

CREATE TABLE `db_worker_order` (
  `wxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `orderid` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `w_deadline` datetime NOT NULL,
  `w_payment` decimal(10,2) NOT NULL,
  `w_state` int(11) NOT NULL DEFAULT '0',
  `description` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_worker_tech`
--

CREATE TABLE `db_worker_tech` (
  `wxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `techid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_worker_tech`
--

INSERT INTO `db_worker_tech` (`wxid`, `techid`) VALUES
('caoyi95', 0),
('csuZengLu', 0),
('csyhohoho', 0),
('kinghs9', 0),
('lvan_regicide', 0),
('neo600', 0),
('wq454290437', 0),
('wxid_k8qcdydxzzt012', 0),
('wxid_rwmtmjle5ams21', 0),
('xiazhi0726', 0),
('xiongjiaji', 0),
('xohozu', 0),
('csuZengLu', 1),
('Greboxer', 1),
('imcuizheng', 1),
('Lifesign', 1),
('lu8533783', 1),
('vebuqi', 1),
('caoyi95', 2),
('daiwei_cn', 2),
('Greboxer', 2),
('s18042016047', 2),
('vebuqi', 2),
('daiwei_cn', 3),
('Greboxer', 3),
('imcuizheng', 3),
('vebuqi', 3),
('caoyi95', 4),
('csuZengLu', 4),
('icedx2012', 4),
('kekeng', 4),
('kinghs9', 4),
('l199610122011', 4),
('lvan_regicide', 4),
('neo600', 4),
('Nirvana_Qzh', 4),
('pxr22278', 4),
('s18042016047', 4),
('wq454290437', 4),
('wxid_k8qcdydxzzt012', 4),
('wxid_rwmtmjle5ams21', 4),
('xiazhi0726', 4),
('xiongjiaji', 4),
('ylk875933125', 4),
('csuZengLu', 5),
('daiwei_cn', 5),
('Greboxer', 5),
('imcuizheng', 5),
('l199610122011', 5),
('Lifesign', 5),
('lu8533783', 5),
('pxr22278', 5),
('xiazhi0726', 5),
('caoyi95', 6),
('daiwei_cn', 6),
('Greboxer', 6),
('icedx2012', 6),
('kinghs9', 6),
('lvan_regicide', 6),
('pxr22278', 6),
('wq454290437', 6),
('wxid_k8qcdydxzzt012', 6),
('xiazhi0726', 6),
('xohozu', 6),
('ylk875933125', 6),
('caoyi95', 7),
('csuZengLu', 7),
('kinghs9', 7),
('lvan_regicide', 7),
('wxid_rwmtmjle5ams21', 7),
('ylk875933125', 7),
('caoyi95', 8),
('fychen', 9),
('icedx2012', 9),
('kekeng', 9),
('kinghs9', 9),
('neo600', 9),
('Nirvana_Qzh', 9),
('pxr22278', 9),
('xiazhi0726', 9),
('xohozu', 9),
('ylk875933125', 9),
('fychen', 10),
('Nirvana_Qzh', 11),
('wxid_k8qcdydxzzt012', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `db_configure_exchange`
--
ALTER TABLE `db_configure_exchange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_guests`
--
ALTER TABLE `db_guests`
  ADD PRIMARY KEY (`wxid`);

--
-- Indexes for table `db_guest_order`
--
ALTER TABLE `db_guest_order`
  ADD PRIMARY KEY (`wxid`,`orderid`),
  ADD KEY `db_guest_order_ibfk_1` (`wxid`),
  ADD KEY `db_guest_order_ibfk_2` (`orderid`);

--
-- Indexes for table `db_orders`
--
ALTER TABLE `db_orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `db_technologies`
--
ALTER TABLE `db_technologies`
  ADD PRIMARY KEY (`techid`);

--
-- Indexes for table `db_workers`
--
ALTER TABLE `db_workers`
  ADD PRIMARY KEY (`wxid`);

--
-- Indexes for table `db_worker_order`
--
ALTER TABLE `db_worker_order`
  ADD PRIMARY KEY (`wxid`,`orderid`),
  ADD KEY `wxid` (`wxid`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `db_worker_tech`
--
ALTER TABLE `db_worker_tech`
  ADD PRIMARY KEY (`wxid`,`techid`),
  ADD KEY `wxid` (`wxid`),
  ADD KEY `techid` (`techid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_guest_order`
--
ALTER TABLE `db_guest_order`
  ADD CONSTRAINT `db_guest_order_ibfk_1` FOREIGN KEY (`wxid`) REFERENCES `db_guests` (`wxid`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_guest_order_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `db_orders` (`orderid`) ON DELETE CASCADE;

--
-- Constraints for table `db_worker_order`
--
ALTER TABLE `db_worker_order`
  ADD CONSTRAINT `db_worker_order_ibfk_1` FOREIGN KEY (`wxid`) REFERENCES `db_workers` (`wxid`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_worker_order_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `db_orders` (`orderid`) ON DELETE CASCADE;

--
-- Constraints for table `db_worker_tech`
--
ALTER TABLE `db_worker_tech`
  ADD CONSTRAINT `db_worker_tech_ibfk_1` FOREIGN KEY (`wxid`) REFERENCES `db_workers` (`wxid`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_worker_tech_ibfk_2` FOREIGN KEY (`techid`) REFERENCES `db_technologies` (`techid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
