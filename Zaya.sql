-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2013 at 07:49 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Zaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`, `id`) VALUES
('zaya', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_name`, `type`, `price`, `content`, `date`, `id`) VALUES
('1', '1', 1, '1', '2013-05-28 18:18:12', 13),
('bulgaa', '2', 2, 'aaaa', '2013-05-28 18:18:28', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE IF NOT EXISTS `tender` (
  `user_name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`user_name`, `address`, `date`, `id`, `product_id`) VALUES
('zaya', '123', '2013-05-28 18:20:20', 28, 13),
('muui', 'hfgkjd', '2013-05-28 18:20:33', 29, 14),
('bulgaa', 'damba ', '2013-05-28 19:00:27', 30, 14),
('', '', '2013-05-28 19:24:56', 31, 14);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
