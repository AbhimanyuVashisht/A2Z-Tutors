-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2017 at 10:53 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbw_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE IF NOT EXISTS `user1` (
  `user_sex` varchar(20) NOT NULL,
  `user_dob` date NOT NULL,
  `user_location` varchar(60) NOT NULL,
  `user_emailid` varchar(40) NOT NULL,
  `user_pass` varchar(40) NOT NULL,
  `user_mobileno` int(12) NOT NULL,
  `user_uname` varchar(60) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `user_field` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`user_sex`, `user_dob`, `user_location`, `user_emailid`, `user_pass`, `user_mobileno`, `user_uname`, `profession`, `user_field`) VALUES
('male', '2017-03-12', 'djcsknsnjsclk', 'rahul@gmail.com', 'Rahul1234', 2147483647, 'rahul', 'tutor', 'VLSI Designing');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
