-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2016 at 08:01 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam_cell`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`) VALUES
(1, 'civil'),
(2, 'eee'),
(3, 'mechanical'),
(4, 'ece'),
(5, 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `external11`
--

CREATE TABLE IF NOT EXISTS `external11` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `main_tot` int(11) NOT NULL,
  `forabsent` int(11) NOT NULL,
  `p_f` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external12`
--

CREATE TABLE IF NOT EXISTS `external12` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `main_tot` int(11) NOT NULL,
  `forabsent` int(11) NOT NULL,
  `p_f` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external21`
--

CREATE TABLE IF NOT EXISTS `external21` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `main_tot` int(11) NOT NULL,
  `forabsent` int(11) NOT NULL,
  `p_f` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external22`
--

CREATE TABLE IF NOT EXISTS `external22` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `main_tot` int(11) NOT NULL,
  `forabsent` int(11) NOT NULL,
  `p_f` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external31`
--

CREATE TABLE IF NOT EXISTS `external31` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `main_tot` int(11) NOT NULL,
  `forabsent` int(11) NOT NULL,
  `p_f` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external32`
--

CREATE TABLE IF NOT EXISTS `external32` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `main_tot` int(11) NOT NULL,
  `forabsent` int(11) NOT NULL,
  `p_f` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external41`
--

CREATE TABLE IF NOT EXISTS `external41` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `main_tot` int(11) NOT NULL,
  `forabsent` int(11) NOT NULL,
  `p_f` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `external41`
--

INSERT INTO `external41` (`ext_id`, `sid`, `marks`, `sub_id`, `main_tot`, `forabsent`, `p_f`) VALUES
(1, 1, 29, 1, 54, 1, 'P'),
(2, 1, 33, 2, 58, 1, 'P'),
(3, 1, 17, 3, 44, 1, 'F'),
(4, 1, 28, 4, 51, 1, 'P'),
(5, 1, 26, 5, 53, 1, 'P'),
(6, 1, 49, 6, 73, 1, 'P'),
(7, 1, 48, 7, 73, 1, 'P'),
(8, 2, 44, 1, 73, 1, 'P'),
(9, 2, 37, 2, 66, 1, 'P'),
(10, 2, 42, 3, 70, 1, 'P'),
(11, 2, 35, 4, 64, 1, 'P'),
(12, 2, 38, 5, 67, 1, 'P'),
(13, 2, 50, 6, 75, 1, 'P'),
(14, 2, 50, 7, 75, 1, 'P'),
(15, 1, 29, 1, 54, 1, 'P'),
(16, 1, 33, 2, 58, 1, 'P'),
(17, 1, 17, 3, 44, 1, 'F'),
(18, 1, 28, 4, 51, 1, 'P'),
(19, 1, 26, 5, 53, 1, 'P'),
(20, 1, 49, 6, 73, 1, 'P'),
(21, 1, 48, 7, 73, 1, 'P'),
(22, 2, 44, 1, 73, 1, 'P'),
(23, 2, 37, 2, 66, 1, 'P'),
(24, 2, 42, 3, 70, 1, 'P'),
(25, 2, 35, 4, 64, 1, 'P'),
(26, 2, 38, 5, 67, 1, 'P'),
(27, 2, 50, 6, 75, 1, 'P'),
(28, 2, 50, 7, 75, 1, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `external42`
--

CREATE TABLE IF NOT EXISTS `external42` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `main_tot` int(11) NOT NULL,
  `forabsent` int(11) NOT NULL,
  `p_f` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_notifications`
--

CREATE TABLE IF NOT EXISTS `faculty_notifications` (
  `sno` int(11) NOT NULL,
  `postby` varchar(100) NOT NULL,
  `dept` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_notifications`
--

INSERT INTO `faculty_notifications` (`sno`, `postby`, `dept`, `year`, `subject`, `message`, `date`) VALUES
(1, '', 5, 4, 'Software testing', 'Mid 1 Posted', '12-03-2016');

-- --------------------------------------------------------

--
-- Table structure for table `internal11`
--

CREATE TABLE IF NOT EXISTS `internal11` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `mid1_obj` int(11) DEFAULT '0',
  `mid1_des` int(11) DEFAULT '0',
  `mid1_tot` int(11) DEFAULT '0',
  `mid1_status` int(11) NOT NULL DEFAULT '1',
  `doe1` date NOT NULL,
  `mid2_obj` int(11) DEFAULT '0',
  `mid2_des` int(11) DEFAULT '0',
  `mid2_tot` int(11) DEFAULT '0',
  `doe2` varchar(20) NOT NULL,
  `mid2_status` int(11) NOT NULL DEFAULT '1',
  `final_tot` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal12`
--

CREATE TABLE IF NOT EXISTS `internal12` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `mid1_obj` int(11) DEFAULT '0',
  `mid1_des` int(11) DEFAULT '0',
  `mid1_tot` int(11) DEFAULT '0',
  `mid1_status` int(11) NOT NULL DEFAULT '1',
  `doe1` date NOT NULL,
  `mid2_obj` int(11) DEFAULT '0',
  `mid2_des` int(11) DEFAULT '0',
  `mid2_tot` int(11) DEFAULT '0',
  `doe2` varchar(20) NOT NULL,
  `mid2_status` int(11) NOT NULL DEFAULT '1',
  `final_tot` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal21`
--

CREATE TABLE IF NOT EXISTS `internal21` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `mid1_obj` int(11) DEFAULT '0',
  `mid1_des` int(11) DEFAULT '0',
  `mid1_tot` int(11) DEFAULT '0',
  `mid1_status` int(11) NOT NULL DEFAULT '1',
  `doe1` date NOT NULL,
  `mid2_obj` int(11) DEFAULT '0',
  `mid2_des` int(11) DEFAULT '0',
  `mid2_tot` int(11) DEFAULT '0',
  `doe2` varchar(20) NOT NULL,
  `mid2_status` int(11) NOT NULL DEFAULT '1',
  `final_tot` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal22`
--

CREATE TABLE IF NOT EXISTS `internal22` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `mid1_obj` int(11) DEFAULT '0',
  `mid1_des` int(11) DEFAULT '0',
  `mid1_tot` int(11) DEFAULT '0',
  `mid1_status` int(11) NOT NULL DEFAULT '1',
  `doe1` date NOT NULL,
  `mid2_obj` int(11) DEFAULT '0',
  `mid2_des` int(11) DEFAULT '0',
  `mid2_tot` int(11) DEFAULT '0',
  `doe2` varchar(20) NOT NULL,
  `mid2_status` int(11) NOT NULL DEFAULT '1',
  `final_tot` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal31`
--

CREATE TABLE IF NOT EXISTS `internal31` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `mid1_obj` int(11) DEFAULT '0',
  `mid1_des` int(11) DEFAULT '0',
  `mid1_tot` int(11) DEFAULT '0',
  `mid1_status` int(11) NOT NULL DEFAULT '1',
  `doe1` date NOT NULL,
  `mid2_obj` int(11) DEFAULT '0',
  `mid2_des` int(11) DEFAULT '0',
  `mid2_tot` int(11) DEFAULT '0',
  `doe2` varchar(20) NOT NULL,
  `mid2_status` int(11) NOT NULL DEFAULT '1',
  `final_tot` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal32`
--

CREATE TABLE IF NOT EXISTS `internal32` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `mid1_obj` int(11) DEFAULT '0',
  `mid1_des` int(11) DEFAULT '0',
  `mid1_tot` int(11) DEFAULT '0',
  `mid1_status` int(11) NOT NULL DEFAULT '1',
  `doe1` date NOT NULL,
  `mid2_obj` int(11) DEFAULT '0',
  `mid2_des` int(11) DEFAULT '0',
  `mid2_tot` int(11) DEFAULT '0',
  `doe2` varchar(20) NOT NULL,
  `mid2_status` int(11) NOT NULL DEFAULT '1',
  `final_tot` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal41`
--

CREATE TABLE IF NOT EXISTS `internal41` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `mid1_obj` int(11) DEFAULT '0',
  `mid1_des` int(11) DEFAULT '0',
  `mid1_tot` int(11) DEFAULT '0',
  `mid1_status` int(11) NOT NULL DEFAULT '1',
  `doe1` date NOT NULL,
  `mid2_obj` int(11) DEFAULT '0',
  `mid2_des` int(11) DEFAULT '0',
  `mid2_tot` int(11) DEFAULT '0',
  `doe2` varchar(20) NOT NULL,
  `mid2_status` int(11) NOT NULL DEFAULT '1',
  `final_tot` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal41`
--

INSERT INTO `internal41` (`mid`, `sid`, `subid`, `mid1_obj`, `mid1_des`, `mid1_tot`, `mid1_status`, `doe1`, `mid2_obj`, `mid2_des`, `mid2_tot`, `doe2`, `mid2_status`, `final_tot`) VALUES
(1, 1, 1, 0, 25, 25, 1, '2016-03-01', 0, 0, 0, '', 1, 25),
(2, 2, 1, 0, 29, 29, 1, '2016-03-01', 0, 0, 0, '', 1, 29),
(3, 1, 2, 0, 25, 25, 1, '2016-03-02', 0, 0, 0, '', 1, 25),
(4, 2, 2, 0, 29, 29, 1, '2016-03-02', 0, 0, 0, '', 1, 29),
(5, 1, 3, 0, 27, 27, 1, '2016-03-03', 0, 0, 0, '', 1, 27),
(6, 2, 3, 0, 28, 28, 1, '2016-03-03', 0, 0, 0, '', 1, 28),
(7, 1, 4, 0, 23, 23, 1, '2016-03-04', 0, 0, 0, '', 1, 23),
(8, 2, 4, 0, 29, 29, 1, '2016-03-04', 0, 0, 0, '', 1, 29),
(9, 1, 5, 0, 27, 27, 1, '2016-03-06', 0, 0, 0, '', 1, 27),
(10, 2, 5, 0, 29, 29, 1, '2016-03-06', 0, 0, 0, '', 1, 29),
(11, 1, 6, 0, 24, 24, 1, '2016-03-07', 0, 0, 0, '', 1, 24),
(12, 2, 6, 0, 25, 25, 1, '2016-03-07', 0, 0, 0, '', 1, 25),
(13, 1, 7, 0, 25, 25, 1, '2016-03-09', 0, 0, 0, '', 1, 25),
(14, 2, 7, 0, 25, 25, 1, '2016-03-09', 0, 0, 0, '', 1, 25),
(15, 1, 1, 10, 20, 30, 1, '2016-03-17', 0, 0, 0, '', 1, 30),
(16, 2, 1, 10, 20, 30, 1, '2016-03-17', 0, 0, 0, '', 1, 30),
(17, 1, 2, 9, 19, 28, 1, '2016-03-04', 0, 0, 0, '', 1, 28),
(18, 2, 2, 9, 19, 28, 1, '2016-03-04', 0, 0, 0, '', 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `internal42`
--

CREATE TABLE IF NOT EXISTS `internal42` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `mid1_obj` int(11) DEFAULT '0',
  `mid1_des` int(11) DEFAULT '0',
  `mid1_tot` int(11) DEFAULT '0',
  `mid1_status` int(11) NOT NULL DEFAULT '1',
  `doe1` date NOT NULL,
  `mid2_obj` int(11) DEFAULT '0',
  `mid2_des` int(11) DEFAULT '0',
  `mid2_tot` int(11) DEFAULT '0',
  `doe2` varchar(20) NOT NULL,
  `mid2_status` int(11) NOT NULL DEFAULT '1',
  `final_tot` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mailings`
--

CREATE TABLE IF NOT EXISTS `mailings` (
  `pid` int(11) NOT NULL,
  `postedby` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `expire_date` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mailings`
--

INSERT INTO `mailings` (`pid`, `postedby`, `title`, `message`, `date`, `expire_date`) VALUES
(1, '', 'Hello', 'Hi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE IF NOT EXISTS `master` (
  `sno` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `11_tot` int(11) NOT NULL,
  `12_tot` int(11) NOT NULL,
  `21_tot` int(11) NOT NULL,
  `22_tot` int(11) NOT NULL,
  `31_tot` int(11) NOT NULL,
  `32_tot` int(11) NOT NULL,
  `41_tot` int(11) NOT NULL,
  `42_tot` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `percentage` double NOT NULL,
  `11_credits` int(11) NOT NULL,
  `12_credits` int(11) NOT NULL,
  `21_credits` int(11) NOT NULL,
  `22_credits` int(11) NOT NULL,
  `31_credits` int(11) NOT NULL,
  `32_credits` int(11) NOT NULL,
  `41_credits` int(11) NOT NULL,
  `42_credits` int(11) NOT NULL,
  `total_credits` int(11) NOT NULL,
  `11_bl` varchar(30) NOT NULL,
  `12_bl` varchar(30) NOT NULL,
  `21_bl` varchar(30) NOT NULL,
  `22_bl` varchar(30) NOT NULL,
  `31_bl` varchar(30) NOT NULL,
  `32_bl` varchar(30) NOT NULL,
  `41_bl` varchar(30) NOT NULL,
  `42_bl` varchar(30) NOT NULL,
  `tot_bl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `stu_id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `reg` varchar(10) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `year_of_join` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stu_id`, `sname`, `rollno`, `reg`, `dept_id`, `year`, `sem`, `year_of_join`, `status`, `mobile`) VALUES
(1, 'Bharath Kumar', '122u1a0518', 'r09', 5, 4, 1, 2012, 1, 0),
(2, 'DwarakaNath', '122u1a0515', 'r09', 5, 4, 1, 2012, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subid` int(11) NOT NULL,
  `subname` varchar(100) NOT NULL,
  `subcode` varchar(100) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `reg` varchar(10) NOT NULL,
  `credits` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subid`, `subname`, `subcode`, `dept_id`, `sem`, `year`, `reg`, `credits`) VALUES
(1, 'Web technologies', '9A05701', 5, 1, 4, 'r09', 4),
(2, 'Software testing', '9A05702', 5, 1, 4, 'r09', 4),
(3, 'Managerial Economics and Financial Analysis', '9AHS401', 5, 1, 4, 'r09', 4),
(4, 'Grid and cluster computing\n\n', '9A05703\n', 5, 1, 4, 'r09', 4),
(5, 'Information security', '9A05709', 5, 1, 4, 'r09', 4),
(6, 'Web technologies and data mining lab', '9A05710', 5, 1, 4, 'r09', 4),
(7, 'Software testing and CASE tools lab', '9A05711', 5, 1, 4, 'r09', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `sq` varchar(100) NOT NULL,
  `sa` varchar(100) NOT NULL,
  `dept` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `role`, `sq`, `sa`, `dept`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'What is your college name?', 'GIST', ''),
(2, 'cse', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 'What is your College name?', 'GIST', 'cse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `external11`
--
ALTER TABLE `external11`
  ADD PRIMARY KEY (`ext_id`);

--
-- Indexes for table `external12`
--
ALTER TABLE `external12`
  ADD PRIMARY KEY (`ext_id`);

--
-- Indexes for table `external21`
--
ALTER TABLE `external21`
  ADD PRIMARY KEY (`ext_id`);

--
-- Indexes for table `external22`
--
ALTER TABLE `external22`
  ADD PRIMARY KEY (`ext_id`);

--
-- Indexes for table `external31`
--
ALTER TABLE `external31`
  ADD PRIMARY KEY (`ext_id`), ADD KEY `sid` (`sid`), ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `external32`
--
ALTER TABLE `external32`
  ADD PRIMARY KEY (`ext_id`);

--
-- Indexes for table `external41`
--
ALTER TABLE `external41`
  ADD PRIMARY KEY (`ext_id`);

--
-- Indexes for table `external42`
--
ALTER TABLE `external42`
  ADD PRIMARY KEY (`ext_id`);

--
-- Indexes for table `faculty_notifications`
--
ALTER TABLE `faculty_notifications`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `internal11`
--
ALTER TABLE `internal11`
  ADD PRIMARY KEY (`mid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal12`
--
ALTER TABLE `internal12`
  ADD PRIMARY KEY (`mid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal21`
--
ALTER TABLE `internal21`
  ADD PRIMARY KEY (`mid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal22`
--
ALTER TABLE `internal22`
  ADD PRIMARY KEY (`mid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal31`
--
ALTER TABLE `internal31`
  ADD PRIMARY KEY (`mid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal32`
--
ALTER TABLE `internal32`
  ADD PRIMARY KEY (`mid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal41`
--
ALTER TABLE `internal41`
  ADD PRIMARY KEY (`mid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal42`
--
ALTER TABLE `internal42`
  ADD PRIMARY KEY (`mid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `mailings`
--
ALTER TABLE `mailings`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `external11`
--
ALTER TABLE `external11`
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `external12`
--
ALTER TABLE `external12`
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `external21`
--
ALTER TABLE `external21`
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `external22`
--
ALTER TABLE `external22`
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `external31`
--
ALTER TABLE `external31`
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `external32`
--
ALTER TABLE `external32`
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `external41`
--
ALTER TABLE `external41`
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `external42`
--
ALTER TABLE `external42`
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty_notifications`
--
ALTER TABLE `faculty_notifications`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `internal11`
--
ALTER TABLE `internal11`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internal12`
--
ALTER TABLE `internal12`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internal21`
--
ALTER TABLE `internal21`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internal22`
--
ALTER TABLE `internal22`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internal31`
--
ALTER TABLE `internal31`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internal32`
--
ALTER TABLE `internal32`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internal41`
--
ALTER TABLE `internal41`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `internal42`
--
ALTER TABLE `internal42`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mailings`
--
ALTER TABLE `mailings`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
