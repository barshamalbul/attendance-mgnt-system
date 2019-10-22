-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 04:41 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6098217_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class_schedule`
--

CREATE TABLE `tbl_class_schedule` (
  `csid` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(1) NOT NULL,
  `day` enum('1','2','3','4','5','6') NOT NULL,
  `tid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `period` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class_schedule`
--

INSERT INTO `tbl_class_schedule` (`csid`, `class`, `section`, `day`, `tid`, `subject`, `period`) VALUES
(1, 1, 'a', '1', 1, 'math', 1),
(5, 1, 'a', '2', 1, 'moral', 1),
(6, 1, 'a', '3', 1, 'science', 1),
(7, 1, 'a', '4', 1, 'science', 1),
(8, 1, 'a', '5', 1, 'nepali', 5),
(12, 1, 'a', '6', 1, 'science', 1),
(13, 1, 'a', '1', 8, 'account', 6),
(17, 1, 'a', '2', 5, 'nepali', 2),
(21, 2, 'a', '3', 1, 'moral', 4),
(22, 2, 'a', '4', 1, 'social', 4),
(132, 2, 'a', '5', 1, 'nepali', 1),
(133, 1, 'a', '1', 5, 'moral', 2),
(134, 1, 'a', '1', 11, 'english', 3),
(135, 5, 'a', '1', 5, 'nepali', 1),
(136, 2, 'a', '2', 5, 'nepali', 1),
(137, 1, 'a', '2', 1, 'nepali', 3),
(138, 1, 'a', '1', 1, 'nepali', 4),
(139, 1, 'a', '1', 12, 'science', 5),
(140, 1, 'a', '2', 1, 'nepali', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff_attendance`
--

CREATE TABLE `tbl_staff_attendance` (
  `ssid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('absent','present') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff_attendance`
--

INSERT INTO `tbl_staff_attendance` (`ssid`, `sid`, `date`, `status`) VALUES
(1, 6, '2018-11-17', 'absent'),
(3, 7, '2018-11-17', 'present'),
(22, 7, '2018-11-28', 'present'),
(24, 6, '2018-11-28', 'present'),
(25, 6, '2018-11-29', 'present'),
(26, 7, '2018-11-29', 'present'),
(27, 7, '2018-11-01', 'present'),
(28, 6, '2018-11-01', 'present'),
(35, 6, '2018-11-30', 'present'),
(36, 7, '2018-11-30', 'present'),
(37, 6, '2018-12-20', 'present'),
(38, 7, '2018-12-20', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `Sid` int(11) NOT NULL,
  `Sname` varchar(100) NOT NULL,
  `Sdob` date NOT NULL,
  `Sgender` enum('male','female','other','') NOT NULL,
  `Saddress` varchar(200) NOT NULL,
  `Scontact` varchar(10) NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`Sid`, `Sname`, `Sdob`, `Sgender`, `Saddress`, `Scontact`, `status`) VALUES
(1, 'pratik rai', '2000-01-18', 'male', 'patan', '9841642345', 'Active'),
(40, 'manish bista', '2002-08-11', 'male', 'dhapakhel', '9809876543', 'Active'),
(41, 'sita bista', '2002-08-04', 'female', 'london', '9807898754', 'Active'),
(42, 'ritu malbul', '2003-08-04', 'female', 'dhapakhel', '9876543211', 'Active'),
(43, 'ram shrestha', '2018-08-04', 'male', 'dhapakhel', '9876543210', 'Active'),
(44, 'gita rana', '2000-08-04', 'female', 'dhapakhel', '9876543210', 'Active'),
(45, 'ram shrestha', '2000-11-03', 'male', 'dhapakhel', '9876543210', 'Active'),
(46, 'ritu thapa', '2007-12-01', 'female', 'dhapakhel', '9865432190', 'Active'),
(47, 'sajana bista', '2006-12-01', 'female', 'dhapakhel', '8976543210', 'Active'),
(48, 'radhika bista', '2001-12-01', 'female', 'dhapakhel', '9876543210', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students_attendance`
--

CREATE TABLE `tbl_students_attendance` (
  `said` int(11) NOT NULL,
  `Sid` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('present','absent') NOT NULL,
  `csid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students_attendance`
--

INSERT INTO `tbl_students_attendance` (`said`, `Sid`, `date`, `status`, `csid`) VALUES
(90, 40, '2018-09-02', 'present', 13),
(91, 42, '2018-09-02', 'present', 21),
(93, 42, '2018-09-03', 'present', 22),
(94, 41, '2018-09-07', 'present', 12),
(95, 1, '2018-09-08', 'absent', 1),
(96, 41, '2018-09-09', 'present', 1),
(97, 41, '2018-09-09', 'present', 13),
(98, 41, '2018-09-12', 'absent', 6),
(99, 41, '2018-10-25', 'present', 17),
(100, 41, '2018-10-30', 'present', 5),
(101, 41, '2018-11-06', 'present', 5),
(102, 41, '2018-11-29', 'absent', 7),
(103, 41, '2018-11-30', 'present', 12),
(104, 41, '2018-12-01', 'present', 13),
(105, 41, '2018-12-01', 'absent', 134),
(106, 41, '2018-12-01', 'present', 8),
(107, 41, '2018-12-01', 'present', 6),
(108, 42, '2018-12-01', 'present', 21),
(109, 42, '2018-12-01', 'present', 132),
(110, 41, '2018-12-01', 'present', 1),
(111, 41, '2018-12-18', 'present', 134),
(112, 46, '2018-12-18', 'present', 134),
(113, 42, '2018-12-18', 'present', 132),
(114, 42, '2018-12-18', 'present', 22),
(115, 41, '2018-12-18', 'present', 13),
(116, 46, '2018-12-18', 'present', 13),
(117, 41, '2018-12-18', 'present', 1),
(118, 46, '2018-12-18', 'present', 1),
(119, 42, '2018-12-20', 'present', 21),
(121, 42, '2018-12-20', 'present', 132),
(122, 47, '2018-12-20', 'absent', 132),
(123, 42, '2018-12-21', 'present', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students_class`
--

CREATE TABLE `tbl_students_class` (
  `scid` int(11) NOT NULL,
  `Sid` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(1) NOT NULL,
  `date` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students_class`
--

INSERT INTO `tbl_students_class` (`scid`, `Sid`, `class`, `section`, `date`) VALUES
(1, 1, 10, 'h', '2019'),
(39, 40, 5, 'a', '2019'),
(40, 41, 1, 'a', '2019'),
(41, 42, 2, 'a', '2010'),
(42, 43, 1, 'b', '2019'),
(43, 44, 2, 'b', '2015'),
(44, 45, 2, 'd', '2014'),
(45, 46, 1, 'a', '2018'),
(46, 47, 2, 'a', '2018'),
(47, 48, 1, 'a', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `Uid` int(11) NOT NULL,
  `Uname` varchar(200) NOT NULL,
  `Ufname` varchar(100) NOT NULL,
  `Ugender` enum('male','female','other','') NOT NULL,
  `Uemail` varchar(200) NOT NULL,
  `status` enum('active','inactive','disabled','') NOT NULL,
  `Udob` date NOT NULL,
  `Udoj` date NOT NULL,
  `Uaddress` varchar(200) NOT NULL,
  `Ucontact` varchar(10) NOT NULL,
  `Upassword` varchar(200) NOT NULL,
  `role` enum('teacher','admin','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`Uid`, `Uname`, `Ufname`, `Ugender`, `Uemail`, `status`, `Udob`, `Udoj`, `Uaddress`, `Ucontact`, `Upassword`, `role`) VALUES
(1, 'ritu', 'ritu Malbul', 'female', 'ritumalbul@gmail.com', 'active', '1995-06-18', '2010-04-05', 'patan', '909890900', 'd44273a27369a7f34474e2186f2a997d', 'teacher'),
(2, 'barsha', 'Barsha Malbul', 'female', 'barshamalbul@gmail.com', 'active', '1996-01-01', '2009-02-03', 'dhapkhel', '9843516923', '14b09b0e92b5d787431ccfb3d7eabde1', 'admin'),
(5, 'abhi', 'abhishek rana', 'male', 'abhi@gmail.com', 'active', '1994-08-04', '2018-08-05', 'patan', '9876543210', 'd76f3d05cc9ac98f1f9160274a39fe33', 'teacher'),
(6, 'abhishek', 'abhishek ranabhat', 'male', 'abhishek@gmail.com', 'active', '2004-08-04', '2018-08-04', 'patan', '9876543219', 'f589a6959f3e04037eb2b3eb0ff726ac', 'staff'),
(7, 'gita ', 'gita shrestha', 'female', 'gita@gmail.com', 'active', '1996-01-01', '2009-02-03', 'patan', '9870654329', 'gita', 'staff'),
(8, 'teacher3', 'teacher3', 'male', 'teacher3@gmail.com', 'active', '2018-09-04', '2018-09-05', 'teacher3', '9865263563', '82470256ea4b80343b27afccbca1015b', 'teacher'),
(9, 'teacher4', 'teacher4', 'male', 'teacher4@gmail.com', 'active', '2018-09-04', '2018-09-05', 'teacher4', '9865264564', '93dacda950b1dd917079440788af3321', 'teacher'),
(10, 'teacher5', 'teacher5', 'male', 'teacher5@gmail.com', 'active', '2018-09-05', '2018-09-05', 'teacher5', '9865265565', 'ea105f0d381e790cdadc6a41eb611c77', 'teacher'),
(11, 'teacher6', 'teacher6', 'male', 'teacher6@gmail.com', 'active', '2018-09-06', '2018-09-06', 'teacher6', '9866266666', 'ff1643afb67a6edb36ee3f6fea756323', 'teacher'),
(12, 'teacher7', 'teacher7', 'male', 'teacher7@gmail.com', 'active', '2018-09-07', '2018-09-07', 'teacher7', '9877277777', '71e0f8d7d61b45e27b57c62eb8684583', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attendence`
--

CREATE TABLE `teacher_attendence` (
  `tid_aid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('present','absent','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_attendence`
--

INSERT INTO `teacher_attendence` (`tid_aid`, `tid`, `cid`, `date`, `status`) VALUES
(1, 1, 7, '2018-08-30', 'present'),
(22, 1, 17, '2018-08-30', 'present'),
(26, 1, 13, '2018-09-02', 'present'),
(27, 1, 13, '2018-09-02', 'present'),
(28, 1, 21, '2018-09-02', 'present'),
(29, 1, 22, '2018-09-03', 'present'),
(30, 1, 12, '2018-09-08', 'present'),
(31, 1, 1, '2018-09-09', 'present'),
(32, 1, 13, '2018-09-09', 'present'),
(33, 1, 6, '2018-09-12', 'present'),
(34, 1, 17, '2018-10-25', 'present'),
(35, 1, 5, '2018-10-30', 'present'),
(36, 1, 5, '2018-11-06', 'present'),
(37, 1, 7, '2018-11-28', 'present'),
(38, 1, 12, '2018-11-30', 'present'),
(39, 1, 13, '2018-12-01', 'present'),
(40, 1, 134, '2018-12-01', 'present'),
(41, 1, 21, '2018-12-01', 'present'),
(42, 1, 132, '2018-12-01', 'present'),
(43, 1, 134, '2018-12-18', 'present'),
(44, 1, 132, '2018-12-18', 'present'),
(45, 1, 22, '2018-12-18', 'present'),
(46, 1, 13, '2018-12-18', 'present'),
(47, 1, 1, '2018-12-18', 'present'),
(48, 1, 21, '2018-12-20', 'present'),
(49, 1, 132, '2018-12-20', 'present');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_class_schedule`
--
ALTER TABLE `tbl_class_schedule`
  ADD PRIMARY KEY (`csid`),
  ADD KEY `teacher_class_schedule` (`tid`);

--
-- Indexes for table `tbl_staff_attendance`
--
ALTER TABLE `tbl_staff_attendance`
  ADD PRIMARY KEY (`ssid`),
  ADD UNIQUE KEY `unique_index` (`sid`,`date`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `tbl_students_attendance`
--
ALTER TABLE `tbl_students_attendance`
  ADD PRIMARY KEY (`said`),
  ADD KEY `student_attendance` (`Sid`),
  ADD KEY `csid` (`csid`);

--
-- Indexes for table `tbl_students_class`
--
ALTER TABLE `tbl_students_class`
  ADD PRIMARY KEY (`scid`),
  ADD KEY `sid_sid` (`Sid`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`Uid`),
  ADD UNIQUE KEY `Uemail` (`Uemail`);

--
-- Indexes for table `teacher_attendence`
--
ALTER TABLE `teacher_attendence`
  ADD PRIMARY KEY (`tid_aid`),
  ADD KEY `tid_tid` (`tid`),
  ADD KEY `cid_cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_class_schedule`
--
ALTER TABLE `tbl_class_schedule`
  MODIFY `csid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `tbl_staff_attendance`
--
ALTER TABLE `tbl_staff_attendance`
  MODIFY `ssid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_students_attendance`
--
ALTER TABLE `tbl_students_attendance`
  MODIFY `said` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tbl_students_class`
--
ALTER TABLE `tbl_students_class`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher_attendence`
--
ALTER TABLE `teacher_attendence`
  MODIFY `tid_aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_class_schedule`
--
ALTER TABLE `tbl_class_schedule`
  ADD CONSTRAINT `teacher_class_schedule` FOREIGN KEY (`tid`) REFERENCES `tbl_users` (`Uid`);

--
-- Constraints for table `tbl_staff_attendance`
--
ALTER TABLE `tbl_staff_attendance`
  ADD CONSTRAINT `sid_uid` FOREIGN KEY (`sid`) REFERENCES `tbl_users` (`Uid`);

--
-- Constraints for table `tbl_students_attendance`
--
ALTER TABLE `tbl_students_attendance`
  ADD CONSTRAINT `csid` FOREIGN KEY (`csid`) REFERENCES `tbl_class_schedule` (`csid`),
  ADD CONSTRAINT `student_attendance` FOREIGN KEY (`Sid`) REFERENCES `tbl_students` (`Sid`);

--
-- Constraints for table `tbl_students_class`
--
ALTER TABLE `tbl_students_class`
  ADD CONSTRAINT `sid_sid` FOREIGN KEY (`Sid`) REFERENCES `tbl_students` (`Sid`);

--
-- Constraints for table `teacher_attendence`
--
ALTER TABLE `teacher_attendence`
  ADD CONSTRAINT `cid_cid` FOREIGN KEY (`cid`) REFERENCES `tbl_class_schedule` (`csid`),
  ADD CONSTRAINT `tid_tid` FOREIGN KEY (`tid`) REFERENCES `tbl_users` (`Uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
