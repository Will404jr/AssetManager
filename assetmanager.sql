-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 29, 2024 at 11:59 AM
-- Server version: 5.7.40
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assetmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

DROP TABLE IF EXISTS `asset`;
CREATE TABLE IF NOT EXISTS `asset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `personnel_in_charge` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id`, `name`, `description`, `quantity`, `personnel_in_charge`) VALUES
(12, 'Avocado', 'boxes', 5, 'Reagan'),
(3, 'Pawpaw', 'basket', 8, 'Reagan'),
(4, 'Jackfruit', 'ripe', 10, 'Junior'),
(6, 'plates', 'boxes', 8, 'Rachkara Ivan'),
(7, 'Jerrycan', 'stacks', 5, 'Kassozi Mark'),
(8, 'Fans', 'Boxes', 4, 'Anzo John Paul'),
(10, 'desks', 'groups', 8, 'Kizito Mark'),
(11, 'Laptops', 'boxes', 6, 'Mabiei Martin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `personnel_ID` int(11) NOT NULL AUTO_INCREMENT,
  `personnel_type` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`personnel_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`personnel_ID`, `personnel_type`, `username`, `password`) VALUES
(1, 'staff', 'Arimpa', 'mark'),
(2, 'manager', 'Buluma', 'collin'),
(3, 'manager', 'Shariff', 'soft'),
(4, 'manager', 'Kayemba', 'kann'),
(5, 'admin', 'William123', 'baby'),
(6, 'staff', 'Mandem', 'serious'),
(7, 'manager', 'Kiku', 'love'),
(8, 'admin', 'Mart', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
