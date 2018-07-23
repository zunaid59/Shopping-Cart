-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 08:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandID` int(11) NOT NULL,
  `brandName` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandID`, `brandName`) VALUES
(1, 'Nokia'),
(2, 'Oppo'),
(3, 'Samsung '),
(4, 'Asus'),
(5, 'Logitech');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartID` int(11) NOT NULL,
  `sessionID` varchar(255) NOT NULL,
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,3) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`categoryID`, `categoryName`) VALUES
(12, 'Mobile'),
(13, 'Laptop'),
(14, 'Notebook'),
(15, 'Headphone');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(20) NOT NULL,
  `categoryID` int(10) NOT NULL,
  `brandID` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` tinyint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productID`, `productName`, `categoryID`, `brandID`, `description`, `price`, `image`, `type`) VALUES
(1, 'Samsung Galaxy J7 NX', 12, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 17000, '../../resource/image/3b3558b652.jpg', 0),
(2, 'Oppo A71 ', 12, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 16000, '../../resource/image/1fc7dddcce.jpg', 0),
(3, 'Nokia 6 ', 12, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 22000, '../../resource/image/7ee7b275dc.jpg', 0),
(4, 'Asus X453MA Celeron ', 13, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing eli', 44000, '../../resource/image/eb8142134f.jpg', 1),
(5, ' Logitech H110 Stere', 15, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 950, '../../resource/image/277fa7e548.jpg', 1),
(6, 'Samsung Galaxy Tab S', 14, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 32000, '../../resource/image/95a9fc0abf.jpg', 0),
(8, 'Samsung Metro 360', 12, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 3990, '../../resource/image/5b7117e7a4.jpg', 1),
(9, 'Asus X555LN Core i5 ', 13, 4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. ', 51000, '../../resource/image/902979185e.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
