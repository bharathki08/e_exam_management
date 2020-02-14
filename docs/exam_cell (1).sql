-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2016 at 07:45 AM
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
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `external11`
--

INSERT INTO `external11` (`ext_id`, `sid`, `marks`, `sub_id`) VALUES
(1, 0, 20, 0),
(2, 0, 78, 0),
(3, 0, 89, 0),
(4, 0, 89, 0),
(5, 0, 98, 0),
(6, 0, 89, 0),
(7, 1, 99, 0),
(8, 1, 34, 0),
(9, 1, 18, 0),
(10, 1, 66, 0),
(11, 1, 66, 0),
(12, 1, 77, 0),
(13, 2, 88, 0),
(14, 2, 99, 0),
(15, 2, 0, 0),
(16, 2, 6, 0),
(17, 2, 5, 0),
(18, 2, 7, 0),
(19, 3, 8, 0),
(20, 3, 56, 0),
(21, 3, 78, 0),
(22, 3, 5, 0),
(23, 3, 4, 0),
(24, 3, 5, 0),
(25, 4, 68, 0),
(26, 4, 90, 0),
(27, 4, 5, 0),
(28, 4, 32, 0),
(29, 4, 56, 0),
(30, 4, 70, 0),
(31, 5, 78, 0),
(32, 5, 65, 0),
(33, 5, 34, 0),
(34, 5, 67, 0),
(35, 5, 89, 0),
(36, 5, 6, 0),
(37, 6, 4, 0),
(38, 6, 4, 0),
(39, 6, 5, 0),
(40, 6, 6, 0),
(41, 6, 6, 0),
(42, 6, 6, 0),
(43, 7, 6, 0),
(44, 7, 67, 0),
(45, 7, 7, 0),
(46, 7, 7, 0),
(47, 7, 8, 0),
(48, 7, 8, 0),
(49, 8, 98, 0),
(50, 8, 7, 0),
(51, 8, 65, 0),
(52, 8, 4, 0),
(53, 8, 5, 0),
(54, 8, 6, 0),
(55, 9, 6, 0),
(56, 9, 7, 0),
(57, 9, 7, 0),
(58, 9, 8, 0),
(59, 9, 8, 0),
(60, 9, 88, 0),
(61, 10, 8, 0),
(62, 10, 8, 0),
(63, 10, 8, 0),
(64, 10, 8, 0),
(65, 10, 8, 0),
(66, 10, 8, 0),
(67, 11, 8, 0),
(68, 11, 8, 0),
(69, 11, 8, 0),
(70, 11, 8, 0),
(71, 11, 8, 0),
(72, 11, 88, 0),
(73, 12, 8, 0),
(74, 12, 8, 0),
(75, 12, 8, 0),
(76, 12, 8, 0),
(77, 12, 8, 0),
(78, 12, 88, 0),
(79, 13, 8, 0),
(80, 13, 8, 0),
(81, 13, 8, 0),
(82, 13, 8, 0),
(83, 13, 655, 0),
(84, 13, 5, 0),
(85, 14, 656, 0),
(86, 14, 56, 0),
(87, 14, 56, 0),
(88, 14, 56, 0),
(89, 14, 56, 0),
(90, 14, 56, 0),
(91, 15, 5, 0),
(92, 15, 65, 0),
(93, 15, 65, 0),
(94, 15, 9, 0),
(95, 15, 767, 0),
(96, 15, 6, 0),
(97, 16, 56, 0),
(98, 16, 78, 0),
(99, 16, 65, 0),
(100, 16, 44, 0),
(101, 16, 66, 0),
(102, 16, 77, 0),
(103, 17, 88, 0),
(104, 17, 88, 0),
(105, 17, 9, 0),
(106, 17, 9, 0),
(107, 17, 988, 0),
(108, 17, 77, 0),
(109, 18, 77, 0),
(110, 18, 77, 0),
(111, 18, 77, 0),
(112, 18, 776, 0),
(113, 18, 455, 0),
(114, 18, 665, 0),
(115, 19, 66, 0),
(116, 19, 66, 0),
(117, 19, 66, 0),
(118, 19, 66, 0),
(119, 19, 66, 0),
(120, 19, 66, 0);

-- --------------------------------------------------------

--
-- Table structure for table `external12`
--

CREATE TABLE IF NOT EXISTS `external12` (
  `ext_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external21`
--

CREATE TABLE IF NOT EXISTS `external21` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external22`
--

CREATE TABLE IF NOT EXISTS `external22` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external31`
--

CREATE TABLE IF NOT EXISTS `external31` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external32`
--

CREATE TABLE IF NOT EXISTS `external32` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `external41`
--

CREATE TABLE IF NOT EXISTS `external41` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `external41`
--

INSERT INTO `external41` (`ext_id`, `sid`, `marks`, `sub_id`) VALUES
(1, 1, 90, 0),
(2, 1, 93, 0),
(3, 1, 78, 0),
(4, 1, 97, 0),
(5, 1, 99, 0),
(6, 1, 76, 0),
(7, 2, 87, 0),
(8, 2, 65, 0),
(9, 2, 40, 0),
(10, 2, 87, 0),
(11, 2, 90, 0),
(12, 2, 67, 0);

-- --------------------------------------------------------

--
-- Table structure for table `external42`
--

CREATE TABLE IF NOT EXISTS `external42` (
  `ext_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal11`
--

CREATE TABLE IF NOT EXISTS `internal11` (
  `marks_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal11`
--

INSERT INTO `internal11` (`marks_id`, `sid`, `marks`, `subid`) VALUES
(1, 1, 24, 6),
(2, 1, 18, 5);

-- --------------------------------------------------------

--
-- Table structure for table `internal12`
--

CREATE TABLE IF NOT EXISTS `internal12` (
  `marks_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal21`
--

CREATE TABLE IF NOT EXISTS `internal21` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal22`
--

CREATE TABLE IF NOT EXISTS `internal22` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal31`
--

CREATE TABLE IF NOT EXISTS `internal31` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal32`
--

CREATE TABLE IF NOT EXISTS `internal32` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal41`
--

CREATE TABLE IF NOT EXISTS `internal41` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internal42`
--

CREATE TABLE IF NOT EXISTS `internal42` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `name`) VALUES
('122U1A0515', 'p 1'),
('122U1A0516', 'p 2'),
('122U1A0517', 'p 3'),
('122U1A0518', 'p 4'),
('122U1A0519', 'p 5'),
('122U1A0520', 'p 6'),
('122U1A0521', 'p 7'),
('122U1A0522', 'p 8'),
('122U1A0523', 'p 9'),
('122U1A0524', 'p 10'),
('122U1A0525', 'p 11'),
('122U1A0526', 'p 12'),
('122U1A0527', 'p 13'),
('122U1A0528', 'p 14'),
('122U1A0529', 'p 15'),
('122U1A0530', 'p 16'),
('122U1A0531', 'p 17'),
('122U1A0532', 'p 18'),
('122U1A0533', 'p 19'),
('122U1A0534', 'p 20'),
('122U1A0535', 'p 21'),
('122U1A0536', 'p 22'),
('122U1A0537', 'p 23');

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
  `year_of_join` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stu_id`, `sname`, `rollno`, `reg`, `dept_id`, `year_of_join`, `status`) VALUES
(1, 'D KALYAN', '112U1A0513', 'r09', 5, 0, 1),
(2, 'MURIGAM MANASA', '112U1A0543', 'r09', 5, 0, 1),
(3, 'P MAHESH', '112U1A0549', 'r09', 5, 0, 1),
(4, 'ANASAGARAM BHAVANA', '122U1A0502', 'r09', 5, 0, 1),
(5, 'ANUMALASETTY BHAVANA', '122U1A0503', 'r09', 5, 0, 1),
(6, 'BANDARU SUNDEEP', '122U1A0504', 'r09', 5, 0, 1),
(7, 'BESA VENKATA SUBBA RAO', '122U1A0505', 'r09', 5, 0, 1),
(8, 'BOGGAVARAPU VENKATA NAGENDRA RAKESH', '122U1A0506', 'r09', 5, 0, 1),
(9, 'BOLLINENI SAICHANDANA', '122U1A0507', 'r09', 5, 0, 1),
(10, 'CHALLAGUNDLA HEMANTHA LAKSHMI', '122U1A0508', 'r09', 5, 0, 1),
(11, 'CHERLO HANUMA TEJA', '122U1A0509', 'r09', 5, 0, 1),
(12, 'CHILUKOTI PUSHPA PRIYA', '122U1A0510', 'r09', 5, 0, 1),
(13, 'DAMERLA BALAJI BHARGAV RAM', '122U1A0511', 'r09', 5, 0, 1),
(14, 'DAMERLA BHAVANI', '122U1A0512', 'r09', 5, 0, 1),
(15, 'GUDLURU DWARAKANATH', '122U1A0515', 'r09', 5, 0, 1),
(16, 'GUNDLAPALLI SUMANTH TEJA', '122U1A0516', 'r09', 5, 0, 1),
(17, 'GUNTI JYOTHSNA SREE', '122U1A0517', 'r09', 5, 0, 1),
(18, 'INGUVA BHARATH KUMAR', '122U1A0518', 'r09', 5, 0, 1),
(19, 'ISKA VYSHNAVI', '122U1A0519', 'r09', 5, 0, 1),
(20, 'JILLA LOHITHA', '122U1A0520', 'r09', 5, 0, 1),
(21, 'KESARI VANI', '122U1A0522', 'r09', 5, 0, 1),
(22, 'KOLAPARTHI HARISH', '122U1A0523', 'r09', 5, 0, 1),
(23, 'KONDRAGUNTA HEMANTHKUMAR', '122U1A0524', 'r09', 5, 0, 1),
(24, 'KOTA PAVANNITHIN', '122U1A0525', 'r09', 5, 0, 1),
(25, 'LEKKALA CHANDRA SEKHAR', '122U1A0527', 'r09', 5, 0, 1),
(26, 'LEKKALA HARITHA', '122U1A0528', 'r09', 5, 0, 1),
(27, 'M P AVINASH KUMAR REDDY', '122U1A0529', 'r09', 5, 0, 1),
(28, 'MANOHAR K', '122U1A0531', 'r09', 5, 0, 1),
(29, 'MIRIYALA LIKITHA', '122U1A0532', 'r09', 5, 0, 1),
(30, 'MIRIYALA YUVAKUMAR', '122U1A0533', 'r09', 5, 0, 1),
(31, 'N NAGA LAKSHMI PRASANNA', '122U1A0535', 'r09', 5, 0, 1),
(32, 'PADAKALLA APARNA', '122U1A0536', 'r09', 5, 0, 1),
(33, 'PALLAMREDDY NAVEEN REDDY', '122U1A0537', 'r09', 5, 0, 1),
(34, 'PAPAREDDY LIKHITHA', '122U1A0538', 'r09', 5, 0, 1),
(35, 'PAPAREDDY LINITHA', '122U1A0539', 'r09', 5, 0, 1),
(36, 'PATAN REENA BANU', '122U1A0540', 'r09', 5, 0, 1),
(37, 'PITTI JAYASRI', '122U1A0542', 'r09', 5, 0, 1),
(38, 'POLA MAMATHA', '122U1A0543', 'r09', 5, 0, 1),
(39, 'PUNETI SUSHMA', '122U1A0544', 'r09', 5, 0, 1),
(40, 'PUSHPAGIRI SOWMYA', '122U1A0545', 'r09', 5, 0, 1),
(41, 'QUDSIYA KOUSAR', '122U1A0546', 'r09', 5, 0, 1),
(42, 'RAMIREDDY HARIKA', '122U1A0549', 'r09', 5, 0, 1),
(43, 'SAJJA VENKATA SHIREESHA', '122U1A0550', 'r09', 5, 0, 1),
(44, 'SEGU MAHESWARI', '122U1A0551', 'r09', 5, 0, 1),
(45, 'SHAIK BANU SHABNA', '122U1A0552', 'r09', 5, 0, 1),
(46, 'SHAIK MAHAMMAD YUNUS', '122U1A0553', 'r09', 5, 0, 1),
(47, 'SHAIK SALEEM BASHA', '122U1A0555', 'r09', 5, 0, 1),
(48, 'SINGAM SUSMITHA', '122U1A0556', 'r09', 5, 0, 1),
(49, 'SINGAMSHETTY TEJASWI', '122U1A0557', 'r09', 5, 0, 1),
(50, 'SURA SIDDARTHA REDDY', '122U1A0558', 'r09', 5, 0, 1),
(51, 'THALACHEERU ANUSHA', '122U1A0559', 'r09', 5, 0, 1),
(52, 'THALARI ARCHANA', '122U1A0560', 'r09', 5, 0, 1),
(53, 'THOTA KARTHIK', '122U1A0561', 'r09', 5, 0, 1),
(54, 'THUMMALAPUDI BHARGAVI', '122U1A0562', 'r09', 5, 0, 1),
(55, 'VEDURLA SUMANTH', '122U1A0563', 'r09', 5, 0, 1),
(56, 'VINAKOTA ASHISH', '122U1A0564', 'r09', 5, 0, 1),
(57, 'YANTRAPATI SAI MONICA', '122U1A0565', 'r09', 5, 0, 1),
(58, 'YEDDALA HARSHITHA', '122U1A0566', 'r09', 5, 0, 1);

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
  `reg` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subid`, `subname`, `subcode`, `dept_id`, `sem`, `year`, `reg`) VALUES
(1, 'PCDS', '12', 0, 0, 0, ''),
(2, 'PHYSICS', '13', 0, 0, 0, ''),
(3, 'CHEMISTRY', '14', 0, 0, 0, ''),
(4, 'M1', '15', 0, 0, 0, ''),
(5, 'CO', '16', 0, 0, 0, ''),
(6, 'DAA', '17', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '');

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
  ADD PRIMARY KEY (`ext_id`), ADD KEY `sid` (`sid`), ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `external12`
--
ALTER TABLE `external12`
  ADD PRIMARY KEY (`ext_id`), ADD KEY `stu_id` (`stu_id`), ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `external21`
--
ALTER TABLE `external21`
  ADD PRIMARY KEY (`ext_id`), ADD KEY `sid` (`sid`), ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `external22`
--
ALTER TABLE `external22`
  ADD PRIMARY KEY (`ext_id`), ADD KEY `sid` (`sid`), ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `external31`
--
ALTER TABLE `external31`
  ADD PRIMARY KEY (`ext_id`), ADD KEY `sid` (`sid`), ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `external32`
--
ALTER TABLE `external32`
  ADD PRIMARY KEY (`ext_id`), ADD KEY `sid` (`sid`), ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `external41`
--
ALTER TABLE `external41`
  ADD PRIMARY KEY (`ext_id`), ADD KEY `sid` (`sid`), ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `external42`
--
ALTER TABLE `external42`
  ADD PRIMARY KEY (`ext_id`), ADD KEY `sid` (`sid`), ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internal11`
--
ALTER TABLE `internal11`
  ADD PRIMARY KEY (`marks_id`), ADD KEY `sid` (`sid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal12`
--
ALTER TABLE `internal12`
  ADD PRIMARY KEY (`marks_id`), ADD KEY `sid` (`sid`), ADD KEY `subid` (`subid`), ADD KEY `sid_2` (`sid`), ADD KEY `subid_2` (`subid`);

--
-- Indexes for table `internal21`
--
ALTER TABLE `internal21`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `internal22`
--
ALTER TABLE `internal22`
  ADD PRIMARY KEY (`mid`), ADD KEY `sid` (`sid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal31`
--
ALTER TABLE `internal31`
  ADD PRIMARY KEY (`mid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal32`
--
ALTER TABLE `internal32`
  ADD PRIMARY KEY (`mid`), ADD KEY `sid` (`sid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal41`
--
ALTER TABLE `internal41`
  ADD PRIMARY KEY (`mid`), ADD KEY `sid` (`sid`), ADD KEY `subid` (`subid`);

--
-- Indexes for table `internal42`
--
ALTER TABLE `internal42`
  ADD PRIMARY KEY (`mid`), ADD KEY `sid` (`sid`), ADD KEY `subid` (`subid`);

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
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121;
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
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `external42`
--
ALTER TABLE `external42`
  MODIFY `ext_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internal11`
--
ALTER TABLE `internal11`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `internal12`
--
ALTER TABLE `internal12`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internal42`
--
ALTER TABLE `internal42`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
