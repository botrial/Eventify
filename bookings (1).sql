-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 09:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventifyme`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Sid` int(6) NOT NULL,
  `date` date NOT NULL,
  `hall` varchar(100) NOT NULL,
  `timing` varchar(25) NOT NULL,
  `duration` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `Sid`, `date`, `hall`, `timing`, `duration`) VALUES
(1, 'Adam', 142519, '2024-12-17', 'hall1', 'Morning (8:00 AM - 12:00 ', 1),
(2, 'Ahmed', 142739, '2024-12-26', 'hall2', 'Evening (4:00 PM - 8:00 P', 4),
(3, 'Mohammed', 132418, '2024-12-18', 'hall4', 'Night (8:00 PM - 12:00 AM', 3),
(4, 'Ali', 124285, '2024-12-11', 'hall3', 'Afternoon (12:00 PM - 4:0', 1),
(5, 'salim', 132265, '2024-12-20', 'hall2', 'Evening (4:00 PM - 8:00 P', 2),
(6, 'Abdullah', 122837, '2024-12-10', 'hall1', 'Night (8:00 PM - 12:00 AM', 5),
(7, 'Saud', 145364, '2024-12-31', 'hall3', 'Evening (4:00 PM - 8:00 P', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`,`Sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
