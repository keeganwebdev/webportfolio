-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 08:59 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendanceid`, `teacher`, `attendance_class_act`, `student_number`, `attendance_student`, `attendancedatetime`, `attendancelocation`, `attendancestatues`) VALUES
(1, 'Casey Webb', 'Monday', '9212591799', 'Samuel Griffin', '2016-03-07 13:40:59', 'South Bank', 'absent'),
(2, 'Casey Webb', 'Monday', '1014572271', 'Adrienna Luna\r\n', '2016-03-07 13:55:15', 'South Bank', 'absent'),
(4, 'Casey Webb', 'Monday', '537251488', 'Suzanne Garner', '2016-03-07 13:58:45', 'South Bank', 'absent'),
(5, 'Casey Webb', 'Monday', '4427941263', 'Peggy Sherman\r\n', '2016-03-07 14:00:12', 'South Bank', 'absent'),
(6, 'Casey Webb', 'Monday', '137284565', 'Elizabeth Leonard\r\n', '2016-03-07 14:01:34', 'South Bank', 'absent'),
(7, 'Casey Webb', 'Monday', '7615863594', 'Dank Meme', '2016-03-07 14:02:42', 'South Bank', 'absent'),
(8, 'Casey Webb', 'Monday', '36982356', 'Lois Clark\r\n', '2016-03-07 14:03:40', 'South Bank', 'absent'),
(9, 'Casey Webb', 'Monday', '821581068', 'Kim', '2016-03-07 14:04:50', 'South Bank', 'absent'),
(10, 'Casey Webb', 'Monday', '9177642161', 'Rad Meme', '2016-03-07 14:06:09', 'South Bank', 'absent'),
(11, 'Casey Webb', 'Wednesday', '9212591799', 'Samuel Griffin', '2016-03-07 13:40:59', 'South Bank', 'absent'),
(12, 'Casey Webb', 'Wednesday', '1014572271', 'Adrienna Luna', '2016-03-07 13:40:59', 'South Bank', 'absent'),
(13, 'Casey Webb', 'Wednesday', '537251488', 'Suzanne	Garner', '2016-03-07 13:40:59', 'South Bank', 'absent'),
(14, 'Casey Webb', 'Wednesday', '4427941263', 'Peggy Sherman', '2016-03-07 13:40:59', 'South Bank', 'absent'),
(15, 'Casey Webb', 'Wednesday', '137284565', 'Elizabeth Leonard', '2016-03-07 13:40:59', 'South Bank', 'absent'),
(16, 'Casey Webb', 'Wednesday', '7615863594', 'Dank Meme', '2016-03-07 13:40:59', 'South Bank', 'absent'),
(17, 'Casey Webb', 'Wednesday', '36982356', 'Lois Clark', '2016-03-07 13:40:59', 'South Bank', 'absent'),
(18, 'Casey Webb', 'Wednesday', '821581068', 'Kim', '2016-03-07 13:40:59', 'South Bank', 'absent'),
(54, 'Casey Webb', 'Thursday', '9212591799', 'Samuel Griffin', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(55, 'Casey Webb', 'Thursday', '1014572271', 'Adrienna Luna\r\n', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(56, 'Casey Webb', 'Thursday', '537251488', '\r\nSuzanne	Garner', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(57, 'Casey Webb', 'Thursday', '4427941263', 'Peggy Sherman\r\n', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(58, 'Casey Webb', 'Thursday', '137284565', 'Elizabeth Leonard\r\n', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(59, 'Casey Webb', 'Thursday', '7615863594', 'Dank Meme', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(60, 'Casey Webb', 'Thursday', '36982356', 'Lois Clark\r\n', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(61, 'Casey Webb', 'Thursday', '821581068', 'Kim', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(62, 'Casey Webb', 'Thursday', '9177642161', 'Rad Meme', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(63, 'Casey Webb', 'Thursday', '9212591799', 'Samuel Griffin', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(64, 'Casey Webb', 'Thursday', '1014572271', 'Adrienna Luna', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(65, 'Casey Webb', 'Thursday', '537251488', 'Suzanne	Garner', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(66, 'Casey Webb', 'Thursday', '4427941263', 'Peggy Sherman', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(67, 'Casey Webb', 'Thursday', '137284565', 'Elizabeth Leonard', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(68, 'Casey Webb', 'Thursday', '7615863594', 'Dank Meme', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(69, 'Casey Webb', 'Thursday', '36982356', 'Lois Clark', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(70, 'Casey Webb', 'Thursday', '821581068', 'Kim', '0000-00-00 00:00:00', 'MT Gravatt', 'absent'),
(71, 'Casey Webb', 'Friday', '9212591799', 'Samuel Griffin', '0000-00-00 00:00:00', 'South Bank', 'absent'),
(72, 'Casey Webb', 'Friday', '1014572271', 'Adrienna Luna\r\n', '0000-00-00 00:00:00', 'South Bank', 'absent'),
(73, 'Casey Webb', 'Friday', '537251488', '\r\nSuzanne	Garner', '0000-00-00 00:00:00', 'South Bank', 'absent'),
(74, 'Casey Webb', 'Friday', '4427941263', 'Peggy Sherman\r\n', '0000-00-00 00:00:00', 'South Bank', 'absent'),
(75, 'Casey Webb', 'Friday', '137284565', 'Elizabeth Leonard\r\n', '0000-00-00 00:00:00', 'South Bank', 'absent'),
(76, 'Casey Webb', 'Friday', '7615863594', 'Dank Meme', '0000-00-00 00:00:00', 'South Bank', 'absent'),
(77, 'Casey Webb', 'Friday', '36982356', 'Lois Clark\r\n', '0000-00-00 00:00:00', 'South Bank', 'absent'),
(78, 'Casey Webb', 'Friday', '821581068', 'Kim', '0000-00-00 00:00:00', 'South Bank', 'absent'),
(79, 'Casey Webb', 'Friday', '9177642161', 'Rad Meme', '0000-00-00 00:00:00', 'South Bank', 'absent'),
(105, 'Casey Webb', 'Monday', '67834567', 'Blake', '2016-04-06 10:49:21', 'South Bank', 'absent'),
(106, 'June', 'Tuesday', '467394653', 'Waltz', '2016-04-14 11:33:10', 'MT Gravatt', 'present'),
(107, 'June', 'Tuesday', '467394653', 'Waltz', '0000-00-00 00:00:00', 'South Bank', 'present'),
(108, 'June', 'Wednesday', '467394653', 'Waltz', '2016-05-04 13:39:35', 'MT Gravatt', 'absent'),
(109, 'June', 'Wednesday', '467394653', 'Waltz', '2016-05-04 13:39:35', 'MT Gravatt', 'absent');

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`classid`, `classlocation`, `classname`, `class_start_time`, `class_end_time`, `classteacher`) VALUES
(1, 'South Bank', 'Room 1324', '14:18:02', '04:30:00', 'Casey Webb'),
(2, 'South Bank', 'Room 1234', '14:20:36', '05:32:00', 'Gwendolyn'),
(12, 'MT Gravatt', 'Room', '14:44:58', '05:30:00', 'sbvfgbjfv'),
(13, 'MT Gravatt', 'Room', '14:46:25', '05:30:00', 'sbvfgbjfv'),
(14, 'MT Gravatt', 'Room 4', '04:30:00', '07:30:00', 'Casey Webb'),
(22, 'South Bank', 'Room 111', '04:30:00', '06:30:00', 'Casey Webb'),
(24, 'MT Gravatt', 'MG Room 1234', '11:34:53', '05:00:00', 'June'),
(25, 'South Bank', 'SB Room 1234', '01:33:00', '04:30:00', 'June'),
(26, 'MT Gravatt', 'Room 1324', '12:00:00', '12:30:00', 'June');

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
('Wednesday', 'Room 4', '0000-00-00'),
('Friday', 'Room 111', '2016-04-04'),
('Tuesday', 'MG Room 1234', '2016-04-14'),
('Tuesday', 'SB Room 1234', '2016-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE IF NOT EXISTS `enrollment` (
`enrollID` int(11) NOT NULL,
  `studentID` varchar(256) NOT NULL,
  `classID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollID`, `studentID`, `classID`) VALUES
(1, 'Samuel Griffin', 1),
(2, 'Adrienna Luna\r\n', 1),
(3, 'Suzanne Garner', 1),
(4, 'Peggy Sherman\r\n', 1),
(5, 'Elizabeth Leonard\r\n', 1),
(6, 'Dank Meme', 1),
(7, 'Lois Clark\r\n', 1),
(8, 'Kim', 1),
(9, 'Rad Meme', 1),
(69, 'Blake', 1),
(80, 'Samuel Griffin', 22),
(81, 'Waltz', 24),
(82, 'Waltz', 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`userid` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `usertypeID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `name`, `usertypeID`) VALUES
(1, 'simple', 'test', '', 1),
(2, 'test', 'simple1', 'Casey Webb', 2),
(3, 'Webster', 'hello', 'June', 2);

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
(2, 'teacher'),
(3, 'student');

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
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
 ADD PRIMARY KEY (`enrollID`);

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
MODIFY `attendanceid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
MODIFY `enrollID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
