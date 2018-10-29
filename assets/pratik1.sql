-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 05:36 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pratik1`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
`aid` int(11) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `acid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`aid`, `aname`, `acid`) VALUES
(6, 'Mulund', 1),
(7, 'Bhandup', 1),
(8, 'Thane City', 2),
(9, 'Kalyan City', 3);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`) VALUES
(1, 'Mumbai'),
(2, 'Thane'),
(3, 'Kalyan'),
(4, 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `m` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
`m_id` int(11) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_path` text NOT NULL,
  `m_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `movie_screen`
--

CREATE TABLE IF NOT EXISTS `movie_screen` (
`ms_id` int(11) NOT NULL,
  `ms_movieid` int(11) NOT NULL,
  `ms_screenid` int(11) NOT NULL,
  `ms_end` date NOT NULL,
  `ms_start` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE IF NOT EXISTS `screen` (
`sc_id` int(11) NOT NULL,
  `sc_name` varchar(100) NOT NULL,
  `sc_thid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`sc_id`, `sc_name`, `sc_thid`) VALUES
(1, 'screen A', 3),
(2, 'screen B', 3),
(3, 'screen 1', 4),
(4, 'screen 2', 4);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE IF NOT EXISTS `seats` (
`se_id` int(11) NOT NULL,
  `se_amount` int(11) NOT NULL,
  `se_no` int(11) NOT NULL,
  `se_screen_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`se_id`, `se_amount`, `se_no`, `se_screen_id`) VALUES
(29, 100, 5, 1),
(30, 100, 6, 1),
(31, 250, 7, 1),
(32, 250, 8, 1),
(33, 250, 9, 1),
(34, 250, 10, 1),
(35, 100, 11, 1),
(36, 100, 12, 1),
(49, 100, 3, 1),
(50, 100, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE IF NOT EXISTS `theater` (
`th_id` int(11) NOT NULL,
  `th_name` varchar(100) NOT NULL,
  `th_areaid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`th_id`, `th_name`, `th_areaid`) VALUES
(3, 'PVR Mulund', 6),
(4, 'RMALL Thane', 8),
(5, 'RMALL Bhandup', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(100) DEFAULT NULL,
  `mobile` bigint(11) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
`id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `mobile`, `emailid`, `password`, `id`, `status`) VALUES
('xyz', 8965896523, 'pratik1@gmail.com', '70c881d4a26984ddce795f6f71817c9cf4480e79', 11, 1),
('nilay', 9619404202, 'nilay@gmail.com', '70c881d4a26984ddce795f6f71817c9cf4480e79', 12, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `movie_screen`
--
ALTER TABLE `movie_screen`
 ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
 ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
 ADD PRIMARY KEY (`se_id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
 ADD PRIMARY KEY (`th_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movie_screen`
--
ALTER TABLE `movie_screen`
MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `screen`
--
ALTER TABLE `screen`
MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
MODIFY `se_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
MODIFY `th_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
