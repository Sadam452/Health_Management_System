-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2022 at 05:52 PM
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
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `serialNumber` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` char(20) NOT NULL,
  `lastName` char(20) NOT NULL,
  `contactNumber` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date1` date NOT NULL,
  `time1` varchar(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `service` varchar(30) NOT NULL,
  `professional` varchar(30) NOT NULL,
  `dateOfAppointment` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  UNIQUE KEY `serialNumber` (`serialNumber`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`serialNumber`, `firstName`, `lastName`, `contactNumber`, `email`, `date1`, `time1`, `category`, `service`, `professional`, `dateOfAppointment`) VALUES
(1, '$fname', '$lname', '7889422245', 'hussainganie388@gmail.com', '2021-08-21', '12-12', 'kalio', 'pat', 'sad', '2021-08-21 12:02:25.055755'),
(2, '$fname', '$lname', '7889422245', 'hussainganie388@gmail.com', '2021-08-21', '12-12', 'kalio', 'pat', 'sad', '2021-08-21 12:02:47.064419'),
(3, '$fname', '$lname', '7889422245', 'hussainganie388@gmail.com', '2021-08-21', '12:45 PM - 01:00 PM', 'kalio', 'pat', 'sad', '2021-08-21 12:03:48.078715'),
(4, 'SADAM', 'HUSSAIN', '7889422245', 'HUSSAINGANIE388@GMAIL.COM', '2021-08-22', '12:45 PM - 01:00 PM', 'Neurology', 'Department One', 'Dr Wxyz', '2021-08-21 12:05:31.296771'),
(5, 'MUBASHIR', 'CACHII', '7889422245', 'hussainganie388@gmail.com', '2021-12-22', '12:15 PM - 12:30 PM', 'Abcd', 'Abcd', 'Dr Aabid', '2021-08-21 12:07:07.644966'),
(6, 'sadam', 'hussain', '7889422245', 'hussainganie388@gmail.com', '2021-12-12', '12:00 PM - 12:15 PM', 'Neurology', 'Department One', 'Dr Aabid', '2021-08-21 12:09:29.448284'),
(7, 'sadam', 'sadam', '7889422234', 'hussainganie388@gmail.com', '2021-12-01', '12:15 PM - 12:30 PM', 'Neurology', 'Department One', 'Dr Aabid', '2021-08-21 12:15:45.632925'),
(8, 'sadam', 'SHAHZAD', '8899142479', 'hussainganie388@gmail.com', '2021-08-23', '11:15 AM - 11:30 AM', 'Neurology', 'Department One', 'Dr Wxyz', '2021-08-23 08:23:02.177394'),
(9, 'Abrar', 'Larah', '7889233344', 'laraabrar@gmail.com', '2021-08-23', '12:15 PM - 12:30 PM', 'Neurology', 'Department One', 'Dr Aabid', '2021-08-23 09:33:25.521710'),
(10, 'gvghss', 'gans', '7889422269', 'hussainganie388@gmail.com', '2021-09-03', '12:30 PM - 12:45 PM', 'Neurology', 'Department One', 'Dr Wxyz', '2021-09-03 16:56:41.134370'),
(11, 'rayees', 'wani', '9149708816', 'wanirahil66@gmail.com', '2021-10-16', '11:00 AM - 11:15 AM', 'Neurology', 'Department One', 'Dr abcd', '2021-10-14 19:31:58.887311'),
(12, 'rahil', 'rayees', '7889422245', 'wanirahil66@gmail.com', '2021-10-16', '12:30 PM - 12:45 PM', 'Neurology', 'Department One', 'Dr abcd', '2021-10-14 19:40:30.050684'),
(13, 'sadam', 'hussain', '7889422245', 'hussainganie388@gmail.com', '2022-02-13', '09:30 AM - 09:45 AM', 'Neurology', 'Department One', 'Dr abcd', '2022-02-13 06:06:29.067843'),
(14, 'Sadam', 'Ganie', '7889422245', 'hussainganie388@gmail.com', '2022-02-15', '09:00 AM - 09:15 AM', 'Neurology', 'Department One', 'Dr Aabid', '2022-02-13 06:10:37.431061');

-- --------------------------------------------------------

--
-- Table structure for table `usermessages`
--

DROP TABLE IF EXISTS `usermessages`;
CREATE TABLE IF NOT EXISTS `usermessages` (
  `name` char(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermessages`
--

INSERT INTO `usermessages` (`name`, `email`, `subject`, `message`) VALUES
('sadam', 'hussainganie388@gmail.com', 'help', '       gfdhtrs5aztfxd     '),
('sadam', 'hussainganie388@gmail.com', 'Partial dues', '        can u accept partial dues\r\n    ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `Name` char(30) NOT NULL,
  `Fathers_name` char(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` char(5) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`Email`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `Name`, `Fathers_name`, `Age`, `Contact`, `Email`, `password`, `status`) VALUES
(8, 'Sadam Hussain Ganie', 'Gulam Ahmad Ganie', 22, 7889422245, 'hussainganie388@gmail.com', '12345678', 'Yes'),
(9, 'Abrar Larah', 'ALtaf ahamd larah', 22, 7889422245, 'larahabrar@gmail.com', 'Hello@1233', 'no'),
(15, 'asif', 'wani', 34, 1111111111, 'asifwani501@gmail.com', '12121212', 'Yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
