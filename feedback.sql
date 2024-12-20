-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 11:09 PM
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(6) UNSIGNED NOT NULL,
  `experience` varchar(50) NOT NULL,
  `website_navigation` int(6) DEFAULT 0,
  `website_design` int(6) DEFAULT 0,
  `user_interface` int(6) DEFAULT 0,
  `information_availability` int(6) DEFAULT 0,
  `booking_process` int(6) DEFAULT 0,
  `payment_gateway` int(6) DEFAULT 0,
  `website_performance` int(6) DEFAULT 0,
  `event_discovery` int(6) DEFAULT 0,
  `search_function` int(6) DEFAULT 0,
  `accessibility_features` int(6) DEFAULT 0,
  `help_resources` int(6) DEFAULT 0,
  `clear_instructions` int(6) DEFAULT 0,
  `website_navigation_issues` int(6) DEFAULT 0,
  `broken_links` int(6) DEFAULT 0,
  `slow_page_load` int(6) DEFAULT 0,
  `poor_mobile_experience` int(6) DEFAULT 0,
  `difficult_booking` int(6) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `experience`, `website_navigation`, `website_design`, `user_interface`, `information_availability`, `booking_process`, `payment_gateway`, `website_performance`, `event_discovery`, `search_function`, `accessibility_features`, `help_resources`, `clear_instructions`, `website_navigation_issues`, `broken_links`, `slow_page_load`, `poor_mobile_experience`, `difficult_booking`) VALUES
(1, 'Excellent', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Very good', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(3, 'Bad', 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1),
(4, 'Good', 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1),
(5, 'OK', 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1),
(6, 'Excellent', 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1),
(7, 'Very good', 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
