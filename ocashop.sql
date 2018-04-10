-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2018 at 12:44 PM
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ocashop`
--
CREATE DATABASE IF NOT EXISTS `ocashop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ocashop`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cat_Name` varchar(15) NOT NULL,
  PRIMARY KEY (`cat_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_ID`, `cat_Name`) VALUES
(1, 'Apparel'),
(2, 'Books'),
(3, 'Digital'),
(4, 'Portraits');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(70) NOT NULL,
  `town` varchar(70) NOT NULL,
  `province` varchar(70) NOT NULL,
  `zip` varchar(4) NOT NULL,
  `telephone` varchar(7) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productions`
--

CREATE TABLE IF NOT EXISTS `productions` (
  `prod_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(120) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `ShowDates` varchar(100) DEFAULT NULL,
  `prod_poster` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`prod_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL,
  `product_cat` varchar(10) NOT NULL,
  `product_collection` varchar(20) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `product_available` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL,
  `reg_date` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
