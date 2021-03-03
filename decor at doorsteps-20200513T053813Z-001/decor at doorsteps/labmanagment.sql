-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2020 at 08:36 AM
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
  `labno` varchar(55) NOT NULL,
  `inchargeid` int(11) NOT NULL,
  `assistantid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabininfo`
--

INSERT INTO `cabininfo` (`labno`, `inchargeid`, `assistantid`) VALUES
('2', 3, 4),
('2', 1, 2),
('F106A', 1, 4),
('F106A', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `categoryinfo`
--

DROP TABLE IF EXISTS `categoryinfo`;
CREATE TABLE IF NOT EXISTS `categoryinfo` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoryinfo`
--

INSERT INTO `categoryinfo` (`catid`, `name`) VALUES
(13, 'ardino'),
(12, 'Projector'),
(2, 'Laptop'),
(14, 'lll');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `name`, `contactno`, `type`, `username`, `password`, `email`) VALUES
(1, 'Hiren Rathod', '1234567890', 2, 'admin', 'admin', 'h.rathod5005@gmail.com'),
(4, 'Rohan Sorathiya', '12345678', 2, 'rohan', 'rohan', 'rohan@gmail.com'),
(5, 'Bishu Pradhan', '889898', 1, 'bishu', 'bishu', 'lpopop@gmail.com'),
(9, 'opo', 'ppop', 2, 'jdd', 'll', 'dk@efd');

-- --------------------------------------------------------

--
-- Table structure for table `equipmentinfo`
--

DROP TABLE IF EXISTS `equipmentinfo`;
CREATE TABLE IF NOT EXISTS `equipmentinfo` (
  `equid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(55) DEFAULT NULL,
  `labno` varchar(55) DEFAULT NULL,
  `uniqueno` varchar(50) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`equid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipmentinfo`
--

INSERT INTO `equipmentinfo` (`equid`, `pid`, `labno`, `uniqueno`, `remarks`) VALUES
(7, 'b909', 'F106A', 'TEQUIP3/CP/202', 'OPOO'),
(9, 'Bill_09', 'F106A', 'AR01', 'workinh');

-- --------------------------------------------------------

--
-- Table structure for table `labinfo`
--

DROP TABLE IF EXISTS `labinfo`;
CREATE TABLE IF NOT EXISTS `labinfo` (
  `labno` varchar(55) NOT NULL,
  `block` varchar(50) DEFAULT NULL,
  `floor` varchar(50) DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL,
  `labname` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `areaw` int(11) DEFAULT NULL,
  `areah` int(11) DEFAULT NULL,
  PRIMARY KEY (`labno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labinfo`
--

INSERT INTO `labinfo` (`labno`, `block`, `floor`, `type`, `labname`, `department`, `areaw`, `areah`) VALUES
('F106A', 'F', 'Ground', 'Lab', 'Advance Computer Lab', 'Computer', 600, 600),
('F808', 'p', 'third', 'Lab', 'room', 'comppp', 1200, 1200),
('F909', 'F', 'Second', 'Lab', 'OPP', 'Civil', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

DROP TABLE IF EXISTS `productinfo`;
CREATE TABLE IF NOT EXISTS `productinfo` (
  `pid` varchar(55) NOT NULL,
  `catid` int(11) NOT NULL,
  `date` varchar(55) NOT NULL,
  `price` varchar(11) NOT NULL,
  `qty` varchar(11) NOT NULL,
  `purchase` varchar(55) NOT NULL,
  `make` varchar(55) NOT NULL,
  `model` varchar(55) NOT NULL,
  PRIMARY KEY (`pid`,`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`pid`, `catid`, `date`, `price`, `qty`, `purchase`, `make`, `model`) VALUES
('b909', 2, '2019-02-26', '89000', '6', 'TEQUIP', 'HP', 'Vastro'),
('Bill_09', 13, '', '1000', '10', 'h.rathod5005@gmail.com', 'h.rathod5005@gmail.com', 'h.rathod5005@gmail.com'),
('b909', 12, '2020-02-12', '56000', '12', 'lllp', 'ascdsdf', 'sdferdf');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specname`
--

INSERT INTO `specname` (`specid`, `catid`, `description`, `parameter`) VALUES
(10, 12, 'resolution', 'pixel'),
(11, 2, 'HDD', 'GB'),
(12, 2, 'display', 'inch');

-- --------------------------------------------------------

--
-- Table structure for table `specvalue`
--

DROP TABLE IF EXISTS `specvalue`;
CREATE TABLE IF NOT EXISTS `specvalue` (
  `pid` varchar(55) NOT NULL,
  `specid` int(11) NOT NULL,
  `value` varchar(55) NOT NULL,
  PRIMARY KEY (`pid`,`specid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specvalue`
--

INSERT INTO `specvalue` (`pid`, `specid`, `value`) VALUES
('b909', 11, '1000'),
('b909', 12, '17'),
('b909', 6, '90');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
