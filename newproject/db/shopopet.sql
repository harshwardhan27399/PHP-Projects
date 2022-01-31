-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 07:15 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopopet`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopter_registration`
--

CREATE TABLE `adopter_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `aadhar` text NOT NULL,
  `email_id` text NOT NULL,
  `mobile` text NOT NULL,
  `Preference` text NOT NULL,
  `date` text NOT NULL,
  `pet_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adopter_registration`
--

INSERT INTO `adopter_registration` (`id`, `name`, `address`, `aadhar`, `email_id`, `mobile`, `Preference`, `date`, `pet_id`) VALUES
(14, 'tdtyte', 'dgh tttdq', '1234567890', 'hfhy@gmail.com', '1234567890', 'hj, ghfht', '2017-10-12 03:50:04', 59);

-- --------------------------------------------------------

--
-- Table structure for table `clinic_content`
--

CREATE TABLE `clinic_content` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL,
  `pos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic_content`
--

INSERT INTO `clinic_content` (`id`, `info`, `pos`) VALUES
(1, 'Todayâ€™s life is busy and as a pet parent, it becomes quite difficult to manage work, family, health and pets all at the same time. Pets bring us all the joy and happiness and we know that you too feel the need to do the same to your pets. But due to time constraints, it becomes difficult and gets restricted to buying pet food, toys and treats only but the most important hygiene part is missed altogether.', 'about_head'),
(2, 'Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Today we find a lot of homeless dogs and cats on the streets who deserve a loving family. But the major concern is to find and showcase such animals to the potential adopters and bring a uniform method for the same. We are here to bridge the gap between the cute homeless fur balls and the humans with big hearts who want to enrich their lives by adopting them. We, in association with the shelters, true animal lovers etc., have created a platform where both the parties can come and find what they want. <br  />\r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â The shelters or genuine animal lovers who really want to help such animals will have to register with us. Their background will be checked thoroughly before the acceptance of the registration.  <br  />\r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â We also have options for the people who really want to help but have time and space constrains. Please get in touch with us for details. Not only this, we also endeavor to connect potential fosters with the people who have such pups who need to be fostered.<br  /> \r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â The registration is free and the fee for uploading the details of the pup for adoption will be Rs. 50 (non-refundable) for every pup.\r\n', 'about_adoption'),
(3, ' Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Todayâ€™s life is busy and as a pet parent, it becomes quite difficult to manage work, family, health and pets all at the same time. Pets bring us all the joy and happiness and we know that you too feel the need to do the same to your pets. But due to time constraints, it becomes difficult and gets restricted to buying pet food, toys and treats only but the most important hygiene part is missed altogether.<br  />\r\nÂ Â Â Â Â Â Â Â So to address this issue, we have started â€œReal Care Pet Servicesâ€ in which a trained pet handler will come to your place and offer you the diffrent services:<br />\r\nÂ Â Â Â Â Â Â Â 1.Dog walking-<br />\r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â The dog walker will come to your place and depending on the dogâ€™s breed, age, weightÂ and health, will walk the dog twice in a day for the recommended Â Â Â Â Â Â Â Â distance and time and offer food and treats on returning.<br />\r\nÂ Â Â Â Â Â Â Â Â 2.Dog Grooming-<br />\r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â The groomer will come to your place and groom your dog according to the need and your wish.<br /> \r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â This includes:<br  />\r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â a.Normal bath<br  />\r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â b.Special bath /medicated shampoo bath like anti- tick bath etc. (as directed by the vet)<br  />\r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â c.Hair clipping<br  />\r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â d.Nail clipping<br  />\r\nÂ Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â Â e.Ear cleaning <br  />\r\nÂ Â Â Â Â Â Â Â Â Â To make this even better we can design customised packages according to your requirements, You are eligible for heavy discounts on booking half yearly or Yearly packages. <br />\r\nÂ Â Â Â Â Â Â Â For details, call us on 9766072987/ 7757016988.\r\n\r\n', 'petservice');

-- --------------------------------------------------------

--
-- Table structure for table `foster_registration`
--

CREATE TABLE `foster_registration` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` text NOT NULL,
  `dob` text NOT NULL,
  `ngo` varchar(15) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `aadhar` text NOT NULL,
  `education` text NOT NULL,
  `Profession` text NOT NULL,
  `Maritalstatus` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foster_registration`
--

INSERT INTO `foster_registration` (`id`, `username`, `password`, `name`, `dob`, `ngo`, `sex`, `address`, `mobile`, `aadhar`, `education`, `Profession`, `Maritalstatus`, `type`) VALUES
(22, 'test', '5f4dcc3b5aa765d61d8327deb882cf99', 'fhjhbdf', '', 'NGO', '', 'cnjfkdv', '1234567890', '', '', '', '', 'Type1 Foster');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_by` text NOT NULL,
  `order_itm` text NOT NULL,
  `order_qty` text NOT NULL,
  `order_cst` text NOT NULL,
  `order_tm` datetime NOT NULL,
  `order_nm` text NOT NULL,
  `order_address` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `landmark` text NOT NULL,
  `pin` text NOT NULL,
  `order_mob` text NOT NULL,
  `is_placed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `image` text NOT NULL,
  `dscr` text NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `upld_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `image`, `dscr`, `price`, `qty`, `upld_time`) VALUES
(3, 'apploe', 'parle1', 'prev_nt_avl.png', 'sdjsn', 12, 2, '2017-09-07 23:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `puppyadoption`
--

CREATE TABLE `puppyadoption` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `foster_id` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `transaction_id` varchar(80) NOT NULL,
  `image` text NOT NULL,
  `upldtime` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(4, 'petclinic12', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `visiter`
--

CREATE TABLE `visiter` (
  `id` int(11) NOT NULL,
  `Full_name` text NOT NULL,
  `mob_no` varchar(12) NOT NULL,
  `con_date` varchar(20) NOT NULL,
  `con_time` varchar(20) NOT NULL,
  `visit_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visiter`
--

INSERT INTO `visiter` (`id`, `Full_name`, `mob_no`, `con_date`, `con_time`, `visit_des`) VALUES
(48, 'saurabh', '8551919844', '2017-07-12', '9AM-10AM', 'dsbdshnf mnasdbjksadsdsdnmsd'),
(49, 'jgj', '4512542152', '2017-07-19', '6PM-7PM', 'gjgj'),
(50, 'guru', '7030476085', '2017-07-22', '6PM-7PM', 'my puppy having sick.its urgent to meet u'),
(51, 'mahesh', '8551919844', '2017-07-22', '8AM-9AM', 'bnsvdbnsads'),
(52, 'sp', '9422441441', '2017-07-23', '9AM-10AM', 'ssssssssss'),
(53, 'bssss', '9890901543', '2017-07-23', '6PM-7PM', 'saxczc zxc zxc'),
(54, 'nitish kalan', '9890901543', '2017-08-18', '6PM-7PM', 'puppy sick problem'),
(55, 'balaji waghmare', '8551919844', '2017-08-20', '9AM-10AM', 'dff'),
(56, 'Balaji', '7894561230', '2017-08-21', '7PM-8PM', 'dscv'),
(57, 'balaji wagh', '7894561230', '2017-08-24', '7PM-8PM', 'dfd'),
(58, 'ghthtgr', '1234567890', '2017-10-04', '9AM-10AM', 'gtbht htyht');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopter_registration`
--
ALTER TABLE `adopter_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_content`
--
ALTER TABLE `clinic_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foster_registration`
--
ALTER TABLE `foster_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puppyadoption`
--
ALTER TABLE `puppyadoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `visiter`
--
ALTER TABLE `visiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopter_registration`
--
ALTER TABLE `adopter_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `clinic_content`
--
ALTER TABLE `clinic_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `foster_registration`
--
ALTER TABLE `foster_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `puppyadoption`
--
ALTER TABLE `puppyadoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visiter`
--
ALTER TABLE `visiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
