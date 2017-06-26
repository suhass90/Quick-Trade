-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2016 at 12:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quicktrade`
--
CREATE DATABASE IF NOT EXISTS `quicktrade` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quicktrade`;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
`Ad_Id` int(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `User_Id` int(100) NOT NULL,
  `Cat_id` int(100) NOT NULL,
  `Photo_id` int(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Post_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=402 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`Ad_Id`, `Title`, `User_Id`, `Cat_id`, `Photo_id`, `Description`, `Post_date`, `Status`) VALUES
(123, 'Imphala', 1, 1, 1, 'A worth for money car which has everything in it which makes it part of your parking lot.', '2016-10-09 00:00:00', 'Clean'),
(124, 'Camry', 2, 1, 2, 'A very good car with nice leather seats and smooth transmission.', '2016-10-12 00:00:00', 'Clean'),
(125, 'Altima', 6, 1, 3, 'A recently bought car well maintained. In good condition.', '2016-11-09 00:00:00', 'Active'),
(200, 'Cute cat Kitty', 6, 2, 4, 'It is snowwhite persian Cat, really friendly!!', '2016-10-18 00:00:00', 'Active'),
(210, 'A pug', 2, 2, 5, 'A lovely dog pug. Name Hutch. Doesn''t bite.', '2016-10-15 00:00:00', 'Active'),
(220, 'Labrador k-9 trained', 2, 2, 6, 'Disciplined Labrador that doesn''t let anyone hurt their owner.', '2016-10-05 00:00:00', 'Active'),
(300, 'Samsung phone', 1, 3, 7, 'Its a samsung galaxy S7 phone. Well maintained.', '2016-10-05 00:00:00', 'Active'),
(310, 'Apple Iphone 6', 6, 3, 8, 'Iphone 6 good as new. No scratches on the display.', '2016-10-19 00:00:00', 'Active'),
(400, 'Dell 3210 ', 1, 4, 9, 'A well maintained laptop with good battery.', '2016-10-18 00:00:00', 'Active'),
(401, 'Lhasaapso Dog', 7, 2, 10, 'Gets along well, not at all harmful.', '2016-11-02 19:23:42', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `Reg_no` int(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Ad_id` int(100) NOT NULL,
  `Odometer` int(100) NOT NULL,
  `Price` int(100) unsigned NOT NULL,
  `FuelType` varchar(100) NOT NULL,
  `Year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Reg_no`, `Model`, `Ad_id`, `Odometer`, `Price`, `FuelType`, `Year`) VALUES
(47457, 'Imphala', 123, 213000, 3000, 'Gasoline', 2006),
(57557, 'Camry', 124, 120000, 4000, 'Petrol', 2003),
(67566, 'Altima', 125, 104000, 8000, 'Petrol', 2011);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `Cat_id` int(11) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_id`, `Category`, `Description`) VALUES
(1, 'Cars', 'Cars for sale!'),
(2, 'pets', 'Own a pet today!'),
(3, 'Mobile', 'Get yourself a phone!'),
(4, 'Laptop', 'Buy a laptop.');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_laptop`
--

DROP TABLE IF EXISTS `mobile_laptop`;
CREATE TABLE IF NOT EXISTS `mobile_laptop` (
`Product_id` int(100) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `Ad_id` int(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Year` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9991 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_laptop`
--

INSERT INTO `mobile_laptop` (`Product_id`, `Product`, `Ad_id`, `Brand`, `Price`, `Year`) VALUES
(8770, 'Mobile', 310, 'Apple', 5000, 2016),
(8990, 'Mobile', 300, 'Samsung', 350, 2015),
(9990, 'Laptop', 400, 'Dell', 200, 2010);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

DROP TABLE IF EXISTS `pets`;
CREATE TABLE IF NOT EXISTS `pets` (
`Pet_id` int(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Ad_id` int(100) NOT NULL,
  `Age` int(100) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2888 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`Pet_id`, `Type`, `Ad_id`, `Age`, `Price`) VALUES
(1890, 'cat', 200, 5, 550),
(2560, 'Dog', 210, 1, 295),
(2878, 'Dog', 220, 6, 650),
(2887, 'Lhasaapso', 401, 24, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
`Photo_id` int(100) NOT NULL,
  `Primary_photo` varchar(100) NOT NULL,
  `Sec_photo1` varchar(100) DEFAULT NULL,
  `Sec_photo2` varchar(100) DEFAULT NULL,
  `Sec_photo3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`Photo_id`, `Primary_photo`, `Sec_photo1`, `Sec_photo2`, `Sec_photo3`) VALUES
(1, 'impala.jpg', NULL, NULL, NULL),
(2, 'camry.jpg', NULL, NULL, NULL),
(3, 'Altima.jpg', NULL, NULL, NULL),
(4, 'pets.jpg', NULL, NULL, NULL),
(5, 'pug.jpg', NULL, NULL, NULL),
(6, 'Labrador.jpg', NULL, NULL, NULL),
(7, 'Samsung.jpg', NULL, NULL, NULL),
(8, 'Iphone.jpg', NULL, NULL, NULL),
(9, 'Dell.jpg', NULL, NULL, NULL),
(10, 'Lhasaapso.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
`User_id` int(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Activated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Zipcode` int(5) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Fname`, `Lname`, `Phone`, `Password`, `Email`, `Activated_date`, `Status`, `Address`, `Zipcode`) VALUES
(1, 'Suhas', 'Suresh', 6159168721, 'sS12345', 'suhass90@gmail.com', '2016-10-02 00:00:00', 'active', '1500 Sparkman Drive Apt 42G', 0),
(2, 'Vaidya', 'Areyur', 6159168151, 'eec67aff3b', 'vaidyanathpanagar@gmail.com', '2016-10-01 00:00:00', 'Active', 'sdsvsdg', 0),
(6, 'Kiran', 'Suresha', 6158925100, 'bd7a1543a39e5d813ed4c35c17625451', 'kiran.s.2528@gmail.com', '2016-10-29 00:00:00', 'Active', '1500 Sparkman Drive, #42G', 35816),
(7, 'Sushma', 'Suresh', 6159168722, '23009b1e7eb37bba215cf183c89d225d', 'sss01@gmail.com', '2016-10-30 00:51:30', 'Active', '1500 Sparkman Drive, #42G', 35816),
(9, 'Subin', 'Lazar', 6158925101, 'e10adc3949ba59abbe56e057f20f883e', 'subincool16@gmail.com', '2016-10-30 00:52:00', 'Active', '1500 Sparkman Drive, #42G', 35816),
(10, 'Sindhuja', 'Naik', 2564178129, 'e10adc3949ba59abbe56e057f20f883e', 'sindhujauniv@gmail.com', '2016-10-31 23:26:24', 'Active', '1500 Sparkman Dr Apt 35H', 35816);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
 ADD PRIMARY KEY (`Ad_Id`), ADD KEY `User_Id` (`User_Id`), ADD KEY `Cat_id` (`Cat_id`), ADD KEY `Photo_id` (`Photo_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
 ADD PRIMARY KEY (`Reg_no`), ADD KEY `Ad_id` (`Ad_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `mobile_laptop`
--
ALTER TABLE `mobile_laptop`
 ADD PRIMARY KEY (`Product_id`), ADD KEY `Ad_id` (`Ad_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
 ADD PRIMARY KEY (`Pet_id`), ADD KEY `Ad_id` (`Ad_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
 ADD PRIMARY KEY (`Photo_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
MODIFY `Ad_Id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=402;
--
-- AUTO_INCREMENT for table `mobile_laptop`
--
ALTER TABLE `mobile_laptop`
MODIFY `Product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9991;
--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
MODIFY `Pet_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2888;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
MODIFY `Photo_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `User_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
ADD CONSTRAINT `advertisement_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `advertisement_ibfk_2` FOREIGN KEY (`Cat_id`) REFERENCES `category` (`Cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `advertisement_ibfk_3` FOREIGN KEY (`Photo_id`) REFERENCES `photo` (`Photo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`Ad_id`) REFERENCES `advertisement` (`Ad_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobile_laptop`
--
ALTER TABLE `mobile_laptop`
ADD CONSTRAINT `mobile_laptop_ibfk_1` FOREIGN KEY (`Ad_id`) REFERENCES `advertisement` (`Ad_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`Ad_id`) REFERENCES `advertisement` (`Ad_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
