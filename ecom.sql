-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 08:25 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(4) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`) VALUES
('Ad11', 'Yoon', '1234321', 'yoon@gmail.com'),
('Ad22', 'Rosella', '1234', 'rosella@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`cid` int(10) NOT NULL,
  `cname` text,
  `pw` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `shi_address` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cname`, `pw`, `email`, `phone`, `country`, `city`, `shi_address`) VALUES
(1, 'aa', '123', '', '', '', '', ''),
(2, 'Lillian', '', 'lillian@gmail.com', '0945678', 'America', 'Washiton', 'Oak Street'),
(11, 'Rose', '', 'aa@gmail.com', '12345678', 'qwertyui', 'sdfghj', 'xcvbnm,'),
(12, 'Luck', '', 'luck@gmail.com', '09458271', 'Myanmar', 'Ygn', 'StRose'),
(19, 'lily', '', 'lily@gmail.com', '0945678', 'qwe', 'qwe', 'wer'),
(20, 'aa', '', 'aa@gmail.com', '09123123123123', 'Myanmar', 'Yangon', 'Dagon'),
(21, 'Rose', '321', '', '', '', '', ''),
(22, 'Rose', '', 'rose@gmail.com', '0987655', 'Myanmar', 'Ygn', 'St40, No224'),
(24, 'bb', '', 'bb@gmailcom', '987645', 'bb', 'bb', 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`oid` int(11) NOT NULL,
  `cid` int(10) NOT NULL,
  `cname` text NOT NULL,
  `pid` int(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `payment` int(10) NOT NULL,
  `card_name` varchar(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oid`, `cid`, `cname`, `pid`, `id`, `qty`, `payment`, `card_name`, `order_date`) VALUES
(1, 1, 'aa', 13, 'Ad11', 3, 110, 'Lucky', '2020-06-26'),
(2, 1, 'aa', 44, 'Ad11', 2, 62, 'aa', '2020-06-27'),
(5, 1, 'aa', 25, 'Ad11', 1, 35, 'bb', '2020-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `card_name` varchar(15) NOT NULL,
  `paycard_id` text NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`card_name`, `paycard_id`, `email`) VALUES
('aa', '1231 1231 1231 1231', 'aa@gmail.com'),
('bb', '4321', 'aa@gmail.com'),
('Lily ', '3456-0987-7890-4321', 'lily@gmail.com'),
('Lucky', '1234-0987-5678-2345', 'luck@gmail.com'),
('Rose', '12345', 'aa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `price` double(10,0) NOT NULL,
  `instock` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `category`, `price`, `instock`, `image`) VALUES
(1, 'Clay Cezve', 'Earthenware', 29, 10, 'cezve3.jpg'),
(2, 'Small Cezve', 'Earthenware', 20, 10, 'cezve4.jpg'),
(3, 'Cup and Saucer', 'Earthenware', 26, 20, 'cup and saucer.jpg'),
(4, 'Plate', 'Earthenware', 15, 30, 'dish.jpg'),
(5, 'Dried Flower Vase', 'Earthenware', 38, 10, 'dflower vase.jpg'),
(6, 'Flower Vase', 'Earthenware', 38, 10, 'flower vase.jpg'),
(7, 'Pot', 'Earthenware', 32, 12, 'pot5.jpg'),
(8, 'Sugar Pot', 'Earthenware', 39, 16, 'pot6.jpg'),
(9, 'Sugar Bowl', 'Earthenware', 39, 22, 'suger bowl.jpg'),
(10, 'Small Cup', 'Earthenware', 19, 28, 'cup.jpg'),
(11, 'Painted Pot Set', 'Earthenware', 47, 14, 'pot2.jpg'),
(12, 'Medium Pot', 'Earthenware', 37, 32, 'pot8.jpg'),
(13, 'Mug', 'Earthenware', 20, 35, 'mug.jpg'),
(14, 'Small Flower Vase', 'Earthenware', 49, 30, 'evase.jpg'),
(15, 'Flower Pattern Jar', 'Earthenware', 38, 30, 'jar.jpg'),
(16, 'Bowl Set', 'Stoneware', 20, 30, 'sbowl.JPG'),
(17, 'Bowls Black Set', 'Stoneware', 18, 25, 'sbowls set of 4.jpg'),
(18, 'Bowls', 'Stoneware', 15, 17, 'bowls.jpg'),
(19, 'Cups and Saucer', 'Stoneware', 22, 18, 'scands.jpg'),
(20, 'Dinner Plates Set', 'Stoneware', 40, 30, 'dps.jpg'),
(21, 'Fluted Forest Teapot', 'Stoneware', 20, 20, 'sfft.jpg'),
(22, 'Jar with Bamboo Lit', 'Stoneware', 25, 20, 'sjwbl.jpg'),
(23, 'Mojave Glaze Black Mug', 'Stoneware', 18, 18, 'sgm.jpg'),
(24, 'Half dip blue Teapot', 'Stoneware', 30, 10, 'st.jpg'),
(25, 'Mug Set', 'Stoneware', 35, 30, 'sms4.jpg'),
(26, 'Sugar Bowl', 'Stoneware', 19, 20, 'ssb.jpg'),
(27, 'Mug', 'Stoneware', 19, 20, 'smug.jpg'),
(28, 'Round Vase', 'Stoneware', 18, 25, 'srv.jpg'),
(29, 'Plate and Bowl Set', 'Stoneware', 35, 20, 'spb.jpg'),
(30, 'Speckled Planter Bowl', 'Stoneware', 25, 30, 'ssp.jpg'),
(31, 'Flower Vase Set', 'Porcelian', 60, 20, '1.jpg'),
(32, 'Azalea Mugs Set', 'Porcelian', 36, 20, 'azalea mugs.jpg'),
(33, 'Black Dinnerware Set', 'Porcelian', 40, 20, 'black dinnerware.jpg'),
(34, 'Ceremic Vase', 'Porcelian', 57, 15, 'cv.jpg'),
(35, 'Container Pot', 'Porcelian', 21, 16, 'cp.jpg'),
(36, 'Coffee Cup Set', 'Porcelian', 50, 21, 'ccs.jpg'),
(37, 'Dinnerware Set', 'Porcelian', 50, 21, 'ds.jpg'),
(38, 'Funny Vase Set', 'Porcelian', 45, 23, 'fv.jpg'),
(39, 'Garden Grove Set', 'Porcelian', 69, 20, 'ggs.jpg'),
(40, 'Luxury turkish cup ', 'Porcelian', 49, 19, 'ltc.jpg'),
(41, 'Flower Mugs Set', 'Porcelian', 35, 17, 'mug1.jpg'),
(42, 'Face Bowls Set', 'Porcelian', 50, 21, 'fb.jpg'),
(43, 'Royal Porcelian Set', 'Porcelian', 59, 8, 'rpt.jpg'),
(44, 'Mortar & Pestle', 'Porcelian', 31, 23, 'ps.jpg'),
(45, 'Soup Bowl', 'Porcelian', 33, 24, 'sb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`oid`), ADD KEY `cid` (`cid`), ADD KEY `pid` (`pid`), ADD KEY `id` (`id`), ADD KEY `payment` (`payment`), ADD KEY `card_name` (`card_name`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`card_name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`),
ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`id`) REFERENCES `admin` (`id`),
ADD CONSTRAINT `order_ibfk_5` FOREIGN KEY (`card_name`) REFERENCES `payment` (`card_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
