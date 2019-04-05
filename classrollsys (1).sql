-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2016 at 05:56 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `classrollsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
`attendanceid` int(11) NOT NULL,
  `teacher` varchar(256) NOT NULL,
  `attendance_class_act` varchar(256) NOT NULL,
  `student_number` varchar(256) NOT NULL,
  `attendance_student` varchar(256) NOT NULL,
  `attendancedatetime` datetime NOT NULL,
  `attendancelocation` varchar(256) NOT NULL,
  `attendancestatues` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendanceid`, `teacher`, `attendance_class_act`, `student_number`, `attendance_student`, `attendancedatetime`, `attendancelocation`, `attendancestatues`) VALUES
(1, '', 'Monday', '9212591799', 'Samuel Griffin', '2016-03-07 13:40:59', 'South Bank', 'present'),
(2, '', 'Monday', '1014572271', 'Adrienna Luna\r\n', '2016-03-07 13:55:15', 'South Bank', 'absent'),
(3, '', 'Monday', '4715222785', 'Ernestine Estrada\r\n', '2016-03-07 13:56:10', 'South Bank', 'absent'),
(4, '', 'Monday', '537251488', '\r\nSuzanne	Garner', '2016-03-07 13:58:45', 'South Bank', 'present'),
(5, '', 'Monday', '4427941263', 'Peggy Sherman\r\n', '2016-03-07 14:00:12', 'South Bank', 'absent'),
(6, '', 'Monday', '137284565', 'Elizabeth Leonard\r\n', '2016-03-07 14:01:34', 'South Bank', 'absent'),
(7, '', 'Monday', '7615863594', 'Roy	Tran\r\n', '2016-03-07 14:02:42', 'South Bank', 'absent'),
(8, '', 'Monday', '36982356', 'Lois Clark\r\n', '2016-03-07 14:03:40', 'South Bank', 'absent'),
(9, '', 'Monday', '821581068', 'Kim	Bowen\r\n', '2016-03-07 14:04:50', 'South Bank', 'absent'),
(10, '', 'Monday', '9177642161', 'Clifford Poole\r\n', '2016-03-07 14:06:09', 'South Bank', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE IF NOT EXISTS `classroom` (
`classid` int(11) NOT NULL,
  `classlocation` varchar(256) NOT NULL,
  `classname` varchar(256) NOT NULL,
  `class_start_time` time NOT NULL,
  `class_end_time` time NOT NULL,
  `classteacher` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`classid`, `classlocation`, `classname`, `class_start_time`, `class_end_time`, `classteacher`) VALUES
(1, 'South Bank', 'BSB30415', '14:18:02', '04:30:00', 'Casey Webb'),
(2, 'MT Gravatt', 'ICT40315', '14:20:36', '05:30:00', 'Gwendolyn	Warren'),
(12, 'MT Gravatt', '4693659fvjhjh', '14:44:58', '05:30:00', 'sbvfgbjfv'),
(13, 'MT Gravatt', '4693659fvjhjh', '14:46:25', '05:30:00', 'sbvfgbjfv');

-- --------------------------------------------------------

--
-- Table structure for table `class_activity`
--

CREATE TABLE IF NOT EXISTS `class_activity` (
  `activityid` varchar(256) NOT NULL,
  `activityclassroom` varchar(256) NOT NULL,
  `activitydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_activity`
--

INSERT INTO `class_activity` (`activityid`, `activityclassroom`, `activitydate`) VALUES
('Monday', 'Room 1324', '2016-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`userid` int(11) NOT NULL,
  `usertype` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `usertypeID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `usertype`, `username`, `password`, `firstname`, `lastname`, `usertypeID`) VALUES
(1, 1, 'simple', 'test', '', '0', 1),
(2, 2, 'test', 'test', 'Casey', 'Webb', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `usertypeID` int(11) NOT NULL,
  `usertype` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`usertypeID`, `usertype`) VALUES
(1, 'admin'),
(2, 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD PRIMARY KEY (`attendanceid`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
 ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `class_activity`
--
ALTER TABLE `class_activity`
 ADD KEY `activityclassroom` (`activityclassroom`), ADD KEY `activityclassroom_2` (`activityclassroom`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
MODIFY `attendanceid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
