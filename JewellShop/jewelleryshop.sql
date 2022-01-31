-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 07:14 AM
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
-- Database: `jewelleryshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `billingdetails`
--

CREATE TABLE `billingdetails` (
  `Bid` int(5) NOT NULL,
  `Bdate` varchar(12) NOT NULL,
  `custid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `prpgram` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billingdetails`
--

INSERT INTO `billingdetails` (`Bid`, `Bdate`, `custid`, `itemid`, `prpgram`, `qty`, `tprice`) VALUES
(1, '2020-09-23', 1, 1, 5600, 1, 22400),
(2, '2020-09-23', 1, 1, 5600, 1, 22400),
(3, '2020-09-23', 1, 1, 5600, 1, 22400);

-- --------------------------------------------------------

--
-- Table structure for table `bookjwellery`
--

CREATE TABLE `bookjwellery` (
  `bookid` int(11) NOT NULL,
  `Bdate` varchar(12) NOT NULL,
  `custid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `prpgram` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tprice` int(11) NOT NULL,
  `gst` int(11) NOT NULL,
  `pay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookjwellery`
--

INSERT INTO `bookjwellery` (`bookid`, `Bdate`, `custid`, `itemid`, `prpgram`, `qty`, `tprice`, `gst`, `pay`) VALUES
(1, '2020-09-24', 5, 1, 5000, 1, 20000, 0, 0),
(2, '2020-09-24', 5, 1, 5000, 4, 80000, 0, 0),
(3, '2020-09-24', 5, 1, 5000, 2, 40000, 0, 0),
(4, '2020-09-25', 6, 1, 5000, 2, 40000, 0, 0),
(5, '2020-09-25', 6, 1, 5000, 1, 20000, 0, 0),
(6, '2020-09-25', 5, 1, 5000, 2, 40000, 0, 0),
(7, '2020-09-25', 5, 1, 5000, 2, 40000, 1200, 41200),
(8, '2020-09-25', 5, 1, 5000, 2, 40000, 1200, 41200);

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `Cid` int(11) NOT NULL,
  `Cname` varchar(20) NOT NULL,
  `Caddress` varchar(50) NOT NULL,
  `Cphoneno` varchar(10) NOT NULL,
  `Cdate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`Cid`, `Cname`, `Caddress`, `Cphoneno`, `Cdate`) VALUES
(1, 'Seeta Manohar Joshi', 'Kolhaour', '9876549876', '2020-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

CREATE TABLE `employeedetails` (
  `Eid` varchar(3) NOT NULL,
  `Ename` varchar(20) NOT NULL,
  `Ephoneno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemdetails`
--

CREATE TABLE `itemdetails` (
  `Iid` int(11) NOT NULL,
  `Iweight` varchar(10) NOT NULL,
  `Itype` varchar(10) NOT NULL,
  `Icategory` varchar(10) NOT NULL,
  `Icopies` varchar(10) NOT NULL,
  `Idate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemdetails`
--

INSERT INTO `itemdetails` (`Iid`, `Iweight`, `Itype`, `Icategory`, `Icopies`, `Idate`) VALUES
(1, '4', 'gold', 'ring', '5', '2020-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `Rgold` int(10) NOT NULL,
  `Rsilver` int(10) NOT NULL,
  `Rplatinum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`Rgold`, `Rsilver`, `Rplatinum`) VALUES
(5000, 6000, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `name` varchar(50) DEFAULT NULL,
  `feedback` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`name`, `feedback`) VALUES
('Harsh', 'Good one\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `mailid` varchar(50) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `passwd` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `uname`, `mailid`, `phoneno`, `passwd`) VALUES
(4, 'Harshwardhan Raghunath Patil', 'harshwardhan27399@gmail.com', '8550925509', 'Harsh@123'),
(5, 'Harshwardhan Raghunath Patil', 'h27399@gmail.com', '8550925509', 'Harsh@111'),
(6, 'manoj ram mohan', 'mn@gmail.com', '9887788978', 'Asd@123');

-- --------------------------------------------------------

--
-- Table structure for table `supplierdetails`
--

CREATE TABLE `supplierdetails` (
  `Sid` int(11) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Saddress` varchar(50) NOT NULL,
  `Sphoneno` varchar(10) NOT NULL,
  `Sdate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplierdetails`
--

INSERT INTO `supplierdetails` (`Sid`, `Sname`, `Saddress`, `Sphoneno`, `Sdate`) VALUES
(1, 'Mohan Ramlal Joshi', 'Maduraii', '7080543522', '2020-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('Admin', 'Admin@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billingdetails`
--
ALTER TABLE `billingdetails`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `bookjwellery`
--
ALTER TABLE `bookjwellery`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `employeedetails`
--
ALTER TABLE `employeedetails`
  ADD PRIMARY KEY (`Eid`);

--
-- Indexes for table `itemdetails`
--
ALTER TABLE `itemdetails`
  ADD PRIMARY KEY (`Iid`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplierdetails`
--
ALTER TABLE `supplierdetails`
  ADD PRIMARY KEY (`Sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billingdetails`
--
ALTER TABLE `billingdetails`
  MODIFY `Bid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookjwellery`
--
ALTER TABLE `bookjwellery`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `itemdetails`
--
ALTER TABLE `itemdetails`
  MODIFY `Iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplierdetails`
--
ALTER TABLE `supplierdetails`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
