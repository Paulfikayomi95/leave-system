-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2015 at 12:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_for_leave`
--

CREATE TABLE IF NOT EXISTS `apply_for_leave` (
`id` int(11) NOT NULL,
  `type_of_leave` varchar(300) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `status` int(11) NOT NULL,
  `submit_username` varchar(300) NOT NULL,
  `submit_type` varchar(300) NOT NULL,
  `select_name` varchar(300) NOT NULL,
  `employee_id` varchar(300) NOT NULL,
  `staff_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_for_leave`
--

INSERT INTO `apply_for_leave` (`id`, `type_of_leave`, `msg`, `status`, `submit_username`, `submit_type`, `select_name`, `employee_id`, `staff_name`, `email`, `from`, `to`) VALUES
(2, 'General Leave', 'General', 2, 'williams', 'a', 'Admi', '5HXVC3', 'Williams Oguniyi', 'williams@gmail.com', '2015-06-19', '2015-07-01'),
(3, 'Sick Leave', 'se', 3, 'john', 'a', 'Staff Admin', 'TBEB3I', 'John Doe', 'john@yahoo.com', '2015-06-06', '2015-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `staff_name` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(400) NOT NULL,
  `email` varchar(300) NOT NULL,
  `user_level` int(11) NOT NULL,
  `type` varchar(300) NOT NULL,
  `employee_id` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `staff_name`, `username`, `password`, `email`, `user_level`, `type`, `employee_id`) VALUES
(1, 'Williams Oguniyi', 'williams', 'williams', 'williams@gmail.com', 1, 'd', '5HXVC3'),
(2, 'John Doe', 'john', 'DNZSJQ94', 'john@yahoo.com', 1, 'a', 'TBEB3I'),
(3, 'Harry John', 'harry', 'MDDPSL3M', 'harry@yahoo.com', 2, 'a', 'MRV8A6');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
`id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`) VALUES
(1, 'Staff Admin'),
(2, 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_for_leave`
--
ALTER TABLE `apply_for_leave`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_for_leave`
--
ALTER TABLE `apply_for_leave`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
