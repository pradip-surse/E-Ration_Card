-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 11:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_ration_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(500) NOT NULL,
  `item_weight` varchar(500) NOT NULL,
  `item_price` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rationshop`
--

CREATE TABLE `rationshop` (
  `rationshop_id` int(11) NOT NULL,
  `r_aadhar` varchar(50) NOT NULL,
  `r_email` varchar(500) NOT NULL,
  `r_mobile` varchar(100) NOT NULL,
  `r_last_name` varchar(500) NOT NULL,
  `r_first_name` varchar(500) NOT NULL,
  `r_middle_name` varchar(500) NOT NULL,
  `r_dob` varchar(100) NOT NULL,
  `r_gender` varchar(500) NOT NULL,
  `r_photo` varchar(500) NOT NULL,
  `r_password` varchar(500) NOT NULL,
  `r_address` varchar(500) NOT NULL,
  `r_status` varchar(500) NOT NULL DEFAULT 'Registered',
  `r_documents` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `head_member_aadhar` varchar(500) NOT NULL,
  `u_aadhar` varchar(50) NOT NULL,
  `u_mobile` varchar(100) NOT NULL,
  `u_last_name` varchar(500) NOT NULL,
  `u_first_name` varchar(500) NOT NULL,
  `u_middle_name` varchar(500) NOT NULL,
  `u_dob` varchar(100) NOT NULL,
  `u_gender` varchar(500) NOT NULL,
  `relation` varchar(500) NOT NULL,
  `u_income` varchar(500) NOT NULL,
  `u_photo` varchar(500) NOT NULL,
  `u_password` varchar(500) NOT NULL,
  `u_address` varchar(500) NOT NULL,
  `rationcard_number` varchar(100) NOT NULL,
  `u_status` varchar(500) NOT NULL DEFAULT 'Registered',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_ration_request`
--

CREATE TABLE `user_ration_request` (
  `request_id` int(11) NOT NULL,
  `r_aadhar` varchar(500) NOT NULL,
  `u_aadhar` varchar(500) NOT NULL,
  `item_name` varchar(500) NOT NULL,
  `item_weight` varchar(500) NOT NULL,
  `item_price` varchar(500) NOT NULL,
  `item_quantity` varchar(500) NOT NULL,
  `total` varchar(500) NOT NULL,
  `u_income` varchar(500) NOT NULL,
  `ration_status` varchar(100) NOT NULL,
  `request_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delivery_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `rationshop`
--
ALTER TABLE `rationshop`
  ADD PRIMARY KEY (`rationshop_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_ration_request`
--
ALTER TABLE `user_ration_request`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rationshop`
--
ALTER TABLE `rationshop`
  MODIFY `rationshop_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_ration_request`
--
ALTER TABLE `user_ration_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
