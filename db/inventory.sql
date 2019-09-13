-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2019 at 01:40 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_history`
--

DROP TABLE IF EXISTS `item_history`;
CREATE TABLE IF NOT EXISTS `item_history` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int(11) NOT NULL,
  `type` int(1) NOT NULL,
  `vendor_name` varchar(100) DEFAULT NULL,
  `vendor_mob` varchar(15) DEFAULT NULL,
  `vendor_adr` text,
  UNIQUE KEY `sno` (`sno`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_history`
--

INSERT INTO `item_history` (`sno`, `id`, `date`, `quantity`, `type`, `vendor_name`, `vendor_mob`, `vendor_adr`) VALUES
(1, '1', '2019-07-31 19:30:00', 2, 1, 'Shrinica Departmental Stores', '044 4386 1177', 'Mugalivakkam, Chennai.'),
(2, '1', '2019-07-31 20:30:00', 2, 0, NULL, NULL, NULL),
(3, '1', '2019-08-01 21:30:00', 10, 1, 'Maharaja Store', '95515 53266', 'Porur, Chennai.'),
(4, '1', '2019-08-02 22:30:00', 10, 1, 'Sri Murugan Departmental Stores', '044 2362 1312', 'vadapalani,, Chennai.'),
(5, '2', '2019-07-31 20:30:00', 10, 1, 'Yaswin Departmental Stores', '93810 83883', 'Chromepet, Chennai.'),
(6, '2', '2019-07-31 21:30:00', 10, 0, NULL, NULL, NULL),
(7, '2', '2019-08-01 22:30:00', 15, 1, 'Adyar Departmental Stores', '044 2445 7784', 'Adyar, Chennai.'),
(8, '2', '2019-08-01 22:30:00', 10, 0, NULL, NULL, NULL),
(9, '2', '2019-08-02 20:30:00', 3, 0, NULL, NULL, NULL),
(10, '3', '2019-07-31 20:30:00', 10, 1, 'Maharaja Store', '95515 53266', 'Porur, Chennai.'),
(11, '3', '2019-07-31 21:30:00', 10, 0, NULL, NULL, NULL),
(12, '3', '2019-08-01 22:30:00', 10, 1, 'Yaswin Departmental Stores', '93810 83883', 'Chromepet, Chennai.'),
(13, '3', '2019-08-01 22:30:00', 10, 1, 'Mohan department stores', '044 2464 2921', 'Mylapore, Chennai.'),
(14, '3', '2019-08-02 20:30:00', 15, 0, NULL, NULL, NULL),
(15, '4', '2019-07-31 20:30:00', 10, 1, 'Sri Ganesh provision store', '044 2476 8354', 'Porur, Chennai.'),
(16, '4', '2019-07-31 21:30:00', 10, 0, NULL, NULL, NULL),
(17, '4', '2019-08-01 22:30:00', 5, 1, 'Mohan department stores', '044 2464 2921', 'Mylapore, Chennai.'),
(18, '4', '2019-08-01 22:30:00', 15, 1, 'Shrinica Departmental Stores', '044 4386 1177', 'Mugalivakkam, Chennai.'),
(19, '4', '2019-08-02 20:30:00', 10, 1, 'Sri Ganesh provision store', '044 2476 8354', 'Porur, Chennai.'),
(20, '5', '2019-07-31 20:30:00', 10, 1, 'Maharaja Store', '95515 53266', 'Porur, Chennai.'),
(21, '5', '2019-07-31 21:30:00', 10, 0, NULL, NULL, NULL),
(22, '5', '2019-08-01 22:30:00', 30, 1, 'Mohan department stores', '044 2464 2921', 'Mylapore, Chennai.'),
(23, '5', '2019-08-01 22:30:00', 15, 0, NULL, NULL, NULL),
(24, '5', '2019-08-02 20:30:00', 10, 1, 'Adyar Departmental Stores', '044 2445 7784', 'Adyar, Chennai.'),
(25, '6', '2019-07-31 20:30:00', 10, 1, 'Mohan department stores', '044 2464 2921', 'Mylapore, Chennai.'),
(26, '6', '2019-07-31 21:30:00', 10, 0, NULL, NULL, NULL),
(27, '6', '2019-08-01 22:30:00', 5, 1, 'Shrinica Departmental Stores', '044 4386 1177', 'Mugalivakkam, Chennai.'),
(28, '6', '2019-08-01 22:30:00', 5, 0, NULL, NULL, NULL),
(29, '6', '2019-08-02 20:30:00', 10, 1, 'Maharaja Store', '95515 53266', 'Porur, Chennai.'),
(30, '7', '2019-07-31 20:30:00', 10, 1, 'Yaswin Departmental Stores', '93810 83883', 'Chromepet, Chennai.'),
(31, '7', '2019-07-31 21:30:00', 10, 0, NULL, NULL, NULL),
(32, '7', '2019-08-01 22:30:00', 10, 1, 'Mohan department stores', '044 2464 2921', 'Mylapore, Chennai.'),
(33, '7', '2019-08-01 22:30:00', 5, 1, 'Sri Murugan Departmental Stores', '044 2362 1312', 'vadapalani,, Chennai.'),
(34, '7', '2019-08-02 20:30:00', 5, 1, 'Kumaran Departmental Stores', '98415 54155', 'Kodambakkam, Chennai.'),
(35, '8', '2019-07-31 20:30:00', 10, 1, 'Adyar Departmental Stores', '044 2445 7784', 'Adyar, Chennai.'),
(36, '8', '2019-07-31 21:30:00', 10, 0, NULL, NULL, NULL),
(37, '8', '2019-08-01 22:30:00', 5, 1, 'Kumaran Departmental Stores', '98415 54155', 'Kodambakkam, Chennai.'),
(38, '8', '2019-08-01 22:30:00', 5, 0, NULL, NULL, NULL),
(39, '8', '2019-08-02 20:30:00', 15, 1, 'Shrinica Departmental Stores', '044 4386 1177', 'Mugalivakkam, Chennai.'),
(40, '9', '2019-07-31 20:30:00', 10, 1, 'Sri Ganesh provision store', '044 2476 8354', 'Porur, Chennai.'),
(41, '9', '2019-07-31 21:30:00', 10, 0, NULL, NULL, NULL),
(42, '9', '2019-08-01 22:30:00', 5, 1, 'Kumaran Departmental Stores', '98415 54155', 'Kodambakkam, Chennai.'),
(43, '9', '2019-08-01 22:30:00', 3, 1, 'Yaswin Departmental Stores', '93810 83883', 'Chromepet, Chennai.'),
(44, '9', '2019-08-02 20:30:00', 2, 1, 'Adyar Departmental Stores', '044 2445 7784', 'Adyar, Chennai.'),
(45, '10', '2019-07-31 20:30:00', 10, 1, 'Kumaran Departmental Stores', '98415 54155', 'Kodambakkam, Chennai.'),
(46, '10', '2019-07-31 21:30:00', 10, 0, NULL, NULL, NULL),
(47, '10', '2019-08-01 22:30:00', 5, 1, 'Adyar Departmental Stores', '044 2445 7784', 'Adyar, Chennai.'),
(48, '10', '2019-08-01 22:30:00', 5, 0, NULL, NULL, NULL),
(49, '10', '2019-08-02 20:30:00', 15, 1, 'Sri Murugan Departmental Stores', '044 2362 1312', 'vadapalani,, Chennai.');

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

DROP TABLE IF EXISTS `item_list`;
CREATE TABLE IF NOT EXISTS `item_list` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `metric` varchar(20) NOT NULL,
  `current_status` int(11) DEFAULT NULL,
  `threshold` int(11) NOT NULL,
  `pic` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`sno`, `id`, `name`, `metric`, `current_status`, `threshold`, `pic`) VALUES
(1, '1', 'Maida', 'kg', 20, 5, 'maida.jpg'),
(11, '10', 'Pepper', 'kg', 15, 3, 'pepper.jpg'),
(2, '2', 'Wheat', 'kg', 2, 4, 'wheat.jpg'),
(3, '3', 'Oil', 'ltr', 5, 6, 'oil.jpg'),
(4, '4', 'Moong dal', 'kg', 30, 6, 'moongdal.jpg'),
(5, '5', 'Toor dal', 'kg', 5, 10, 'toordal.jpg'),
(6, '6', 'Urad dal', 'kg', 10, 2, 'uraddal.jpg'),
(8, '7', 'Channa dal', 'kg', 20, 5, 'channa.jpg'),
(9, '8', 'Chilli Powder', 'kg', 15, 3, 'chilli.jpg'),
(10, '9', 'Dalda', 'kg', 10, 3, 'dalda.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_history`
--
ALTER TABLE `item_history`
  ADD CONSTRAINT `item_history_ibfk_1` FOREIGN KEY (`id`) REFERENCES `item_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
