-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 09:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `creg`
--

CREATE TABLE `creg` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `shares` int(11) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` text NOT NULL,
  `anumber` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `panel` varchar(255) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creg`
--

INSERT INTO `creg` (`id`, `fname`, `shares`, `dateofbirth`, `gender`, `anumber`, `email`, `number`, `address`, `panel`, `vote`) VALUES
(0, 'Sagar Patil', 4321, '2001-11-23', 'm', 2147483647, 'sagarpatil98754@gmail.com', 2147483647, '263 Kalyan Kutir Udhana Surat', 'P1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newelection`
--

CREATE TABLE `newelection` (
  `bname` varchar(255) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `cfstartdate` date NOT NULL,
  `cfenddate` date NOT NULL,
  `eledate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newelection`
--

INSERT INTO `newelection` (`bname`, `p1`, `p2`, `cfstartdate`, `cfenddate`, `eledate`) VALUES
('Bhagini Nivedita', 'Panel 1', 'Panel 2', '2022-08-15', '2022-08-18', '2022-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nm` varchar(100) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Mobile_number` varchar(10) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Profile_image` varchar(1000) NOT NULL,
  `OTP` int(11) NOT NULL,
  `vote_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nm`, `Password`, `Mobile_number`, `Email_id`, `Profile_image`, `OTP`, `vote_status`) VALUES
(1, 'admin', '1234', '1234567890', 'admin@gmail.com', '', 0, 0),
(2, 'Sagar Patil', '1234', '6355947852', 'sagarpatil98754@gmail.com', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
