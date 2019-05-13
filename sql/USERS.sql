-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2019 at 01:30 PM
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
-- Table structure for table `USERS`
--

CREATE TABLE IF NOT EXISTS `USERS` (
  `id` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `given name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `preferred name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `emergency exit` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `DOB` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `gender` varchar(1) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `job title` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `calorie goal` int(32) NOT NULL,
  `new user` tinyint(1) NOT NULL,
  `management level` int(1) NOT NULL,
  `organisation` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `org_group` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `password` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`id`, `username`, `given name`, `surname`, `preferred name`, `email`, `emergency exit`, `status`, `DOB`, `gender`, `job title`, `calorie goal`, `new user`, `management level`, `organisation`, `org_group`, `password`) VALUES
(1, 'nhaig', 'Nathan', 'Haig', 'Nate', 'nhaig@test.com', 1, 0, '15/01/1996', 'M', 'Lead Programmer', 0, 1, 1, 'Exertime Project', 'EPro', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
