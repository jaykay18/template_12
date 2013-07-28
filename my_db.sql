-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2013 at 05:20 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(65) NOT NULL,
  `upass` varchar(65) NOT NULL,
  `uemail` varchar(65) NOT NULL,
  `ulogintime` varchar(20) NOT NULL,
  `ulastlogouttime` varchar(20) NOT NULL,
  `ustatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `uname`, `upass`, `uemail`, `ulogintime`, `ulastlogouttime`, `ustatus`) VALUES
(2, 'test', '$2y$11$QNuo9RLYeXc4g2yGfZWwr.9MJf2lVZ.GQg9iKbJ12BnmBgG17tPvu', 'test@test.com', '27-07-2013 17:08:29', '27-07-2013 17:08:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_data`
--

CREATE TABLE IF NOT EXISTS `master_data` (
  `uid` int(10) NOT NULL,
  `Party_Name` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Liability_Year` int(11) DEFAULT NULL,
  `Forum` varchar(255) DEFAULT NULL,
  `Amount_Pending` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_data`
--

INSERT INTO `master_data` (`uid`, `Party_Name`, `Description`, `Liability_Year`, `Forum`, `Amount_Pending`) VALUES
(2, 'testparty', 'testdesc', 2002, 'chennai', '2000'),
(2, 'test3', 'testdesc 3', 2012, 'delhi', '2000000'),
(2, 'test2', 'testdesc 2', 2012, 'delhi', '2000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
