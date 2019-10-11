-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2019 at 03:32 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `profile` varchar(2000) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `phone`, `adress`, `status`, `pin`, `password`, `profile`, `c_date`) VALUES
(1, 'Ezpk', 'Ezechiel', 'ezpk@gmail.com', '078564543456', 'Gisozi', 1, 1, '0b639864a6cfd746081db8c9a75671e91ad35383', 'img/profile/u.png', '2019-10-08 21:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `profile` varchar(2000) NOT NULL,
  `c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`) VALUES
(1, 'Kicukiro'),
(2, 'Gasabo'),
(3, 'Nyarugenge');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `house_id` int(11) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `house_id`, `c_date`) VALUES
(1, 'hh', 'hh@gmail.com', 'fghjkjhgfgk', 0, '2019-10-10 00:34:44'),
(2, 'jkj', 'ghjh@hjh.com', 'fghjkhg', 0, '2019-10-10 00:36:47'),
(3, 'Ezechie', 'eze@gmail.com', 'hey i want the answer??', 0, '2019-10-10 00:41:53'),
(4, 'Ezechie', 'ezechiel@gmai.com', 'hey there .. the houses are ...', 0, '2019-10-10 00:43:21'),
(5, 'EzechieL', 'ezechiel@gmai.com', 'good evening i need to find a house of 5 rooms', 0, '2019-10-10 00:45:07'),
(6, 'hh', 'hh@gmail.com', 'hey there ..', 0, '2019-10-10 00:46:06'),
(7, 'dvdf', 'ghjh@hjh.com', 'csdcs', 0, '2019-10-10 01:18:16'),
(8, 'svcws', 'hh@gmail.com', 'svcvse', 1, '2019-10-10 01:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `district_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `main_picture` varchar(2000) NOT NULL,
  `picture_1` varchar(2000) NOT NULL,
  `picture_2` varchar(2000) NOT NULL,
  `picture_3` varchar(2000) NOT NULL,
  `garage` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `description` text NOT NULL,
  `house_owner_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `house_owners`
--

CREATE TABLE `house_owners` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `profile` varchar(2000) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_owners`
--

INSERT INTO `house_owners` (`id`, `fname`, `lname`, `email`, `phone`, `adress`, `status`, `pin`, `password`, `profile`, `c_date`) VALUES
(1, 'eze', 'eze', 'eze@gmail.com', '07856876', 'Gisozi', 1, 1, '0b639864a6cfd746081db8c9a75671e91ad35383', 'img/profile/u.png', '2019-10-08 22:41:39'),
(2, 'aa', 'bbb', 'aabbb@gmail.com', '08787545', 'g', 1, 1, '0b639864a6cfd746081db8c9a75671e91ad35383', 'img/profile/u.png', '2019-10-08 22:45:27'),
(3, 'OWNER', 'OWNER', 'owner@gmail.com', '08798876', 'Gisozi', 1, 1, '0b639864a6cfd746081db8c9a75671e91ad35383', 'img/profile/u.png', '2019-10-09 19:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `payment_date` date NOT NULL,
  `amount_paid` double NOT NULL,
  `slip_number` int(11) NOT NULL,
  `slip_picture` varchar(2000) NOT NULL,
  `client_id` int(11) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `sector_name` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`id`, `sector_name`, `district_id`) VALUES
(1, 'Ngoma', 1),
(2, 'Masaka', 1),
(3, 'Cyimo', 1),
(4, 'Nyarugunga', 1),
(5, 'Kamashashi', 1),
(6, 'Bumbogo', 2),
(7, 'Gikomero', 2),
(8, 'Rutunga', 2),
(9, 'Nduba', 2),
(10, 'Jabana', 2),
(11, 'Jali', 2),
(12, 'Rusororo', 2),
(13, 'Ndera', 2),
(14, 'Kimihurura', 2),
(15, 'Kacyiru', 2),
(16, 'Kimironko', 2),
(17, 'Remera', 2),
(18, 'Gisozi', 2),
(19, 'Kinyinya', 2),
(20, 'Gatsata', 2),
(21, 'Gahanga', 2),
(22, 'Gatenga', 2),
(23, 'Gikondo', 2),
(24, 'Kagunga', 2),
(25, 'Kanombe', 2),
(26, 'Rubirizi', 2),
(27, 'Kagarama', 2),
(28, 'Kimihurura', 2),
(29, 'Rukatsa', 2),
(30, 'Niboye', 2),
(31, 'Gatare', 2),
(32, 'Taba', 2),
(33, 'Kigarama', 2),
(34, 'Nyenyeri', 2),
(35, 'Bwerankori', 2),
(36, 'Gitega', 3),
(37, 'Kimisagara', 3),
(38, 'Muhima', 3),
(39, 'Nyakabanda', 3),
(40, 'Nyamirambo', 3),
(41, 'Nyarugenge', 3),
(42, 'Rwezamenyo', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_owners`
--
ALTER TABLE `house_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `house_owners`
--
ALTER TABLE `house_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
