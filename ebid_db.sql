-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 08:45 AM
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
-- Database: `ebid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--
CREATE DATABASE ebid_bd;
USE ebid_bd;
CREATE TABLE `auction` (
  `auction _id` varchar(8) NOT NULL,
  `start-time` date NOT NULL,
  `end_time` date NOT NULL,
  `discription` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` varchar(8) NOT NULL,
  `item_name` varchar(128) NOT NULL,
  `decription` varchar(224) NOT NULL,
  `price` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(224) NOT NULL,
  `passwords` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `passwords`) VALUES
(10, 'Muhammad Shahzaib', 'shahzaibrana10036@gmail.com', '$2y$10$zSLpeJbKapnpYVTOBPFhKOBt0mVmqw1WhVTirOXHQTzGGHaKkevuK'),
(11, 'Muhammad Shahzaib', 'shahzaibrana199036@gmail.com', '$2y$10$u6/dccJekPgrGKiIkp82Q.qRZMDcjlFCmD1p9LaHzXBRumttIa4c.'),
(12, 'Muhammad Shahzaib', 'shahzaibrana1036@gmail.com', '$2y$10$YmSirGYfpqx7nJkekCmyzu4Xrr67sWevCG3r8/vdnvdKAs4fHhHhS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
