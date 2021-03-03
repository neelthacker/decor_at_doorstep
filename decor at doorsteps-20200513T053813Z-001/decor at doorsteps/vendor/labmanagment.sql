-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 09, 2019 at 03:06 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labmanagment`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabininfo`
--

DROP TABLE IF EXISTS `cabininfo`;
CREATE TABLE IF NOT EXISTS `cabininfo` (
  `labid` int(11) NOT NULL,
  `inchargeid` int(11) NOT NULL,
  `assistantid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categoryinfo`
--

DROP TABLE IF EXISTS `categoryinfo`;
CREATE TABLE IF NOT EXISTS `categoryinfo` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoryinfo`
--

INSERT INTO `categoryinfo` (`catid`, `name`) VALUES
(3, 'Printer'),
(2, 'Laptop'),
(1, 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=admin, 2=staff',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipmentinfo`
--

DROP TABLE IF EXISTS `equipmentinfo`;
CREATE TABLE IF NOT EXISTS `equipmentinfo` (
  `equid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `labid` int(11) NOT NULL,
  `uniqueno` varchar(50) NOT NULL,
  PRIMARY KEY (`equid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `labinfo`
--

DROP TABLE IF EXISTS `labinfo`;
CREATE TABLE IF NOT EXISTS `labinfo` (
  `labid` int(11) NOT NULL AUTO_INCREMENT,
  `block` varchar(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=cabin, 2=lab, 3=class',
  `labnaem` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY (`labid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

DROP TABLE IF EXISTS `productinfo`;
CREATE TABLE IF NOT EXISTS `productinfo` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `purchase` varchar(55) NOT NULL,
  `make` varchar(55) NOT NULL,
  `model` varchar(55) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specname`
--

DROP TABLE IF EXISTS `specname`;
CREATE TABLE IF NOT EXISTS `specname` (
  `specid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `description` varchar(55) NOT NULL,
  `parameter` varchar(55) NOT NULL,
  PRIMARY KEY (`specid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specvalue`
--

DROP TABLE IF EXISTS `specvalue`;
CREATE TABLE IF NOT EXISTS `specvalue` (
  `pid` int(11) NOT NULL,
  `specid` int(11) NOT NULL,
  `value` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
