-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 09, 2022 at 06:21 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `car_id` varchar(255) NOT NULL COMMENT 'ทะเบียนรถ',
  `typecar_id` int(11) NOT NULL COMMENT 'รหัสยี่ห้อ',
  `name` varchar(255) NOT NULL COMMENT 'รุ่น',
  `car_img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT 'สถาณะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `rental_terms` int(1) NOT NULL,
  `car_id` int(10) NOT NULL,
  `st_date` date NOT NULL,
  `en_date` date NOT NULL,
  `day` int(10) NOT NULL,
  `rent_price` int(10) NOT NULL,
  `statusin` int(1) NOT NULL,
  `statusour` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rent_detall`
--

CREATE TABLE `rent_detall` (
  `detail_id` int(10) NOT NULL,
  `rent_id` int(10) NOT NULL,
  `car_id` int(10) NOT NULL,
  `st_date` date NOT NULL,
  `st_time` time NOT NULL,
  `en_date` date NOT NULL,
  `en_time` time NOT NULL,
  `day` int(2) NOT NULL,
  `rent_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_car`
--

CREATE TABLE `type_car` (
  `typecar_id` int(11) NOT NULL,
  `typecar_name` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Userlevel` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `rent_detall`
--
ALTER TABLE `rent_detall`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `type_car`
--
ALTER TABLE `type_car`
  ADD PRIMARY KEY (`typecar_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent_detall`
--
ALTER TABLE `rent_detall`
  MODIFY `detail_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_car`
--
ALTER TABLE `type_car`
  MODIFY `typecar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
