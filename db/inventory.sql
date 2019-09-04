-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2019 at 01:31 PM
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
  UNIQUE KEY `sno` (`sno`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_history`
--

INSERT INTO `item_history` (`sno`, `id`, `date`, `quantity`, `type`) VALUES
(1, '1001', '2019-09-01 16:14:21', 100, 1),
(2, '1002', '2019-09-01 16:14:21', 20, 1),
(3, '1003', '2019-09-01 16:15:34', 5000, 1),
(4, '1004', '2019-09-01 16:15:34', 10000, 1),
(5, '1001', '2019-09-01 16:17:15', 25, 0),
(6, '1002', '2019-09-01 16:17:15', 5, 0),
(7, '1003', '2019-09-01 16:17:15', 1000, 0),
(8, '1004', '2019-09-01 16:17:15', 750, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`sno`, `id`, `name`, `metric`, `current_status`, `threshold`, `pic`) VALUES
(1, '1001', 'rice', 'kgs', 0, 25, NULL),
(2, '1002', 'sunflower oil', 'liters', 0, 10, NULL),
(3, '1003', 'pepper', 'grams', 0, 1000, NULL),
(4, '1004', 'chilli powder', 'grams', 0, 1000, NULL);

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
