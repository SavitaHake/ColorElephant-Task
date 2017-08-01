-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 12:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `name` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `coverletter` text NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`name`, `profile`, `coverletter`, `file`) VALUES
('savita', 'php', 'hello sir', 'savi.txt'),
('swati', 'java', 'hello,', 'savi.txt');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL,
  `mobile` int(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `name`, `email`, `password`, `repassword`, `mobile`, `address`) VALUES
(1, 'savita', 'savita@gmail.com', '12345678', '12345678', 2066471014, 'pune');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
