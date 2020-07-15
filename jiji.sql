-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2020 at 05:40 AM
-- Server version: 5.7.23
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jiji`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Vehicle'),
(2, 'Property'),
(3, 'Mobile phones & tablet'),
(4, 'Electronics'),
(5, 'Home, Furniture & Appliances');

-- --------------------------------------------------------

--
-- Table structure for table `sub-category`
--

DROP TABLE IF EXISTS `sub-category`;
CREATE TABLE IF NOT EXISTS `sub-category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub-category`
--

INSERT INTO `sub-category` (`id`, `name`, `category_id`) VALUES
(1, 'Cars', 1),
(2, 'Buses & Microbuses', 1),
(3, 'Heavy Equipment', 1),
(4, 'Trucks & Trailers', 1),
(5, 'Boats', 1),
(6, 'House for rent', 2),
(7, 'House for sale', 2),
(8, 'Land for sale', 2),
(9, 'Lands for rent', 2),
(10, 'Mobile phones', 3),
(11, 'Tablets', 3),
(12, 'Smart Watches & Tracker', 3),
(13, 'Accessories for Mobile Phones & Tablets', 3),
(14, 'Laptops & Computers', 4),
(15, 'TV & DVD Equipment', 4),
(16, 'Networking Product', 4),
(17, 'Laptops & Computers', 4),
(18, 'TV & DVD Equipment', 4),
(19, 'Networking Product', 4),
(20, 'Furniture', 5),
(21, 'Garden', 5),
(22, 'Kitchen Appliances', 5),
(23, 'Home Appliances', 5),
(24, 'Furniture', 5),
(25, 'Garden', 5),
(26, 'Kitchen Appliances', 5),
(27, 'Home Appliances', 5),
(28, 'Skin Care', 6),
(29, 'Bath & Body', 6),
(30, 'Make Up', 6),
(31, 'Hair Beauty', 6),
(32, 'Skin Care', 6),
(33, 'Bath & Body', 6),
(34, 'Make Up', 6),
(35, 'Hair Beauty', 6),
(36, 'Skin Care', 6),
(37, 'Make Up', 6),
(38, 'Hair Beauty', 6),
(39, 'Skin Care', 6),
(40, 'Make Up', 6),
(41, 'Hair Beauty', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(11) NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`, `phoneNumber`) VALUES
(1, 'samuel', 'uchendu', 'samueluchendu47@gmail.com', '00000000', '09087275190'),
(8, 'Dammy', 'Jay', 'ade@gmail.com', '00000000', '09087275192'),
(9, 'Peace', 'MyLove', 'ade@gmail.com', '00000000', '09087275198'),
(10, 'Temmy', 'Lee', 'adizuekeziah@yahoo.com', '00000000', '09087275194'),
(16, 'Ade', 'Jamiu', 'jane@gmail.com', '22222222', '09087275198'),
(15, 'Jerry', 'Jane', 'adizuekeziah@yahoo.com', '00000000', '09087275190'),
(17, 'Muftau', 'ade', 'jane@gmail.com', '00000000', '09087275194'),
(18, 'Rose', 'leeeen', 'admin@gmail.com', '00000000', '09087275192'),
(19, 'Ajay', 'Yemi', 'adizuekeziah@yahoo.com', '00000000', '09087275194');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
