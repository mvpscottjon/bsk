-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2017 at 06:49 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seven`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsk`
--

CREATE TABLE IF NOT EXISTS `bsk` (
  `id` int(11) NOT NULL,
  `gid` varchar(255) NOT NULL,
  `playernumber` varchar(255) NOT NULL,
  `getx` varchar(255) NOT NULL,
  `gety` varchar(255) NOT NULL,
  `datetime` varchar(6) NOT NULL,
  `screenx` varchar(255) NOT NULL,
  `screeny` varchar(255) NOT NULL,
  `clientx` varchar(255) NOT NULL,
  `clienty` varchar(255) NOT NULL,
  `quarter` varchar(255) NOT NULL,
  `offsetx` varchar(255) NOT NULL,
  `offsety` varchar(255) NOT NULL,
  `madeormiss` varchar(255) NOT NULL,
  `createtime` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bsk`
--

INSERT INTO `bsk` (`id`, `gid`, `playernumber`, `getx`, `gety`, `datetime`, `screenx`, `screeny`, `clientx`, `clienty`, `quarter`, `offsetx`, `offsety`, `madeormiss`, `createtime`) VALUES
(1, '1', '4', '375', '30', '', '535', '330', '534', '240', '', '375', '30', '1', '2017-06-14 02:47:35'),
(2, '1', '4', '556', '116', '', '716', '417', '716', '326', '', '556', '116', '1', '2017-06-14 02:47:36'),
(3, '1', '4', '704', '148', '', '864', '449', '864', '358', '', '704', '148', '1', '2017-06-14 02:47:37'),
(4, '1', '4', '725', '282', '', '886', '582', '885', '492', '', '725', '282', '0', '2017-06-14 02:47:38'),
(5, '1', '4', '460', '322', '', '620', '622', '620', '532', '', '460', '322', '0', '2017-06-14 02:47:38'),
(6, '1', '4', '397', '380', '', '558', '681', '557', '590', '', '397', '380', '0', '2017-06-14 02:47:39'),
(7, '1', '4', '352', '286', '', '512', '586', '512', '496', '', '352', '286', '1', '2017-06-14 02:47:41'),
(8, '1', '4', '381', '168', '', '541', '468', '540', '377', '', '381', '168', '1', '2017-06-14 02:47:41'),
(9, '1', '4', '340', '120', '', '500', '420', '500', '330', '', '340', '120', '1', '2017-06-14 02:47:43'),
(10, '1', '4', '234', '104', '', '395', '405', '394', '314', '', '234', '104', '0', '2017-06-14 02:47:45'),
(11, '1', '4', '170', '62', '', '331', '362', '330', '272', '', '170', '62', '0', '2017-06-14 02:47:46'),
(12, '1', '4', '254', '40', '', '415', '340', '414', '250', '', '254', '40', '0', '2017-06-14 02:47:47'),
(13, '1', '4', '462', '159', '', '622', '459', '621', '368', '', '462', '159', '1', '2017-06-14 02:47:57'),
(14, '1', '4', '462', '256', '', '622', '556', '621', '466', '', '462', '256', '1', '2017-06-14 02:47:58'),
(15, '1', '4', '466', '300', '', '627', '601', '626', '510', '', '466', '300', '0', '2017-06-14 02:47:59'),
(16, '1', '4', '404', '252', '', '565', '553', '564', '462', '', '404', '252', '0', '2017-06-14 02:48:00'),
(17, '1', '4', '336', '80', '', '497', '380', '496', '290', '', '336', '80', '0', '2017-06-14 02:48:01'),
(18, '1', '6', '292', '64', '', '452', '364', '452', '274', '', '292', '64', '0', '2017-06-14 02:48:03'),
(19, '1', '6', '354', '154', '', '515', '455', '514', '364', '', '354', '154', '0', '2017-06-14 02:48:04'),
(20, '1', '6', '394', '214', '', '555', '515', '554', '424', '', '394', '214', '0', '2017-06-14 02:48:04'),
(21, '1', '6', '402', '292', '', '563', '593', '562', '502', '', '402', '292', '0', '2017-06-14 02:48:05'),
(22, '1', '6', '396', '351', '', '556', '651', '556', '560', '', '396', '351', '1', '2017-06-14 02:48:05'),
(23, '1', '6', '415', '384', '', '575', '684', '574', '593', '', '415', '384', '1', '2017-06-14 02:48:06'),
(24, '1', '6', '491', '308', '', '651', '609', '650', '518', '', '491', '308', '1', '2017-06-14 02:48:06'),
(25, '1', '6', '456', '212', '', '616', '512', '616', '422', '', '456', '212', '1', '2017-06-14 02:48:07'),
(26, '1', '6', '352', '195', '', '512', '496', '512', '405', '', '352', '195', '0', '2017-06-14 02:48:10'),
(27, '1', '6', '444', '146', '', '604', '446', '604', '356', '', '444', '146', '1', '2017-06-14 02:48:18'),
(28, '1', '6', '373', '155', '', '534', '456', '533', '365', '', '373', '155', '0', '2017-06-14 02:48:19'),
(29, '1', '6', '301', '144', '', '462', '444', '461', '354', '', '301', '144', '0', '2017-06-14 02:48:19'),
(30, '1', '6', '452', '242', '', '612', '442', '612', '352', '', '452', '242', '0', '2017-06-14 02:48:21'),
(31, '1', '6', '892', '132', '', '1052', '418', '1052', '328', '', '892', '132', '0', '2017-06-14 02:48:23'),
(32, '1', '6', '714', '166', '', '875', '452', '874', '362', '', '714', '166', '0', '2017-06-14 02:48:23'),
(33, '1', '6', '598', '122', '', '759', '409', '758', '318', '', '598', '122', '0', '2017-06-14 02:48:24'),
(34, '1', '6', '516', '128', '', '677', '415', '676', '324', '', '516', '128', '0', '2017-06-14 02:48:24'),
(35, '1', '6', '544', '240', '', '704', '526', '704', '436', '', '544', '240', '0', '2017-06-14 02:48:25'),
(36, '1', '6', '568', '280', '', '729', '567', '728', '476', '', '568', '280', '0', '2017-06-14 02:48:25'),
(37, '1', '6', '617', '320', '', '778', '606', '777', '516', '', '617', '320', '0', '2017-06-14 02:48:26'),
(38, '1', '6', '742', '306', '', '903', '592', '902', '502', '', '742', '306', '0', '2017-06-14 02:48:26'),
(39, '1', '12', '544', '165', '', '704', '452', '704', '361', '', '544', '165', '0', '2017-06-14 02:48:36'),
(40, '1', '12', '664', '189', '', '824', '475', '824', '384', '', '664', '189', '1', '2017-06-14 02:48:37'),
(41, '1', '12', '664', '189', '', '824', '475', '824', '384', '', '664', '189', '1', '2017-06-14 02:48:37'),
(42, '1', '12', '811', '263', '', '971', '548', '970', '458', '', '811', '263', '1', '2017-06-14 02:48:37'),
(43, '1', '12', '811', '263', '', '971', '548', '970', '458', '', '811', '263', '1', '2017-06-14 02:48:37'),
(44, '1', '12', '848', '304', '', '1008', '591', '1008', '500', '', '848', '304', '0', '2017-06-14 02:48:37'),
(45, '1', '12', '800', '378', '', '960', '665', '960', '574', '', '800', '378', '0', '2017-06-14 02:48:38'),
(46, '1', '12', '629', '394', '', '790', '680', '789', '590', '', '629', '394', '0', '2017-06-14 02:48:38'),
(47, '1', '12', '479', '367', '', '639', '652', '638', '562', '', '479', '367', '1', '2017-06-14 02:48:39'),
(48, '1', '12', '468', '351', '', '628', '637', '628', '546', '', '468', '351', '1', '2017-06-14 02:48:39'),
(49, '1', '12', '286', '101', '', '447', '388', '446', '297', '', '286', '101', '0', '2017-06-14 02:48:39'),
(50, '1', '12', '298', '152', '', '459', '438', '458', '348', '', '298', '152', '0', '2017-06-14 02:48:40'),
(51, '1', '12', '312', '178', '', '472', '465', '472', '374', '', '312', '178', '0', '2017-06-14 02:48:40'),
(52, '1', '12', '376', '196', '', '536', '483', '536', '392', '', '376', '196', '0', '2017-06-14 02:48:40'),
(53, '1', '12', '392', '188', '', '552', '474', '552', '384', '', '392', '188', '0', '2017-06-14 02:48:41'),
(54, '1', '12', '384', '126', '', '544', '413', '544', '322', '', '384', '126', '0', '2017-06-14 02:48:41'),
(55, '1', '12', '358', '100', '', '518', '386', '517', '296', '', '358', '100', '1', '2017-06-14 02:48:42'),
(56, '1', '12', '298', '61', '', '458', '347', '457', '256', '', '298', '61', '1', '2017-06-14 02:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `bskgame`
--

CREATE TABLE IF NOT EXISTS `bskgame` (
  `gid` int(11) NOT NULL,
  `gstatus` varchar(255) NOT NULL,
  `createtime` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bskgame`
--

INSERT INTO `bskgame` (`gid`, `gstatus`, `createtime`) VALUES
(1, '1', '2017-06-14 02:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `bskmember`
--

CREATE TABLE IF NOT EXISTS `bskmember` (
  `id` int(11) NOT NULL,
  `gid` varchar(255) NOT NULL,
  `playernumber` varchar(255) NOT NULL,
  `playername` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `twid` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hw9_game`
--

CREATE TABLE IF NOT EXISTS `hw9_game` (
  `id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `time` datetime(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hw9_game`
--

INSERT INTO `hw9_game` (`id`, `position`, `user`, `time`) VALUES
(25, '4', '1', NULL),
(27, '3', '1', NULL),
(28, '1', '', NULL),
(29, '1', '', NULL),
(30, '1', '', NULL),
(31, '1', '', NULL),
(32, '1', '', NULL),
(33, '1', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `account`, `password`, `realname`) VALUES
(1, '123', '123', 'SSSS'),
(2, '123', '123', 'SSSS'),
(3, '123', '$2y$10$u.A6dLL44eHTXT8Nbq1mhenDu9x.vO3Fk7a5raDgKuc6KCtWv.YD2', ''),
(4, '456', '$2y$10$JvOu9/r0pSjK7K2O0P6hiuwRMWeC52zFBNfC71jD1URlxRpdkuVdW', ''),
(5, '', '$2y$10$b2BYWy9UWEZO4kREMNHpF.I/cMtNVazF4pdbmwvtELalYR9kVELpq', ''),
(6, 'gfhgf', '$2y$10$j7daOktJHv4JbE05QAMufuvDS0ALnFER5aoIX3uZDq6hHUZ5M4QTq', 'gfhf'),
(7, 'gh', '$2y$10$zWpZHzIy4LSZ5X1p6ePquuQGYfdjnPXJRf/OeQa76/weMvl/UMJte', 'gfhf'),
(8, '', '$2y$10$Dha3eTe7T644zNhzONKedusksxKPPoVWKAbkZ7tYwVUVHlMe4qoeK', ''),
(9, '', '$2y$10$qZ4a.8NeLVox7Hax/7DwhOfX.OYa2xWOuRtOWw2lhuZo0X6txskkW', ''),
(10, '', '$2y$10$I7MDY/AWyK48rUs.DSgqieUigI4cfhAyblrJI2nx7AQJ/nAcW3BF2', ''),
(11, '123', '$2y$10$P74ZJbMaB/Ab2BgaqBi43uFLAPcra73lQEONjdCb5HVgyvLXHFLKC', 'gfhfghfh');

-- --------------------------------------------------------

--
-- Table structure for table `playernumber`
--

CREATE TABLE IF NOT EXISTS `playernumber` (
  `id` int(11) NOT NULL,
  `gid` varchar(255) NOT NULL,
  `player1` varchar(255) NOT NULL,
  `player2` varchar(255) NOT NULL,
  `player3` varchar(255) NOT NULL,
  `player4` varchar(255) NOT NULL,
  `player5` varchar(255) NOT NULL,
  `player6` varchar(255) NOT NULL,
  `player7` varchar(255) NOT NULL,
  `player8` varchar(255) NOT NULL,
  `player9` varchar(255) NOT NULL,
  `player10` varchar(255) NOT NULL,
  `player11` varchar(255) NOT NULL,
  `player12` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `createtime` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playernumber`
--

INSERT INTO `playernumber` (`id`, `gid`, `player1`, `player2`, `player3`, `player4`, `player5`, `player6`, `player7`, `player8`, `player9`, `player10`, `player11`, `player12`, `note`, `createtime`) VALUES
(1, '1', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsk`
--
ALTER TABLE `bsk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bskgame`
--
ALTER TABLE `bskgame`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `bskmember`
--
ALTER TABLE `bskmember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hw9_game`
--
ALTER TABLE `hw9_game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playernumber`
--
ALTER TABLE `playernumber`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsk`
--
ALTER TABLE `bsk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `bskgame`
--
ALTER TABLE `bskgame`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bskmember`
--
ALTER TABLE `bskmember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hw9_game`
--
ALTER TABLE `hw9_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `playernumber`
--
ALTER TABLE `playernumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
