-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2015 at 04:56 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rental_27419562`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `type` enum('OWNER','TENANT') NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `log_in` varchar(15) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `date_entered` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`type`, `first_name`, `last_name`, `phone`, `email`, `log_in`, `password`, `date_entered`) VALUES
('TENANT', 'Mike', 'Smith', '(111)111-1111', 'abcd.efg@gmail.com', 'banana', '11111111', '2015-04-18 02:55:10'),
('OWNER', 'John', 'Smith', '(111)111-1111', 'abcd.efg@gmail.com', 'banana1', '11111111', '2015-04-18 02:55:10'),
('TENANT', 'Alex', 'Smith', '(111)111-1111', 'abcd.efg@gmail.com', 'banana2', '11111111', '2015-04-18 02:55:10'),
('OWNER', 'Dimitri', 'Smith', '(111)111-1111', 'abcd.efg@gmail.com', 'banana3', '11111111', '2015-04-18 02:55:11'),
('TENANT', 'Michael', 'Smith', '(111)111-1111', 'abcd.efg@gmail.com', 'banana4', '11111111', '2015-04-18 02:55:11'),
('OWNER', 'Sarah', 'Smith', '(111)111-1111', 'abcd.efg@gmail.com', 'banana5', '11111111', '2015-04-18 02:55:11'),
('TENANT', 'Alexa', 'Smith', '(111)111-1111', 'abcd.efg@gmail.com', 'banana6', '11111111', '2015-04-18 02:55:11'),
('OWNER', 'Patrick', 'Smith', '(111)111-1111', 'abcd.efg@gmail.com', 'banana7', '11111111', '2015-04-18 02:55:11'),
('TENANT', 'Viktor', 'Smith', '(111)111-1111', 'abcd.efg@gmail.com', 'banana8', '11111111', '2015-04-18 02:55:11'),
('OWNER', 'Jed', 'Smith', '(111)111-1111', 'abcd.efg@gmail.com', 'banana9', '11111111', '2015-04-18 02:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `opreferences`
--

CREATE TABLE IF NOT EXISTS `opreferences` (
  `pets` enum('yes','no') NOT NULL,
  `smoking` enum('yes','no') NOT NULL,
  `age` int(10) unsigned NOT NULL,
  `employed` enum('yes','no') NOT NULL,
  `income` int(10) unsigned NOT NULL,
  `log_in` varchar(15) NOT NULL,
  UNIQUE KEY `log_in` (`log_in`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opreferences`
--

INSERT INTO `opreferences` (`pets`, `smoking`, `age`, `employed`, `income`, `log_in`) VALUES
('no', 'yes', 20, 'yes', 0, 'banana1'),
('yes', 'no', 30, 'no', 22000, 'banana3'),
('no', 'yes', 30, 'no', 30000, 'banana5'),
('yes', 'no', 40, 'yes', 35000, 'banana7'),
('no', 'no', 40, 'yes', 50000, 'banana9');

-- --------------------------------------------------------

--
-- Table structure for table `oproperties`
--

CREATE TABLE IF NOT EXISTS `oproperties` (
  `title` varchar(30) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `province` varchar(15) NOT NULL,
  `postalcode` varchar(15) NOT NULL,
  `price` mediumint(8) unsigned NOT NULL,
  `date_entered` date NOT NULL,
  `message` varchar(300) NOT NULL,
  `log_in` varchar(15) NOT NULL,
  UNIQUE KEY `log_in` (`log_in`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oproperties`
--

INSERT INTO `oproperties` (`title`, `street`, `city`, `province`, `postalcode`, `price`, `date_entered`, `message`, `log_in`) VALUES
('title', 'Elm Street', 'Montreal', 'Qc', 'h1h 1h1', 65000, '2015-04-17', 'message', 'banana1'),
('title1', 'Guy Street', 'Laval', 'Qc', 'h1h 1h1', 85000, '2015-04-17', 'message 1', 'banana3'),
('title2', 'Elemer Street', 'Montreal', 'Qc', 'h0h 0h0', 25000, '2015-04-17', 'message 2', 'banana5'),
('title3', 'Catherine Street', 'South Shore', 'Qc', 'h0h 0h0', 125000, '2015-04-17', 'message 3', 'banana7'),
('title4', 'Crescent', 'Laval', 'Qc', 'h1h 1h1', 65000, '2015-04-17', 'message 4', 'banana9');

-- --------------------------------------------------------

--
-- Table structure for table `tpreferences`
--

CREATE TABLE IF NOT EXISTS `tpreferences` (
  `city` varchar(15) NOT NULL,
  `province` varchar(15) NOT NULL,
  `postalcode` varchar(15) NOT NULL,
  `price` mediumint(8) unsigned NOT NULL,
  `date_entered` date NOT NULL,
  `message` varchar(300) NOT NULL,
  `log_in` varchar(15) NOT NULL,
  UNIQUE KEY `log_in` (`log_in`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpreferences`
--

INSERT INTO `tpreferences` (`city`, `province`, `postalcode`, `price`, `date_entered`, `message`, `log_in`) VALUES
('Laval', 'Qc', 'h0h 0h0', 100000, '2015-04-17', 'message', 'banana'),
('Montreal', 'Qc', 'h0h 0h0', 100000, '2015-04-17', 'message1', 'banana2'),
('Montreal', 'Qc', 'h0h 0h0', 100000, '2015-04-17', 'message2', 'banana4'),
('Montreal', 'Qc', 'h0h 0h0', 100000, '2015-04-17', 'message3', 'banana6'),
('Montreal', 'Qc', 'h0h 0h0', 100000, '2015-04-17', 'message4', 'banana8');

-- --------------------------------------------------------

--
-- Table structure for table `tprofiles`
--

CREATE TABLE IF NOT EXISTS `tprofiles` (
  `pets` enum('yes','no') NOT NULL,
  `smoking` enum('yes','no') NOT NULL,
  `age` int(10) unsigned NOT NULL,
  `employed` enum('yes','no') NOT NULL,
  `income` int(10) unsigned NOT NULL,
  `log_in` varchar(15) NOT NULL,
  UNIQUE KEY `log_in` (`log_in`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tprofiles`
--

INSERT INTO `tprofiles` (`pets`, `smoking`, `age`, `employed`, `income`, `log_in`) VALUES
('no', 'yes', 20, 'yes', 0, 'banana'),
('yes', 'no', 30, 'no', 20000, 'banana2'),
('no', 'yes', 30, 'no', 30000, 'banana4'),
('yes', 'no', 40, 'yes', 40000, 'banana6'),
('no', 'no', 40, 'yes', 50000, 'banana8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
