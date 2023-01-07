-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 09:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cscdocs`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar`
--

CREATE TABLE `aadhar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fhname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `postoffice` varchar(255) NOT NULL,
  `policestation` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `s_state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aadhar`
--

INSERT INTO `aadhar` (`id`, `name`, `fhname`, `email`, `phone`, `village`, `postoffice`, `policestation`, `dist`, `state`, `pin`, `city`, `s_state`) VALUES
(1, 'mizanur islam', 'mizanur islam', 'ninkor@gmail.com', '2147483647', 'tamarhat', 'srinagar', 'tamarhat', 'dhubri', 'assam', 783332, 'Dhubri', 'Assam'),
(2, 'mizanur islam', 'mizanur islam', 'ninkor@gmail.com', '0', 'jdgcdc', 'dcdcd', 'cdxcdxcdcxcds', 'dcxcdxc', 'dscdxcds', 563615, 'Dhubri', 'Assam'),
(3, 'Mizanur Islam ', 'gbfbrrvfdv', 'abcd@gmail.com', '76786', 'erfrfrf', 'rffrf', 'edw', 'rde', 'wedqed', 653478687, 'dgwisbc', 'Andhra Pradesh'),
(4, 'anarul islam', 'gbfbrrvfdv', 'abcd@gmail.com', '2147483647', 'dhuturamari', 'srinagar', 'tamarhat', 'dhubri', 'Assam', 783325, 'Dhubri', 'Assam'),
(5, 'anarul islam', 'gbfbrrvfdv', 'abcd@gmail.com', '8472971475', 'dhuturamari', 'srinagar', 'tamarhat', 'dhubri', 'Assam', 783325, 'Dhubri', 'Assam');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `id` int(255) NOT NULL,
  `servicename` varchar(255) NOT NULL,
  `doc1` varchar(255) NOT NULL,
  `doc2` varchar(255) NOT NULL,
  `doc3` varchar(255) NOT NULL,
  `doc4` varchar(255) NOT NULL,
  `doc5` varchar(255) NOT NULL,
  `doc6` varchar(255) NOT NULL,
  `doc7` varchar(255) NOT NULL,
  `doc8` varchar(255) NOT NULL,
  `doc9` varchar(255) NOT NULL,
  `doc10` varchar(255) NOT NULL,
  `doc11` varchar(255) NOT NULL,
  `doc12` varchar(255) NOT NULL,
  `doc13` varchar(255) NOT NULL,
  `doc14` varchar(255) NOT NULL,
  `doc15` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newusers`
--

CREATE TABLE `newusers` (
  `id` int(255) NOT NULL,
  `servicename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newusers`
--

INSERT INTO `newusers` (`id`, `servicename`) VALUES
(1, 'pan card'),
(2, 'Aadhar card'),
(4, 'Migration Certificate');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `doc1` varchar(255) NOT NULL,
  `doc2` varchar(255) NOT NULL,
  `doc3` varchar(255) NOT NULL,
  `doc4` varchar(255) NOT NULL,
  `doc5` varchar(255) NOT NULL,
  `doc6` varchar(255) NOT NULL,
  `doc7` varchar(255) NOT NULL,
  `doc8` varchar(255) NOT NULL,
  `doc9` varchar(255) NOT NULL,
  `doc10` varchar(255) NOT NULL,
  `doc11` varchar(255) NOT NULL,
  `doc12` varchar(255) NOT NULL,
  `doc13` varchar(255) NOT NULL,
  `doc14` varchar(255) NOT NULL,
  `doc15` varchar(255) NOT NULL,
  `timeline` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `price`, `doc1`, `doc2`, `doc3`, `doc4`, `doc5`, `doc6`, `doc7`, `doc8`, `doc9`, `doc10`, `doc11`, `doc12`, `doc13`, `doc14`, `doc15`, `timeline`, `image`) VALUES
(14, 'pan card', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../imgupload/pan-card.png'),
(17, 'Senior Citizen  Certificate', 300, 'lorem', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../imgupload/Screenshot (7).png'),
(18, 'Migration Certificate', 250, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../imgupload/about us.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'cscdocs@123', '$2y$10$PHwNrb/ZUVOWtcXBEYgaCemnkvLXPYLmMK0jTLAkE0vGvPcGjTGVi'),
(5, '6901081411', '$2y$10$wdA.8bQKOuIRv6rhXtfC8.lHsG5x5Ggu.GRVKXJkTtXByTtYVDxXC'),
(6, 'Mizanur Alrasid', '$2y$10$htBSwpcktI00YqCYshiLzOfNFMBpfbEc3.VxhIDyYTWT.8ezyVKtG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhar`
--
ALTER TABLE `aadhar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentation`
--
ALTER TABLE `documentation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newusers`
--
ALTER TABLE `newusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aadhar`
--
ALTER TABLE `aadhar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `documentation`
--
ALTER TABLE `documentation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newusers`
--
ALTER TABLE `newusers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
