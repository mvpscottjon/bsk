-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2017 at 07:43 PM
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
  `madeormiss` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bsk`
--

INSERT INTO `bsk` (`id`, `gid`, `playernumber`, `getx`, `gety`, `datetime`, `screenx`, `screeny`, `clientx`, `clienty`, `quarter`, `offsetx`, `offsety`, `madeormiss`) VALUES
(1, '', '4', '218', '118', '', '416', '296', '462', '229', '', '218', '118', '1'),
(2, '', '4', '414', '258', '', '592', '422', '657', '368', '', '414', '258', '1'),
(3, '', '5', '352', '192', '', '537', '363', '596', '303', '', '352', '192', '1'),
(4, '', '5', '455', '308', '', '629', '468', '698', '419', '', '455', '308', '1'),
(5, '', '7', '344', '225', '', '529', '393', '587', '336', '', '344', '225', '1'),
(6, '', '7', '463', '338', '', '636', '494', '706', '448', '', '463', '338', '1'),
(7, '', '7', '440', '351', '', '616', '506', '684', '462', '', '440', '351', '1'),
(8, '', '6', '298', '170', '', '488', '343', '542', '280', '', '298', '170', '1'),
(9, '', '6', '411', '282', '', '590', '444', '655', '392', '', '411', '282', '1'),
(10, '', '6', '450', '362', '', '625', '516', '694', '472', '', '450', '362', '1'),
(11, '', '8', '245', '185', '', '440', '357', '488', '296', '', '245', '185', '1'),
(12, '', '8', '416', '298', '', '595', '458', '660', '408', '', '416', '298', '1'),
(13, '', '8', '423', '354', '', '600', '508', '666', '464', '', '423', '354', '1'),
(14, '', '9', '276', '211', '', '468', '381', '520', '322', '', '276', '211', '1'),
(15, '', '9', '387', '345', '', '568', '500', '631', '456', '', '387', '345', '1'),
(16, '', '9', '397', '435', '', '577', '385', '640', '327', '', '397', '435', '1'),
(17, '', '9', '362', '354', '', '546', '312', '606', '246', '', '362', '354', '1'),
(18, '', '10', '356', '158', '', '540', '333', '600', '269', '', '356', '158', '1'),
(19, '', '10', '349', '235', '', '534', '402', '592', '346', '', '349', '235', '1'),
(20, '', '10', '409', '340', '', '588', '496', '653', '451', '', '409', '340', '1'),
(21, '', '10', '376', '353', '', '559', '508', '620', '464', '', '376', '353', '1'),
(22, '', '11', '234', '149', '', '431', '325', '478', '260', '', '234', '149', '1'),
(23, '', '11', '307', '211', '', '496', '380', '551', '322', '', '307', '211', '1'),
(24, '', '11', '369', '298', '', '552', '458', '613', '408', '', '369', '298', '1'),
(25, '', '11', '402', '338', '', '582', '495', '646', '449', '', '402', '338', '1'),
(26, '', '12', '274', '131', '', '467', '309', '518', '242', '', '274', '131', '1'),
(27, '', '12', '325', '200', '', '512', '370', '568', '311', '', '325', '200', '1'),
(28, '', '12', '338', '302', '', '524', '462', '582', '413', '', '338', '302', '1'),
(29, '', '12', '378', '346', '', '560', '502', '622', '457', '', '378', '346', '1'),
(30, '', '13', '289', '154', '', '480', '329', '533', '264', '', '289', '154', '1'),
(31, '', '13', '341', '268', '', '527', '432', '584', '379', '', '341', '268', '1'),
(32, '', '13', '369', '336', '', '552', '492', '613', '447', '', '369', '336', '1'),
(33, '', '13', '359', '398', '', '543', '549', '602', '509', '', '359', '398', '1'),
(34, '', '14', '208', '122', '', '407', '300', '451', '232', '', '208', '122', '1'),
(35, '', '14', '303', '200', '', '492', '370', '546', '311', '', '303', '200', '1'),
(36, '', '14', '339', '278', '', '525', '441', '583', '389', '', '339', '278', '1'),
(37, '', '14', '343', '366', '', '528', '520', '586', '477', '', '343', '366', '1'),
(38, '', '15', '249', '115', '', '444', '294', '493', '226', '', '249', '115', '1'),
(39, '', '15', '316', '206', '', '504', '376', '560', '317', '', '316', '206', '1'),
(40, '', '15', '325', '269', '', '512', '433', '568', '380', '', '325', '269', '1'),
(41, '', '15', '332', '291', '', '519', '452', '576', '402', '', '332', '291', '1'),
(42, '', '4', '313', '444', '', '502', '393', '557', '336', '', '313', '444', '0'),
(43, '', '4', '384', '484', '', '565', '429', '627', '376', '', '384', '484', '1'),
(44, '', '4', '392', '417', '', '572', '368', '635', '308', '', '392', '417', '1'),
(45, '', '4', '360', '376', '', '544', '331', '604', '267', '', '360', '376', '1'),
(46, '', '4', '251', '484', '', '446', '429', '495', '376', '', '251', '484', '1'),
(47, '', '10', '365', '431', '', '548', '381', '608', '322', '', '365', '431', '1'),
(48, '', '10', '400', '459', '', '580', '406', '644', '351', '', '400', '459', '1'),
(49, '', '10', '272', '502', '', '464', '444', '515', '393', '', '272', '502', '1'),
(50, '', '10', '189', '498', '', '390', '440', '432', '389', '', '189', '498', '1'),
(51, '', '10', '178', '458', '', '380', '404', '422', '349', '', '178', '458', '1'),
(52, '16', '4', '363', '171', '', '547', '345', '607', '282', '', '363', '171', '1'),
(53, '16', '4', '380', '342', '', '562', '484', '624', '438', '', '380', '342', '1'),
(54, '16', '4', '416', '398', '', '594', '535', '659', '494', '', '416', '398', '1'),
(55, '16', '4', '397', '480', '', '577', '609', '640', '576', '', '397', '480', '1'),
(56, '16', '4', '361', '506', '', '545', '632', '605', '602', '', '361', '506', '0'),
(57, '16', '4', '268', '471', '', '462', '600', '512', '567', '', '268', '471', '0'),
(58, '16', '4', '396', '350', '', '576', '492', '640', '446', '', '396', '350', '1'),
(59, '16', '4', '414', '394', '', '592', '531', '657', '489', '', '414', '394', '1'),
(60, '16', '4', '398', '458', '', '578', '588', '641', '553', '', '398', '458', '1'),
(61, '16', '4', '309', '484', '', '498', '612', '552', '580', '', '309', '484', '1'),
(62, '16', '4', '295', '435', '', '485', '569', '538', '531', '', '295', '435', '1'),
(63, '16', '4', '380', '327', '', '562', '471', '624', '423', '', '380', '327', '1'),
(64, '16', '4', '382', '299', '', '564', '446', '626', '395', '', '382', '299', '0'),
(65, '16', '4', '420', '240', '', '599', '393', '664', '336', '', '420', '240', '0'),
(66, '16', '4', '381', '199', '', '563', '356', '624', '295', '', '381', '199', '1'),
(67, '16', '4', '378', '195', '', '560', '353', '622', '291', '', '378', '195', '1'),
(68, '16', '4', '342', '170', '', '528', '330', '586', '266', '', '342', '170', '0'),
(69, '16', '4', '382', '306', '', '564', '452', '626', '402', '', '382', '306', '0'),
(70, '1', '4', '245', '125', '', '440', '303', '488', '236', '', '245', '125', '1'),
(71, '1', '4', '397', '332', '', '577', '476', '640', '428', '', '397', '332', '1'),
(72, '1', '4', '430', '394', '', '607', '531', '673', '489', '', '430', '394', '1'),
(73, '1', '4', '220', '144', '', '418', '320', '464', '255', '', '220', '144', '1'),
(74, '1', '4', '380', '409', '', '562', '545', '624', '504', '', '380', '409', '1'),
(75, '', '4', '424', '322', '', '601', '480', '667', '433', '', '424', '322', '1'),
(76, '', '4', '397', '453', '', '577', '585', '640', '549', '', '397', '453', '1'),
(77, '', '4', '464', '489', '', '638', '616', '708', '584', '', '464', '489', '1'),
(78, '', '4', '516', '402', '', '684', '539', '760', '498', '', '516', '402', '1'),
(79, '', '4', '381', '373', '', '563', '512', '624', '469', '', '381', '373', '1'),
(80, '', '4', '296', '429', '', '486', '563', '539', '525', '', '296', '429', '1'),
(81, '', '4', '144', '413', '', '349', '549', '387', '509', '', '144', '413', '1'),
(82, '', '4', '80', '403', '', '292', '540', '324', '499', '', '80', '403', '1'),
(83, '', '4', '121', '215', '', '329', '370', '365', '311', '', '121', '215', '1'),
(84, '', '4', '125', '151', '', '332', '313', '368', '247', '', '125', '151', '1'),
(85, '', '4', '183', '375', '', '384', '528', '426', '486', '', '183', '375', '1'),
(86, '', '4', '227', '382', '', '424', '336', '471', '273', '', '227', '382', '1'),
(87, '', '4', '363', '431', '', '547', '380', '607', '322', '', '363', '431', '1'),
(88, '', '4', '348', '465', '', '533', '412', '592', '357', '', '348', '465', '0'),
(89, '', '7', '387', '479', '', '568', '425', '631', '371', '', '387', '479', '0'),
(90, '', '7', '284', '466', '', '476', '412', '528', '358', '', '284', '466', '0'),
(91, '', '7', '406', '501', '', '586', '444', '650', '393', '', '406', '501', '0'),
(92, '', '7', '520', '469', '', '688', '416', '764', '361', '', '520', '469', '0'),
(93, '19', '4', '158', '149', '', '362', '324', '401', '260', '', '158', '149', '1'),
(94, '19', '4', '344', '478', '', '530', '423', '588', '369', '', '344', '478', '1'),
(95, '19', '4', '489', '405', '', '660', '358', '733', '297', '', '489', '405', '0'),
(96, '19', '4', '424', '500', '', '602', '443', '668', '392', '', '424', '500', '0'),
(97, '19', '4', '258', '475', '', '452', '421', '502', '367', '', '258', '475', '0'),
(98, '20', '4', '89', '429', '', '300', '379', '333', '320', '', '89', '429', '1'),
(99, '20', '4', '167', '468', '', '370', '414', '410', '360', '', '167', '468', '1'),
(100, '20', '4', '271', '448', '', '464', '397', '515', '340', '', '271', '448', '0'),
(101, '20', '4', '405', '400', '', '584', '352', '648', '291', '', '405', '400', '1'),
(102, '20', '4', '373', '366', '', '556', '323', '617', '258', '', '373', '366', '0'),
(103, '20', '4', '204', '408', '', '404', '360', '448', '300', '', '204', '408', '0'),
(104, '20', '4', '353', '429', '', '538', '380', '597', '321', '', '353', '429', '0'),
(105, '20', '4', '366', '482', '', '550', '427', '610', '374', '', '366', '482', '0'),
(106, '20', '10', '404', '426', '', '584', '377', '648', '318', '', '404', '426', '0'),
(107, '20', '4', '152', '359', '', '356', '316', '395', '250', '', '152', '359', '1'),
(108, '20', '4', '284', '408', '', '476', '361', '528', '300', '', '284', '408', '0'),
(109, '20', '4', '311', '73', '', '500', '256', '555', '184', '', '311', '73', '0'),
(110, '20', '13', '116', '140', '', '324', '316', '360', '251', '', '116', '140', '1'),
(111, '20', '13', '68', '180', '', '282', '352', '312', '291', '', '68', '180', '0'),
(112, '22', '4', '239', '109', '', '435', '289', '482', '220', '', '239', '109', '1'),
(113, '22', '4', '393', '388', '', '574', '342', '637', '280', '', '393', '388', '1'),
(114, '22', '4', '352', '459', '', '536', '406', '595', '351', '', '352', '459', '1'),
(115, '22', '4', '236', '431', '', '432', '380', '480', '322', '', '236', '431', '1'),
(116, '22', '4', '379', '370', '', '561', '326', '623', '262', '', '379', '370', '0'),
(117, '22', '4', '433', '346', '', '610', '304', '677', '238', '', '433', '346', '0'),
(118, '22', '5', '276', '106', '', '468', '286', '520', '217', '', '276', '106', '0'),
(119, '22', '5', '303', '131', '', '493', '309', '547', '242', '', '303', '131', '0'),
(120, '22', '6', '256', '136', '', '451', '313', '500', '247', '', '256', '136', '1'),
(121, '22', '6', '387', '194', '', '568', '365', '631', '304', '', '387', '194', '1'),
(122, '22', '6', '374', '258', '', '556', '422', '617', '368', '', '374', '258', '1'),
(123, '22', '6', '370', '482', '', '553', '427', '614', '374', '', '370', '482', '1'),
(124, '22', '6', '192', '162', '', '392', '336', '435', '272', '', '192', '162', '1'),
(125, '22', '6', '322', '438', '', '510', '387', '566', '329', '', '322', '438', '1'),
(126, '22', '6', '224', '81', '', '422', '263', '468', '192', '', '224', '81', '1'),
(127, '22', '4', '156', '73', '', '360', '256', '400', '184', '', '156', '73', '1'),
(128, '22', '6', '254', '98', '', '448', '279', '497', '209', '', '254', '98', '1'),
(129, '22', '6', '360', '185', '', '544', '356', '604', '296', '', '360', '185', '1'),
(130, '22', '6', '392', '265', '', '572', '429', '635', '376', '', '392', '265', '1'),
(131, '22', '6', '338', '508', '', '524', '450', '582', '400', '', '338', '508', '1'),
(132, '22', '6', '255', '502', '', '449', '445', '498', '393', '', '255', '502', '1'),
(133, '22', '6', '200', '489', '', '400', '432', '444', '380', '', '200', '489', '1'),
(134, '22', '6', '154', '466', '', '359', '412', '398', '357', '', '154', '466', '1'),
(135, '22', '6', '309', '167', '', '499', '341', '553', '278', '', '309', '167', '0'),
(136, '22', '6', '366', '419', '', '550', '370', '610', '311', '', '366', '419', '0'),
(137, '22', '6', '418', '380', '', '596', '335', '662', '272', '', '418', '380', '0'),
(138, '22', '6', '356', '341', '', '540', '301', '600', '233', '', '356', '341', '0'),
(139, '22', '11', '343', '129', '', '529', '307', '587', '240', '', '343', '129', '0'),
(140, '23', '4', '261', '98', '', '455', '279', '504', '209', '', '261', '98', '1'),
(141, '23', '4', '401', '171', '', '581', '344', '645', '282', '', '401', '171', '1'),
(142, '23', '4', '414', '305', '', '592', '464', '657', '416', '', '414', '305', '1'),
(143, '23', '4', '372', '376', '', '555', '529', '616', '487', '', '372', '376', '1'),
(144, '23', '4', '319', '99', '', '507', '280', '562', '210', '', '319', '99', '1'),
(145, '23', '4', '350', '173', '', '535', '346', '593', '284', '', '350', '173', '1'),
(146, '23', '4', '375', '303', '', '557', '463', '618', '414', '', '375', '303', '1'),
(147, '23', '4', '277', '105', '', '469', '285', '520', '216', '', '277', '105', '1'),
(148, '23', '4', '388', '155', '', '569', '330', '632', '266', '', '388', '155', '1'),
(149, '23', '4', '432', '247', '', '608', '412', '675', '358', '', '432', '247', '1'),
(150, '23', '4', '434', '308', '', '611', '468', '678', '419', '', '434', '308', '1'),
(151, '23', '4', '330', '329', '', '517', '486', '574', '440', '', '330', '329', '1'),
(152, '23', '4', '289', '316', '', '480', '475', '533', '427', '', '289', '316', '1'),
(153, '24', '4', '210', '118', '', '409', '296', '454', '229', '', '210', '118', '1'),
(154, '24', '4', '320', '194', '', '508', '365', '564', '304', '', '320', '194', '1'),
(155, '24', '4', '363', '251', '', '547', '416', '607', '362', '', '363', '251', '1'),
(156, '24', '4', '340', '336', '', '526', '493', '584', '447', '', '340', '336', '1'),
(157, '25', '4', '184', '122', '', '386', '300', '428', '233', '', '184', '122', '1'),
(158, '25', '4', '305', '155', '', '495', '330', '549', '266', '', '305', '155', '1'),
(159, '25', '4', '406', '271', '', '585', '434', '649', '382', '', '406', '271', '1'),
(160, '25', '4', '370', '376', '', '553', '529', '614', '487', '', '370', '376', '1'),
(161, '25', '4', '290', '419', '', '481', '568', '534', '530', '', '290', '419', '1'),
(162, '25', '4', '385', '546', '', '567', '484', '629', '437', '', '385', '546', '1'),
(163, '25', '4', '452', '456', '', '627', '403', '696', '347', '', '452', '456', '1'),
(164, '25', '4', '384', '369', '', '565', '325', '627', '260', '', '384', '369', '1'),
(165, '25', '4', '291', '363', '', '482', '320', '535', '255', '', '291', '363', '0'),
(166, '25', '6', '184', '109', '', '385', '289', '427', '220', '', '184', '109', '1'),
(167, '25', '6', '363', '189', '', '547', '360', '607', '300', '', '363', '189', '1'),
(168, '25', '6', '423', '265', '', '600', '428', '666', '376', '', '423', '265', '1'),
(169, '25', '6', '402', '367', '', '582', '520', '646', '478', '', '402', '367', '1'),
(170, '25', '6', '332', '424', '', '519', '572', '576', '535', '', '332', '424', '1'),
(171, '25', '6', '272', '410', '', '464', '559', '515', '520', '', '272', '410', '1'),
(172, '25', '6', '224', '370', '', '421', '523', '467', '480', '', '224', '370', '1'),
(173, '25', '6', '212', '354', '', '411', '508', '456', '464', '', '212', '354', '1'),
(174, '25', '6', '232', '344', '', '429', '500', '476', '455', '', '232', '344', '1'),
(175, '25', '6', '332', '326', '', '519', '484', '576', '437', '', '332', '326', '0'),
(176, '25', '6', '247', '200', '', '442', '370', '490', '311', '', '247', '200', '1'),
(177, '25', '6', '220', '191', '', '418', '362', '464', '302', '', '220', '191', '1'),
(178, '25', '6', '202', '189', '', '402', '360', '446', '300', '', '202', '189', '1'),
(179, '25', '6', '147', '166', '', '352', '340', '391', '277', '', '147', '166', '0'),
(180, '25', '6', '324', '153', '', '512', '329', '568', '264', '', '324', '153', '0'),
(181, '26', '4', '269', '229', '', '462', '296', '512', '229', '', '269', '229', '1'),
(182, '26', '4', '439', '202', '', '615', '272', '682', '201', '', '439', '202', '1'),
(183, '26', '4', '448', '127', '', '623', '205', '691', '127', '', '448', '127', '1'),
(184, '26', '4', '304', '131', '', '493', '309', '547', '242', '', '304', '131', '1'),
(185, '26', '4', '369', '359', '', '552', '316', '613', '250', '', '369', '359', '1'),
(186, '26', '4', '430', '385', '', '607', '339', '673', '276', '', '430', '385', '1'),
(187, '26', '4', '411', '458', '', '590', '404', '655', '349', '', '411', '458', '1'),
(188, '26', '4', '357', '492', '', '541', '436', '600', '384', '', '357', '492', '1'),
(189, '26', '5', '215', '87', '', '413', '268', '458', '198', '', '215', '87', '1'),
(190, '26', '5', '414', '377', '', '592', '332', '657', '268', '', '414', '377', '1'),
(191, '26', '5', '446', '426', '', '621', '377', '689', '318', '', '446', '426', '1'),
(192, '26', '5', '387', '479', '', '568', '424', '631', '370', '', '387', '479', '1'),
(193, '26', '5', '339', '268', '', '525', '235', '583', '160', '', '339', '268', '0'),
(194, '26', '5', '380', '275', '', '562', '240', '624', '167', '', '380', '275', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bskgame`
--

CREATE TABLE IF NOT EXISTS `bskgame` (
  `gid` int(11) NOT NULL,
  `gstatus` varchar(255) NOT NULL,
  `createtime` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bskgame`
--

INSERT INTO `bskgame` (`gid`, `gstatus`, `createtime`) VALUES
(1, '1', '2017-06-13 02:08:53'),
(2, '1', '2017-06-13 02:22:50'),
(3, '1', '2017-06-13 02:32:14'),
(4, '1', '2017-06-13 02:34:24'),
(5, '1', '2017-06-13 02:34:56'),
(6, '1', '2017-06-13 02:37:11'),
(7, '1', '2017-06-13 02:39:00'),
(8, '1', '2017-06-13 02:39:45'),
(9, '1', '2017-06-13 02:40:36'),
(10, '1', '2017-06-13 02:44:56'),
(11, '1', '2017-06-13 02:46:21'),
(12, '1', '2017-06-13 02:50:08'),
(13, '1', '2017-06-13 02:52:32'),
(14, '1', '2017-06-13 02:53:40'),
(15, '1', '2017-06-13 02:54:29'),
(16, '1', '2017-06-13 02:55:03'),
(17, '1', '2017-06-13 02:58:05'),
(18, '1', '2017-06-13 03:02:17'),
(19, '1', '2017-06-13 03:03:07'),
(20, '1', '2017-06-13 03:06:59'),
(21, '1', '2017-06-13 03:08:23'),
(22, '1', '2017-06-13 03:13:12'),
(23, '1', '2017-06-13 03:15:04'),
(24, '1', '2017-06-13 03:16:24'),
(25, '1', '2017-06-13 03:19:10'),
(26, '1', '2017-06-13 03:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `bskmember`
--

CREATE TABLE IF NOT EXISTS `bskmember` (
  `gid` int(11) NOT NULL,
  `playnumber` varchar(255) NOT NULL,
  `playname` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `twid` varchar(255) NOT NULL
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
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playernumber`
--

INSERT INTO `playernumber` (`id`, `gid`, `player1`, `player2`, `player3`, `player4`, `player5`, `player6`, `player7`, `player8`, `player9`, `player10`, `player11`, `player12`, `note`) VALUES
(1, '', '1', '2', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(3, '', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(4, '', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(5, '', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(6, '', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(7, '', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(8, '', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(9, '', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(10, '2', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(11, '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(12, '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(13, '4', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(14, '5', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(15, '6', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(16, '7', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(17, '8', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(18, '9', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(19, '10', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(20, '11', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(21, '11', '555', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(22, '12', '1123', '13', '524', '4425', '45245', '9', '10', '11', '12', '13', '14', '15', ''),
(23, '13', '777', '888', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(24, '14', '999', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(25, '15', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(26, '16', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(27, '17', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(28, '17', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(29, '18', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(30, '19', '111111', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(31, '20', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(32, '21', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(33, '22', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(34, '23', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(35, '24', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(36, '25', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', ''),
(37, '26', '16', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '');

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
  ADD PRIMARY KEY (`gid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=195;
--
-- AUTO_INCREMENT for table `bskgame`
--
ALTER TABLE `bskgame`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `bskmember`
--
ALTER TABLE `bskmember`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
