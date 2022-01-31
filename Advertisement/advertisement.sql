-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 07:50 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advertisement`
--

-- --------------------------------------------------------

--
-- Table structure for table `filesupload`
--

CREATE TABLE `filesupload` (
  `fileid` int(11) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `filetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filesupload`
--

INSERT INTO `filesupload` (`fileid`, `filename`, `filetime`) VALUES
(13, '22-07-2020.png', 1595439786),
(14, '22-07-20202.png', 1595439786),
(15, '22-07-20203.png', 1595439786);

-- --------------------------------------------------------

--
-- Table structure for table `ntext`
--

CREATE TABLE `ntext` (
  `id` int(11) NOT NULL,
  `scrolltext` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crid` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ntext`
--

INSERT INTO `ntext` (`id`, `scrolltext`, `crid`) VALUES
(1, 'Your advertisement notice here', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filesupload`
--
ALTER TABLE `filesupload`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `ntext`
--
ALTER TABLE `ntext`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filesupload`
--
ALTER TABLE `filesupload`
  MODIFY `fileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ntext`
--
ALTER TABLE `ntext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
