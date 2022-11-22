-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2022 at 04:57 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

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
  `status` int(11) NOT NULL COMMENT 'สถาณะ',
  `color` varchar(50) NOT NULL,
  `gear` varchar(50) NOT NULL,
  `door` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `car_id`, `typecar_id`, `name`, `car_img`, `price`, `status`, `color`, `gear`, `door`) VALUES
(1, '9999 อุบลราชธานี', 1, 'Vcross', '1669135932-cross.png', 900, 1, 'เทาแรมโบ', 'ออโต้', '4');

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
  `statusour` int(1) NOT NULL,
  `fine` int(10) NOT NULL,
  `id_card` varchar(13) NOT NULL,
  `st_card` varchar(255) NOT NULL,
  `ed_card` varchar(255) NOT NULL,
  `card` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rent_detall`
--

CREATE TABLE `rent_detall` (
  `detail_id` int(10) NOT NULL,
  `rent_id` int(10) NOT NULL
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

--
-- Dumping data for table `type_car`
--

INSERT INTO `type_car` (`typecar_id`, `typecar_name`, `status`) VALUES
(1, 'isuzu', 1);

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
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Firstname`, `Lastname`, `Userlevel`) VALUES
(1, '123', '202cb962ac59075b964b07152d234b70', '1', '1', 'A');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rent_detall`
--
ALTER TABLE `rent_detall`
  MODIFY `detail_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_car`
--
ALTER TABLE `type_car`
  MODIFY `typecar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
