-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 01:24 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;


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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `password` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL DEFAULT 'noprofilepic.jpg',
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
  `type` varchar(20) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foster_registration`
--

INSERT INTO `foster_registration` (`id`, `username`, `password`, `photo`, `name`, `dob`, `ngo`, `sex`, `address`, `mobile`, `aadhar`, `education`, `Profession`, `Maritalstatus`, `type`, `date_added`) VALUES
(22, 'test', '5f4dcc3b5aa765d61d8327deb882cf99', '15226914211522691421baas.jpg.jpg', 'fhjhbdf', '', 'NGO', '', 'cnjfkdv', '1234567890', '', '', '', '', 'Type1 Foster', '0000-00-00'),
(23, 'test1', '5f4dcc3b5aa765d61d8327deb882cf99', 'noprofilepic.jpg', 'cv xm xh', '', 'NGO', '', 'dsdshvjds', '1234567890', '', '', '', '', 'Type2 Foster', '0000-00-00'),
(24, 'test2', '5f4dcc3b5aa765d61d8327deb882cf99', 'noprofilepic.jpg', 'fgvcfgv', '1998-03-12', 'Individual', 'Male', 'dvs dfsybv', '1234567890', '12434345', 'nb fbhvd', 'f bhb d f', 'Married', 'Type2 Foster', '0000-00-00'),
(25, 'mak1', '5f7cb5e497cbb93e99f86ea5b1916093', 'noprofilepic.jpg', 'Makarand', '1987-03-17', 'Individual', 'Male', 'purvarrranmbha ap', '9766072987', '', 'pos graduaion', 'pracice', 'Married', 'Type1 Foster', '0000-00-00'),
(26, 'yashodhan', '6286c473765fb2e096d2807a0788e78e', 'noprofilepic.jpg', 'yashodhan', '1996-08-15', 'Individual', 'Male', '174, purvarambha apts.', '7875163038', '6940', 'graduation', 'engineering', '', 'Type1 Foster', '0000-00-00'),
(27, 'test4', 'dc647eb65e6711e155375218212b3964', 'noprofilepic.jpg', 'fdh', '2002-02-12', 'Individual', 'Male', 'fgbvd', '1234567890', '', 'fdg', 'dfg', 'Married', 'Type2 Foster', '2017-10-22'),
(28, 'abc', '25f9e794323b453885f5181f1b624d0b', 'noprofilepic.jpg', 'xyz', '3332-03-12', 'Individual', 'Male', 'pune', '1234567890', '987655432110', 'ba', 'bsa', 'Married', 'Type2 Foster', '2017-10-23'),
(29, 'Prajesha Naidu', '5a104faa92d8cb3e5ec2594fdfe2ee69', 'noprofilepic.jpg', 'Prajesha naidu', '1998-06-04', 'Individual', 'Female', 'Gokul vrindavan, dharampeth, Nagpur', '7397957199', '', 'Student', 'Student', 'UnMarried', 'Type2 Foster', '2017-10-26'),
(30, 'sachin p', '83dacb2b12cb011185bb924663ceddea', 'noprofilepic.jpg', 'sachin phambre', '1975-01-31', 'Individual', 'Male', 'trimurti nagar', '8805984723', '', 'BE', 'sales', 'Married', 'Type1 Foster', '2017-10-28'),
(31, 'Bs', '202cb962ac59075b964b07152d234b70', 'noprofilepic.jpg', 'Bs', '', 'NGO', '', 'Bbb', '8888888888', '', '', '', '', 'Type1 Foster', '2017-11-05'),
(32, 'Rohit Yadav', '19698e95d827315599a5efc2cbcba590', '1510670497151067049720170917042911_IMG_7987.JPG.jpg', 'Rohit Yadav', '', 'NGO', '', 'kanhan, (khadan) inder colliery no 6 near in nirankari bhawan', '7776965776', '', '', '', '', 'Type1 Foster', '2017-11-14'),
(33, 'Pratish', 'c1dbbf73ed36d6fc24502d9b8e32030d', 'noprofilepic.jpg', 'Pratish zaware', '1998-02-22', 'Individual', 'Male', 'At post Shenvai Roha Raigad', '7066935287', '', '12th pass', 'Student', 'UnMarried', '', '2018-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `city_res` varchar(50) NOT NULL,
  `ar_photo` varchar(50) NOT NULL,
  `lndmrk` varchar(200) NOT NULL,
  `photo_dt` date NOT NULL,
  `image` text NOT NULL,
  `upldtime` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE `lost` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `breed` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `image` text NOT NULL,
  `upldtime` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `command_resp` text NOT NULL,
  `collar_clr` varchar(20) NOT NULL,
  `id_mrks` varchar(50) NOT NULL,
  `prize` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`id`, `name`, `breed`, `age`, `sex`, `image`, `upldtime`, `colour`, `command_resp`, `collar_clr`, `id_mrks`, `prize`) VALUES
(1, 'DUGGU', 'LABRADOR', 6, 'Male', '15136265071513626507duggu.jpg.jpg', '2017-12-19', 'FAWN', 'DUGGU', 'NO COLLAR AT THE TIM', 'DRY HAIR', '10000'),
(2, 'piluu', 'milk', 2, 'Male', '15225214991522521499ba1.jpg.jpg', '2018-04-01', 'pink', 'pilluu', 'black', 'belt', '1000'),
(3, 'rty', 'milk', 2, 'Male', '15226510661522651066IMG-20180330-WA0019.jpg.jpg', '2018-04-02', 'pink', 'uube', 'gry', 'belt', '1200');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `potential_adopter`
--

CREATE TABLE `potential_adopter` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `Preference` text NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potential_adopter`
--

INSERT INTO `potential_adopter` (`id`, `name`, `address`, `email_id`, `mobile`, `Preference`, `date`, `status`) VALUES
(1, 'dfhiydf', 'dgsv fdybv', 'dsbds@gmail.com', '1234567890', 'dbsyf dfh', '2017-10-20', 1);

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `puppyadoption`
--

CREATE TABLE `puppyadoption` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `breed` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `foster_id` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `transaction_id` varchar(80) NOT NULL,
  `image` text NOT NULL,
  `upldtime` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puppyadoption`
--

INSERT INTO `puppyadoption` (`id`, `name`, `breed`, `age`, `foster_id`, `sex`, `transaction_id`, `image`, `upldtime`, `status`) VALUES
(2, 'gems', '', 2, '30', 'Male', 'a', '15091712271509171227gems.jpg.jpg', '2017-10-28', 3),
(3, 'rinku', 'bread', 2, '22', 'Male', 'sfghjkl345678', '15226507141522650714IMG-20180330-WA0019.jpg.jpg', '2018-04-02', 0),
(4, 'rty', 'ghj', 2, '22', 'Male', '3456789nm,l', '15226507561522650756IMG-20180330-WA0019.jpg.jpg', '2018-04-02', 0),
(5, '2345678', '234567', 2, '22', 'Male', 'qawsedrty23', '15226913351522691335adoption.jpg.jpg', '2018-04-02', 0),
(6, '12345678', '3456', 2, '22', 'Male', 'wertyui2345', '15226915451522691545adoption.jpg.jpg', '2018-04-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(58, 'ghthtgr', '1234567890', '2017-10-04', '9AM-10AM', 'gtbht htyht'),
(59, 'Ankit Gangrade', '8999557246', '2018-01-02', '6PM-7PM', 'demo entry for testing'),
(60, 'xyz', '2345678555', '2018-03-24', '9AM-10AM', 'pet'),
(61, 'Dgff123', '2455612331', '2018-12-30', '8AM-9AM', 'fnvb'),
(62, 'adkdfk123', '1212332125', '2018-12-30', '9AM-10AM', 'fbcvxb'),
(63, 'pooja', '9922879579', '2018-03-29', '9AM-10AM', 'fgfhgh'),
(64, 'fdfghfhj', '4561237894', '2018-03-29', '9AM-10AM', 'bfhgjkhjjkh'),
(65, 'ghnbnnhnh', '1236547895', '2018-03-29', '9AM-10AM', 'nbghnghjghfg'),
(66, 'ccvc', '7894561230', '2018-04-01', '8AM-9AM', 'dsf'),
(67, 'tyhij', '6545489451', '2018-04-30', '8PM-9PM', 'gfgu'),
(68, 'kjhghgdf', '7894561238', '2018-05-04', '6PM-7PM', 'rtytuiop');

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
-- Indexes for table `found`
--
ALTER TABLE `found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost`
--
ALTER TABLE `lost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potential_adopter`
--
ALTER TABLE `potential_adopter`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lost`
--
ALTER TABLE `lost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potential_adopter`
--
ALTER TABLE `potential_adopter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visiter`
--
ALTER TABLE `visiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
