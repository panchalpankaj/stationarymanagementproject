-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 08:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datatable`
--

-- --------------------------------------------------------

--
-- Table structure for table `datatable`
--

CREATE TABLE `datatable` (
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `repass` varchar(100) COLLATE utf8_bin NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `feedback3`
--

CREATE TABLE `feedback3` (
  `id` int(10) NOT NULL,
  `name` varchar(25) COLLATE utf8_bin NOT NULL,
  `email` varchar(25) COLLATE utf8_bin NOT NULL,
  `feedback` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE `product1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL,
  `dectiption` varchar(300) COLLATE utf8_bin NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `id` int(25) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `price` int(25) NOT NULL,
  `dectiption` varchar(100) COLLATE utf8_bin NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datatable`
--
ALTER TABLE `datatable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback3`
--
ALTER TABLE `feedback3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product1`
--
ALTER TABLE `product1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datatable`
--
ALTER TABLE `datatable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback3`
--
ALTER TABLE `feedback3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product1`
--
ALTER TABLE `product1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
