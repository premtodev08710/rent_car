-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 22, 2022 at 03:07 PM
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
  `status` int(11) NOT NULL COMMENT 'สถาณะ',
  `color` varchar(50) NOT NULL,
  `gear` varchar(50) NOT NULL,
  `door` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `car_id`, `typecar_id`, `name`, `car_img`, `price`, `status`, `color`, `gear`, `door`) VALUES
(1, '1', 1, '1', '1668441360-Screenshot2565-11-02at23.37.37.png', 100, 1, 'แดง', 'ออโต้', '4'),
(2, 'k', 1, 'o', '1668443797-Screenshot2565-11-08at03.30.30.png', 8, 2, '8', '8', '8'),
(3, 'น', 1, 'น', '1668443960-Screenshot2565-11-02at23.37.37.png', 2, 2, 'น', 'น', 'น');

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

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `name`, `Address`, `Tel`, `Email`, `rental_terms`, `car_id`, `st_date`, `en_date`, `day`, `rent_price`, `statusin`, `statusour`, `fine`, `id_card`, `st_card`, `ed_card`, `card`) VALUES
(1, 'ๅ', 'ๅ', '111', '11@f', 1, 2, '2022-11-15', '2022-11-16', 1, 8, 1, 1, 1, '', '', '', ''),
(2, 'ๅ', 'ๅ', '111', '11@f', 1, 2, '2022-11-15', '2022-11-16', 1, 8, 1, 1, 3, '', '', '', ''),
(3, '1111222', 'ๅ', '111', '11@f', 1, 2, '2022-11-15', '2022-11-08', 1, 8, 1, 1, 7, '', '', '', ''),
(4, 'ๅ', 'ๅ', '111', '11@f', 1, 2, '2022-11-15', '2022-11-16', 1, 8, 1, 1, 1, '', '', '', ''),
(5, 'ๅ', 'ๅ', '111', '11@f', 1, 2, '2022-11-15', '2022-11-16', 1, 8, 1, 1, 1, '', '', '', ''),
(6, 'ๅ', 'ๅ', '111', '11@f', 1, 2, '2022-11-15', '2022-11-15', 1, 8, 1, 1, 1, '', '', '', ''),
(7, 'ๅ', 'ๅ', '111', '11@f', 1, 2, '2022-11-15', '2022-11-16', 1, 8, 1, 0, 0, '', '', '', ''),
(8, 'บอล', 'ๅ', '111', '11@f', 1, 1, '2022-11-16', '2022-11-16', 0, 100, 1, 0, 0, '', '', '', ''),
(9, '2', '2', '2', '2@g', 1, 2, '2022-11-19', '2022-11-07', 0, 8, 1, 0, 0, '', '', '', ''),
(10, '1', '1', '1', '1@f', 1, 2, '2022-11-19', '2022-11-19', 0, 8, 1, 1, 0, '', '', '', ''),
(11, 'บอล2', 'ๅ', '111', '11@f', 1, 2, '2022-11-21', '2022-11-21', 0, 8, 0, 0, 0, '', '', '', ''),
(12, 'ปิงปอง', 'ๅ', '111', '11@f', 1, 3, '2022-11-22', '2022-11-22', 0, 2, 0, 0, 0, '', '', '', '');

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
(1, '1', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
