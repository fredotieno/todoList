-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 31, 2014 at 03:54 AM
-- Server version: 5.5.34-0ubuntu0.13.10.1
-- PHP Version: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `todoList`
--

-- --------------------------------------------------------

--
-- Table structure for table `Tasks`
--

CREATE TABLE IF NOT EXISTS `Tasks` (
  `TaskName` varchar(30) NOT NULL,
  `Status` int(11) NOT NULL,
  `id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tasks`
--

INSERT INTO `Tasks` (`TaskName`, `Status`, `id`) VALUES
('Cycle', 1, '2014-01-29 08:04:54'),
('Writing', 1, '2014-01-29 08:23:48'),
('Swim', 1, '2014-01-29 08:40:21'),
('Run', 1, '2014-01-29 08:52:44'),
('Walk', 1, '2014-01-29 08:55:17'),
('Read', 1, '2014-01-29 08:55:53'),
('texting', 1, '2014-01-29 09:19:00'),
('logging', 1, '2014-01-29 09:19:23'),
('Sitting', 1, '2014-01-29 10:32:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
