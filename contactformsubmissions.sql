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
-- Table structure for table `contactformsubmissions`
--

CREATE TABLE `contactformsubmissions` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactformsubmissions`
--

INSERT INTO `contactformsubmissions` (`id`, `email`, `message`, `submitted_at`) VALUES
(1, 'ali11@gamil.com', 'goood', '2024-12-20 20:02:31'),
(2, 'ali11@gamil.com', 'goood', '2024-12-20 20:02:51'),
(3, 'pc@gamil.com', 'problem in calculation', '2024-12-20 20:03:31'),
(4, 'ahmed@gamil.com', 'there is a problem in searching bar. when I search in Arabic does not work ', '2024-12-20 20:05:20'),
(5, 's123456@student.squ.edu.om', 'Thank you for your services', '2024-12-20 20:58:31'),
(6, 's123498@student.squ.edu.om', 'The booking service is working well ', '2024-12-20 21:06:16'),
(7, 's123434@student.squ.edu.om', 'Could you tell me the steps for how I can book a hall?', '2024-12-20 21:07:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactformsubmissions`
--
ALTER TABLE `contactformsubmissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactformsubmissions`
--
ALTER TABLE `contactformsubmissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
