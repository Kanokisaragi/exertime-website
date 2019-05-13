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
-- Table structure for table `ORG_GROUP`
--

CREATE TABLE IF NOT EXISTS `ORG_GROUP` (
  `Organisation` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `Group_Name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `Group_Short_Name` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `Run Exertime Every` int(11) NOT NULL,
  `Must Be Completed Every` int(11) NOT NULL,
  `Default Postpone Interval` int(11) NOT NULL,
  `Walking Exercise` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `Walking Ex Delay` int(11) NOT NULL,
  `Walking Exercise Prompt` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `Notification Dialog Prompt` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL COMMENT 'Case-Sensitive',
  `Emergency Exit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ORG_GROUP`
--

INSERT INTO `ORG_GROUP` (`Organisation`, `Group_Name`, `Group_Short_Name`, `Run Exertime Every`, `Must Be Completed Every`, `Default Postpone Interval`, `Walking Exercise`, `Walking Ex Delay`, `Walking Exercise Prompt`, `Notification Dialog Prompt`, `Emergency Exit`) VALUES
('UTAS', 'Exertime Project', 'EPro', 120, 180, 15, 'Walk', 120, 'You''ve been away. Record your walk?', 'Please Run Exertime.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ORG_GROUP`
--
ALTER TABLE `ORG_GROUP`
  ADD PRIMARY KEY (`Group_Short_Name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
