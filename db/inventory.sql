-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2019 at 04:11 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

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
  UNIQUE KEY `sno` (`sno`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_history`
--

INSERT INTO `item_history` (`sno`, `id`, `date`, `quantity`, `type`) VALUES
(1, '1', '2019-07-31 19:30:00', 2, 1),
(2, '1', '2019-07-31 20:30:00', 2, 0),
(3, '1', '2019-08-01 21:30:00', 10, 1),
(4, '1', '2019-08-02 22:30:00', 10, 1),
(5, '2', '2019-07-31 20:30:00', 10, 1),
(6, '2', '2019-07-31 21:30:00', 10, 0),
(7, '2', '2019-08-01 22:30:00', 15, 1),
(8, '2', '2019-08-01 22:30:00', 10, 0),
(9, '2', '2019-08-02 20:30:00', 3, 0),
(10, '3', '2019-07-31 20:30:00', 10, 1),
(11, '3', '2019-07-31 21:30:00', 10, 0),
(12, '3', '2019-08-01 22:30:00', 10, 1),
(13, '3', '2019-08-01 22:30:00', 10, 1),
(14, '3', '2019-08-02 20:30:00', 15, 0),
(15, '4', '2019-07-31 20:30:00', 10, 1),
(16, '4', '2019-07-31 21:30:00', 10, 0),
(17, '4', '2019-08-01 22:30:00', 5, 1),
(18, '4', '2019-08-01 22:30:00', 15, 1),
(19, '4', '2019-08-02 20:30:00', 10, 1),
(20, '5', '2019-07-31 20:30:00', 10, 1),
(21, '5', '2019-07-31 21:30:00', 10, 0),
(22, '5', '2019-08-01 22:30:00', 30, 1),
(23, '5', '2019-08-01 22:30:00', 15, 0),
(24, '5', '2019-08-02 20:30:00', 10, 1),
(25, '6', '2019-07-31 20:30:00', 10, 1),
(26, '6', '2019-07-31 21:30:00', 10, 0),
(27, '6', '2019-08-01 22:30:00', 5, 1),
(28, '6', '2019-08-01 22:30:00', 5, 0),
(29, '6', '2019-08-02 20:30:00', 10, 1),
(30, '7', '2019-07-31 20:30:00', 10, 1),
(31, '7', '2019-07-31 21:30:00', 10, 0),
(32, '7', '2019-08-01 22:30:00', 10, 1),
(33, '7', '2019-08-01 22:30:00', 5, 1),
(34, '7', '2019-08-02 20:30:00', 5, 1),
(35, '8', '2019-07-31 20:30:00', 10, 1),
(36, '8', '2019-07-31 21:30:00', 10, 0),
(37, '8', '2019-08-01 22:30:00', 5, 1),
(38, '8', '2019-08-01 22:30:00', 5, 0),
(39, '8', '2019-08-02 20:30:00', 15, 1),
(40, '9', '2019-07-31 20:30:00', 10, 1),
(41, '9', '2019-07-31 21:30:00', 10, 0),
(42, '9', '2019-08-01 22:30:00', 5, 1),
(43, '9', '2019-08-01 22:30:00', 3, 1),
(44, '9', '2019-08-02 20:30:00', 2, 1),
(45, '10', '2019-07-31 20:30:00', 10, 1),
(46, '10', '2019-07-31 21:30:00', 10, 0),
(47, '10', '2019-08-01 22:30:00', 5, 1),
(48, '10', '2019-08-01 22:30:00', 5, 0),
(49, '10', '2019-08-02 20:30:00', 15, 1);

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
(1, '1', 'Maida', 'kg', 20, 5, 'images\\inv1\\Maida.jpg'),
(11, '10', 'Pepper', 'kg', 15, 3, 'images\\inv1\\Pepper.jpg'),
(2, '2', 'Wheat', 'kg', 2, 4, 'images\\inv1\\Wheat.jpg'),
(3, '3', 'Oil', 'ltr', 5, 6, 'images\\inv1\\oil.jpg'),
(4, '4', 'Moong dal', 'kg', 30, 6, 'images\\inv1\\Moongdal.jpg'),
(5, '5', 'Toor dal', 'kg', 5, 10, 'images\\inv1\\Toordal.jpg'),
(6, '6', 'Urad dal', 'kg', 10, 2, 'images\\inv1\\Uraddal.jpg'),
(8, '7', 'Channa dal', 'kg', 20, 5, 'images\\inv1\\Channa.jpg'),
(9, '8', 'Chilli Powder', 'kg', 15, 3, 'images\\inv1\\Chilli.jpg'),
(10, '9', 'Dalda', 'kg', 10, 3, 'images\\inv1\\Dalda.jpg');

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
