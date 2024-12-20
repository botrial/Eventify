-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 10:29 PM
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
-- Table structure for table `event_bookings`
--

CREATE TABLE `event_bookings` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_bookings`
--

INSERT INTO `event_bookings` (`id`, `event_name`, `person_name`, `email`, `booking_date`) VALUES
(1, 'star', 'Adam ', 's123434@student.squ.edu.om', '2024-12-20 21:21:23'),
(2, 'Literary fair', 'Ali', 's1234323@student.squ.edu.om', '2024-12-20 21:26:14'),
(3, 'Cine Arda', 'Mohammed', 'Mohammed@student.squ.edu.om', '2024-12-20 21:26:48'),
(4, 'ASTROFEST', 'Salim', 'Salim@student.squ.edu.om', '2024-12-20 21:27:40'),
(5, 'Summer Event', 'Saud', 'Saud@student.squ.edu.om', '2024-12-20 21:28:11'),
(6, 'Engaging possibilities', 'Ammar', 'Ammar@student.squ.edu.om', '2024-12-20 21:28:38'),
(7, 'Artificial Intelligence and future work', 'Abdullah', 'Abdullah@student.squ.edu.om', '2024-12-20 21:29:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_bookings`
--
ALTER TABLE `event_bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_bookings`
--
ALTER TABLE `event_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
