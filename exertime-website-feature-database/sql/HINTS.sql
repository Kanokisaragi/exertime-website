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
-- Table structure for table `HINTS`
--

CREATE TABLE IF NOT EXISTS `HINTS` (
  `id` int(11) NOT NULL,
  `Department` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `hint` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `Hint Order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HINTS`
--
ALTER TABLE `HINTS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `HINTS`
--
ALTER TABLE `HINTS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
