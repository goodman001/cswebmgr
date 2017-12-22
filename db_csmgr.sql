-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2017 at 11:53 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_csmgr`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

CREATE TABLE IF NOT EXISTS `db_admin` (
  `uid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`uid`, `username`, `password`, `code`) VALUES
('cs_5a37351ab9b09', 'csxueba', 'd90c2a7fa79ceb13c2de15e784058b11', 3330);

-- --------------------------------------------------------

--
-- Table structure for table `db_guests`
--

CREATE TABLE IF NOT EXISTS `db_guests` (
  `wxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `wxname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `paypalemail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `paypalname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`wxid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_guests`
--

INSERT INTO `db_guests` (`wxid`, `wxname`, `email`, `paypalemail`, `paypalname`, `description`) VALUES
('guesttest', 'guesttestname', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_guest_order`
--

CREATE TABLE IF NOT EXISTS `db_guest_order` (
  `wxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `orderid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `g_state` int(11) NOT NULL DEFAULT '0',
  `remark` int(5) NOT NULL DEFAULT '5',
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  KEY `db_guest_order_ibfk_1` (`wxid`),
  KEY `db_guest_order_ibfk_2` (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_guest_order`
--

INSERT INTO `db_guest_order` (`wxid`, `orderid`, `g_state`, `remark`, `description`) VALUES
('guesttest', 'cs_5a3c55d438958', 0, 5, ''),
('guesttest', 'cs_5a3c5632b8ec0', 0, 5, ''),
('guesttest', 'cs_5a3c56f80a0fa', 0, 5, ''),
('guesttest', 'cs_5a3c58481de5e', 0, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `db_orders`
--

CREATE TABLE IF NOT EXISTS `db_orders` (
  `orderid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `createtime` datetime NOT NULL,
  `projectname` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `g_deadtime` datetime NOT NULL,
  `moneytype` char(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USD',
  `totalprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `guarantee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `exchange` decimal(10,2) NOT NULL DEFAULT '1.00',
  `description` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_orders`
--

INSERT INTO `db_orders` (`orderid`, `createtime`, `projectname`, `g_deadtime`, `moneytype`, `totalprice`, `guarantee`, `exchange`, `description`) VALUES
('cs_5a3c55d438958', '2017-12-21 16:43:29', 'projectname', '2017-12-21 16:43:29', 'USD', 300.00, 150.00, 6.65, ''),
('cs_5a3c5632b8ec0', '2017-12-21 16:43:29', 'projectname', '2017-12-21 16:43:29', 'USD', 300.00, 150.00, 6.65, ''),
('cs_5a3c56f80a0fa', '2017-12-21 16:50:10', 'pptest', '2017-12-21 16:50:10', 'USD', 300.00, 150.00, 6.65, ''),
('cs_5a3c58481de5e', '2017-12-21 16:50:10', 'pptest', '2017-12-21 16:50:10', 'USD', 300.00, 150.00, 6.65, ''),
('cs_5a3c587e88727', '2017-12-21 16:50:10', 'pptest', '2017-12-21 16:50:10', 'USD', 300.00, 150.00, 6.65, '');

-- --------------------------------------------------------

--
-- Table structure for table `db_technologies`
--

CREATE TABLE IF NOT EXISTS `db_technologies` (
  `techid` int(11) NOT NULL,
  `content` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`techid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_technologies`
--

INSERT INTO `db_technologies` (`techid`, `content`, `description`) VALUES
(0, '算法/数据结构', ''),
(1, 'php', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_workers`
--

CREATE TABLE IF NOT EXISTS `db_workers` (
  `wxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `wxname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`wxid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_workers`
--

INSERT INTO `db_workers` (`wxid`, `wxname`, `email`, `description`, `addtime`) VALUES
('wxid1', 'wxname1', 'abc@gg.com', '', '2017-12-20 15:45:13'),
('wxxx', 'xname', 'aiisong@ucdavis.edu', '', '2017-12-20 16:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `db_worker_order`
--

CREATE TABLE IF NOT EXISTS `db_worker_order` (
  `wxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `orderid` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `w_deadline` datetime NOT NULL,
  `w_payment` decimal(10,2) NOT NULL,
  `w_state` int(11) NOT NULL DEFAULT '0',
  `description` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  KEY `wxid` (`wxid`),
  KEY `orderid` (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_worker_order`
--

INSERT INTO `db_worker_order` (`wxid`, `orderid`, `w_deadline`, `w_payment`, `w_state`, `description`) VALUES
('wxid1', 'cs_5a3c55d438958', '2017-12-21 16:43:29', 150.00, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `db_worker_tech`
--

CREATE TABLE IF NOT EXISTS `db_worker_tech` (
  `wxid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `techid` int(11) NOT NULL,
  PRIMARY KEY (`wxid`,`techid`),
  KEY `wxid` (`wxid`),
  KEY `techid` (`techid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_worker_tech`
--

INSERT INTO `db_worker_tech` (`wxid`, `techid`) VALUES
('wxxx', 0),
('wxid1', 1);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
