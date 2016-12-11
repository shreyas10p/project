-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2016 at 09:01 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `offices`
--

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Addr1` varchar(50) NOT NULL,
  `Addr2` varchar(50) NOT NULL,
  `Postal` varchar(50) NOT NULL,
  `Territory` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `Code`, `City`, `Addr1`, `Addr2`, `Postal`, `Territory`) VALUES
(1, '213', 'safd', 'dsfs', 'sfdf', 'Karnataka', 'dsffdf'),
(2, 'dsa', 'dasda', 'sdfas', 'sdsa', 'Karnataka', 'fsdfd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
