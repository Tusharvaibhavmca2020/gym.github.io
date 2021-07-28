-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2021 at 05:19 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence_records`
--

DROP TABLE IF EXISTS `attendence_records`;
CREATE TABLE IF NOT EXISTS `attendence_records` (
  `sl` int(255) NOT NULL AUTO_INCREMENT,
  `add_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence_records`
--

INSERT INTO `attendence_records` (`sl`, `add_id`, `name`, `status`, `date`) VALUES
(8, 1001, 'Vidhi', 'Absent', '2021-07-15'),
(7, 1001, 'Vidhi', 'Present', '2021-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `fee_records`
--

DROP TABLE IF EXISTS `fee_records`;
CREATE TABLE IF NOT EXISTS `fee_records` (
  `fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `add_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `fee` int(10) NOT NULL,
  PRIMARY KEY (`fee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1016 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_records`
--

INSERT INTO `fee_records` (`fee_id`, `add_id`, `name`, `date`, `fee`) VALUES
(1015, 1001, 'tushar thakur', '2021-07-14', 1350),
(1014, 1002, 'Gaurav', '2021-07-14', 1250);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `name`, `mob`, `address`) VALUES
('tushar@gmail.com', 'tushar1234', 'Tushar Thakur', '9798065801', 'Bihar'),
('admin@gmail.com', 'admin1234', 'admin', '1234567890', 'address');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
CREATE TABLE IF NOT EXISTS `query` (
  `name` varchar(20) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `query` varchar(255) NOT NULL,
  PRIMARY KEY (`mob`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

DROP TABLE IF EXISTS `trainee`;
CREATE TABLE IF NOT EXISTS `trainee` (
  `add_id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `fee` int(15) NOT NULL,
  `Date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`add_id`),
  UNIQUE KEY `mob` (`mob`)
) ENGINE=MyISAM AUTO_INCREMENT=1007 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`add_id`, `name`, `mob`, `address`, `fee`, `Date`, `gender`) VALUES
(1001, 'Vidhi', '9876543210', 'varanasi', 1050, '2021-07-14', 'Female'),
(1002, 'Tushar', '9798065801', 'Bihar', 1000, '2021-07-14', 'Male'),
(1003, 'Gaurav', '1234567890', 'Bihar', 950, '2021-07-14', 'Male'),
(1004, 'Thakur Gaurav', '4561237890', 'bihar', 1020, '2021-07-14', 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
