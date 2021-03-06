-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 12:22 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `gatepass`
--

CREATE TABLE `gatepass` (
  `id` int(50) NOT NULL,
  `date` date NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `emp_sign` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `auth_sign` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gatepass`
--

INSERT INTO `gatepass` (`id`, `date`, `code`, `name`, `place`, `time`, `emp_sign`, `status`, `auth_sign`) VALUES
(1, '2019-01-21', '12', 'abcd', 'chennai', '04:55:00', 'xyz', 'Approved', ''),
(2, '2019-01-18', 've', 'expo', 'chennai', '05:30:00', 'xyz', 'Rejected', ''),
(5, '2019-04-08', 'VE1785', 'HRAdmin', 'chennai', '16:43:00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `l1`
--

CREATE TABLE `l1` (
  `l1_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `employee` varchar(300) NOT NULL,
  `quantity` int(200) NOT NULL,
  `status` varchar(500) NOT NULL,
  `issues` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `l1`
--

INSERT INTO `l1` (`l1_id`, `date`, `time`, `product_name`, `employee`, `quantity`, `status`, `issues`) VALUES
(1, '2019-01-19', '01:02:00', 'as', '123', 120, 'processing', 'Nothing'),
(2, '2019-01-19', '12:32:00', 'wel', '1234', 1290, 'processing', 'Nothing'),
(3, '2018-09-29', '12:32:00', 'as', '123', 120, 'processing', 'Nothing'),
(5, '2018-09-29', '12:32:00', 'as', '123', 120, 'processing', 'Nothing'),
(6, '2018-09-29', '12:32:00', 'as', '123', 120, 'processing', 'Nothing'),
(7, '2018-10-01', '10:34:00', 'levis', '120', 30, 'processing', 'No '),
(8, '2018-10-04', '12:48:00', 'Belt', '15', 7, 'complete', 'Nothing'),
(10, '2018-10-04', '13:00:00', 'Bag', '30', 15, 'hold', 'XXXXXX'),
(15, '2018-10-05', '16:45:00', 'xyz', '120', 1, 'processing', ''),
(16, '2018-10-05', '17:14:00', 'abcd', '10', 4, 'hold', 'xyz'),
(21, '2018-10-06', '12:28:00', 'nn', 'nn', 0, 'processing', ''),
(26, '2018-10-06', '01:12:00', 'Levis', '15', 12, 'processing', 'No'),
(27, '2018-10-08', '02:58:00', 'Belt', '120', 50, 'processing', '');

-- --------------------------------------------------------

--
-- Table structure for table `late_slip`
--

CREATE TABLE `late_slip` (
  `l_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `emp_sign` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `auth_sign` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `late_slip`
--

INSERT INTO `late_slip` (`l_id`, `date`, `code`, `name`, `time`, `emp_sign`, `status`, `auth_sign`) VALUES
(5, '2019-03-26', 'VE1785', 'cc', '11:40:00', 'hgffgh', 'Approved', 'jkl'),
(9, '2019-03-26', 'VE1785', 'dfsdf', '11:42:00', 'rt', 'Pending', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `on_duty`
--

CREATE TABLE `on_duty` (
  `onduty_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `out_time` time NOT NULL,
  `place` varchar(300) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `emp_sign` varchar(100) NOT NULL,
  `status` varchar(500) NOT NULL,
  `auth_sign` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `on_duty`
--

INSERT INTO `on_duty` (`onduty_id`, `date`, `name`, `code`, `time`, `out_time`, `place`, `reason`, `emp_sign`, `status`, `auth_sign`) VALUES
(3, '2019-04-06', 'HRAdmin', 'VE1785', '17:12:00', '00:00:00', 'chennai', 'sdfsdf', '', '', ''),
(4, '2019-04-08', 'HRAdmin', 'VE1785', '17:10:00', '00:00:00', 'chennai', 'l', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `permission_slip`
--

CREATE TABLE `permission_slip` (
  `p_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `emp_sign` varchar(200) NOT NULL,
  `status` varchar(500) NOT NULL,
  `auth_sign` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_slip`
--

INSERT INTO `permission_slip` (`p_id`, `date`, `code`, `name`, `time`, `emp_sign`, `status`, `auth_sign`) VALUES
(9, '2019-04-04', 've1001', 'vxxc', '17:20:00', '', 'Approved', ''),
(12, '2019-04-05', 've1785', 'udhaya', '11:54:00', '', '', ''),
(13, '2019-04-05', 've1935', 'kumar', '17:28:00', '', '', ''),
(14, '2019-04-06', 'VE1785', 'udhaya', '12:49:00', '', 'Approved', 'sssss'),
(15, '2019-04-08', 'VE1785', 'udhaya', '10:58:00', '', 'Pending', 'rew'),
(16, '2019-04-08', 'VE1785', 'HRAdmin', '10:58:00', '', 'Pending', 'rew'),
(17, '2019-04-09', 've1935', 'udhaya', '11:19:00', '', 'Approved', 'rew'),
(18, '2019-04-10', 'VE1785', 'sudhaya', '09:51:00', '', '', ''),
(19, '2019-04-10', 've1935', 'HRAdmin', '14:34:00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(56) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user_role_id`, `username`, `email`, `password`, `role`) VALUES
(3, 1, 'viari', 'abcd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'viari'),
(4, 2, 'udhaya', 'support@viari.in', '6e6802677d0061bda5c99f429bdcfa7b', 'admin'),
(5, 4, 'store', 'store@gmail.com', '8cd892b7b97ef9489ae4479d3f4ef0fc', 'store'),
(6, 3, 'kumr', 'sudhayaphp@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id`, `user_role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `employee_id` int(50) NOT NULL,
  `position` varchar(200) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `shift_start` time NOT NULL,
  `shift_end` time NOT NULL,
  `day_off1` varchar(50) NOT NULL,
  `day_off2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`employee_id`, `position`, `first_name`, `last_name`, `shift_start`, `shift_end`, `day_off1`, `day_off2`) VALUES
(2, 'abcd', 'uday', 'kumar', '09:00:00', '17:50:00', '2', '1'),
(121, 'aws', 'wer', 'ert', '00:23:00', '14:01:00', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_pass`
--

CREATE TABLE `visitor_pass` (
  `v_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name` varchar(200) NOT NULL,
  `visitor_from` varchar(300) NOT NULL,
  `visit` varchar(200) NOT NULL,
  `requested` varchar(200) NOT NULL,
  `status` varchar(300) NOT NULL,
  `auth_sign` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_pass`
--

INSERT INTO `visitor_pass` (`v_id`, `date`, `time`, `name`, `visitor_from`, `visit`, `requested`, `status`, `auth_sign`) VALUES
(1, '2019-04-05', '00:00:00', 'abcd', 'chennai', 'xyz', 'abd', '', 'sdksdkj'),
(2, '2019-01-29', '00:00:00', 'kumar', 'chennai', 'test', 'abcd', 'Pending', 'xyz'),
(3, '2019-02-19', '00:00:00', 'viari', 'chennai', 'printer service', 'prabanjan', 'Pending', 'Namagiri'),
(4, '2019-04-08', '17:04:00', 'udhaya', 'chennai', 'printer service', 'prabanjan', '', ''),
(5, '2019-04-08', '17:04:00', 'fsdf', 'dsfds', 'dfds', 'dsfds', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gatepass`
--
ALTER TABLE `gatepass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `l1`
--
ALTER TABLE `l1`
  ADD PRIMARY KEY (`l1_id`);

--
-- Indexes for table `late_slip`
--
ALTER TABLE `late_slip`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `on_duty`
--
ALTER TABLE `on_duty`
  ADD PRIMARY KEY (`onduty_id`);

--
-- Indexes for table `permission_slip`
--
ALTER TABLE `permission_slip`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `visitor_pass`
--
ALTER TABLE `visitor_pass`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gatepass`
--
ALTER TABLE `gatepass`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `l1`
--
ALTER TABLE `l1`
  MODIFY `l1_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `late_slip`
--
ALTER TABLE `late_slip`
  MODIFY `l_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `on_duty`
--
ALTER TABLE `on_duty`
  MODIFY `onduty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permission_slip`
--
ALTER TABLE `permission_slip`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(56) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `employee_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `visitor_pass`
--
ALTER TABLE `visitor_pass`
  MODIFY `v_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
