-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2019 at 01:56 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhaig`
--

-- --------------------------------------------------------

--
-- Table structure for table `ORGANISATIONS`
--

CREATE TABLE IF NOT EXISTS `ORGANISATIONS` (
  `Short name` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `Name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `Countdown Duration` int(32) NOT NULL,
  `Walking Ex Delay` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ORGANISATIONS`
--

INSERT INTO `ORGANISATIONS` (`Short name`, `Name`, `Countdown Duration`, `Walking Ex Delay`) VALUES
('UTAS', 'University Of Tasmania', 120, 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ORGANISATIONS`
--
ALTER TABLE `ORGANISATIONS`
  ADD PRIMARY KEY (`Short name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
