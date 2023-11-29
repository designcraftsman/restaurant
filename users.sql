-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2023 at 10:25 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservedtables`
--

CREATE TABLE `reservedtables` (
  `name` varchar(64) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `seats` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `request` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservedtables`
--

INSERT INTO `reservedtables` (`name`, `phone`, `email`, `seats`, `date`, `time`, `request`, `id`) VALUES
('fayzoussama25@gmail.com', 652976002, 'fayzoussama25@gmail.com', 4, '2022-01-02', '00:00:00', 'i want the table near the window please.', 1),
('saad35@gmail.com', 622243008, 'saad35@gmail.com', 1, '2001-01-05', '21:00:00', 'nothing, thank you !', 2),
('saad35@gmail.com', 622243008, 'saad35@gmail.com', 1, '2001-01-05', '21:00:00', 'nothing, thank you !', 3),
('saad35@gmail.com', 622243008, 'saad35@gmail.com', 1, '2001-01-05', '21:00:00', 'nothing, thank you !', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservedtables`
--
ALTER TABLE `reservedtables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservedtables`
--
ALTER TABLE `reservedtables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
