-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 07:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensors`
--

-- --------------------------------------------------------

--
-- Table structure for table `sensorinfor`
--

CREATE TABLE `sensorinfor` (
  `id` int(11) NOT NULL,
  `SensorName` varchar(50) NOT NULL,
  `SensorValue` varchar(50) NOT NULL,
  `SensorStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sensorinfor`
--

INSERT INTO `sensorinfor` (`id`, `SensorName`, `SensorValue`, `SensorStatus`) VALUES
(1, '\n					Sensor 1\n				', '\n					NOK\n				', '0'),
(2, '\n					Sensor 2\n				', '\n					OK\n				', '1'),
(3, '\n					Sensor 3\n				', '\n					OK\n				', '1'),
(4, '\n					Sensor 4\n				', '\n					OK\n				', '1'),
(5, '\n					Sensor 5\n				', '\n					NOK\n				', '0'),
(6, '\n					Sensor 6\n				', '\n					OK\n				', '1'),
(7, '\n					Sensor 7\n				', '\n					NOK\n				', '0'),
(8, '\n					Sensor 8\n				', '\n					OK\n				', '1'),
(9, '\n					Sensor 9\n				', '\n					OK\n				', '1'),
(10, '\n					Sensor 10\n				', '\n					NOK\n				', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sensorinfor`
--
ALTER TABLE `sensorinfor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sensorinfor`
--
ALTER TABLE `sensorinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
