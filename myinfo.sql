-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2025 at 02:18 PM
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
-- Database: `myinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_tbl`
--

CREATE TABLE `info_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_tbl`
--

INSERT INTO `info_tbl` (`id`, `name`, `address`, `email_address`, `section`, `contact`) VALUES
(8, 'timo', 'balagbag', 'timo@gmail.com', 'inf 231', '09203486455'),
(9, 'jhiro', 'halang', 'jhiroramir@gmail.com', 'inf 231', '09151046166'),
(10, 'jastin', 'lipa', 'jastin@gmail.com', 'inf 231', '09645147788'),
(11, 'benedict', 'lipa', 'benedict@gmail.com', 'inf 231', '09653845990');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_tbl`
--
ALTER TABLE `info_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_tbl`
--
ALTER TABLE `info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
