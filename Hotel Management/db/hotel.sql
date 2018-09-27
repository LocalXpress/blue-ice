-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 09:18 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `customerId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adhar` varchar(20) NOT NULL,
  `roomId` int(11) NOT NULL,
  `checked` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`customerId`, `name`, `phone`, `email`, `adhar`, `roomId`, `checked`) VALUES
(1, 'Swaroop', '9674507568', 'meet.ripon@gmail.com', '099999', 6, 1),
(2, 'Swaroop Acharjee', '9674507568', 'student@student.com', '9840404', 5, 1),
(4, 'wwww', '9674507568', 'meet.ripon@gmail.com', '9840404', 10, 1),
(5, 'Rudrajit', '8699595', 'meet.ripon@gmail.com', '9840404', 1, 1),
(6, 'Swaroop Acharjee', '8699595', 'student@student.com', '9840404', 2, 1),
(8, 'Uploaded', '8699595', 'student@student.com', '9840404', 3, 1),
(9, 'Sayan Saha', '893884323', 'sayan@gmail.com', '904784343', 1, 1),
(10, 'Swaroop', '9674507568', 'meet.ripon@gmail.com', '904784343', 11, 1),
(11, 'Rudrajit', '9674507568', 'student@student.com', '904784343', 14, 1),
(12, 'Bitan Chakraborty', '9848484', 'meet.ripon@gmail.com', '9840404', 15, 1),
(13, 'Swaroop', '8699595', 'sayan@gmail.com', '904784343', 14, 1),
(14, 'Uploaded', '9674507568', 'sayan@gmail.com', '904784343', 1, 1),
(15, 'Swaroop Acharjee', '9848484', 'meet.ripon@gmail.com', '904784343', 4, 1),
(16, 'SouraCena', '9874234', 'meet.ripon@gmail.com', '98382938', 12, 1),
(17, 'Another', '8938234', 'meet.ripon@gmail.com', '9840404', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomId` int(11) NOT NULL,
  `no_of_bed` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `booked` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomId`, `no_of_bed`, `cost`, `booked`) VALUES
(1, 2, 500, 0),
(2, 2, 500, 0),
(3, 2, 500, 0),
(4, 2, 500, 0),
(5, 3, 800, 0),
(6, 3, 800, 0),
(7, 3, 800, 0),
(8, 3, 800, 0),
(9, 5, 1200, 0),
(10, 5, 1200, 0),
(11, 5, 1200, 0),
(12, 5, 1200, 0),
(13, 10, 3000, 0),
(14, 10, 3000, 0),
(15, 10, 3000, 0),
(16, 15, 5000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
