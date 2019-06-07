-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 08:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `by_user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `categories`:
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `description`, `create_at`, `update_at`, `by_user`) VALUES
(1, 'Kitchen', '                                                                                                \r\n                                                                                        ', '2019-03-06 05:56:54', '2019-03-05 05:40:28', NULL),
(2, 'Personal Care', '                                                \r\n                                            ', '2019-03-06 05:56:37', '2019-03-06 05:56:37', NULL),
(3, 'Household', '                                                \r\n                                            ', '2019-03-06 05:57:09', '2019-03-06 05:57:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `customers`:
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `total` decimal(12,2) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `orders`:
--   `customerid`
--       `customers` -> `customerid`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(10) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `ship_date` datetime DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `order_details`:
--   `productid`
--       `products` -> `productID`
--   `order_id`
--       `orders` -> `order_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `by_user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `products`:
--   `categoryID`
--       `categories` -> `categoryID`
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `categoryID`, `price`, `description`, `image`, `create_at`, `update_at`, `by_user`) VALUES
(1, 'Moong (1kg)', 1, '1.00', '       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with de', 'of.png', '2019-03-07 03:40:15', '0000-00-00 00:00:00', NULL),
(2, 'Sunflower Oil (5kg)', 1, '9.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with de       ', 'of1.png', '2019-03-08 04:34:14', '0000-00-00 00:00:00', NULL),
(3, 'Kabuli Chana(1kg)', 1, '2.00', '                                                \r\n                                            ', 'of2.png', '2019-03-05 08:40:00', '0000-00-00 00:00:00', NULL),
(4, 'Soya Chunks(1kg)', 1, '3.50', '                                                \r\n                                            ', 'of3.png', '2019-03-05 08:42:45', '0000-00-00 00:00:00', NULL),
(5, 'Lays(100 g)', 1, '0.70', '                                                \r\n                                            ', 'of4.png', '2019-03-05 08:45:05', '0000-00-00 00:00:00', NULL),
(6, 'Kurkure(100g)', 1, '0.70', '                                                \r\n                                            ', 'of5.png', '2019-03-05 08:45:32', '0000-00-00 00:00:00', NULL),
(7, 'Popcorn(250 g)', 1, '1.00', '                                                \r\n                                            ', 'of6.png', '2019-03-05 08:46:00', '0000-00-00 00:00:00', NULL),
(8, 'Nuts(250 g)', 1, '3.50', '                                                \r\n                                            ', 'of7.png', '2019-03-05 08:46:23', '0000-00-00 00:00:00', NULL),
(9, 'Banana(6 pcs)', 1, '1.50', '                                                \r\n                                            ', 'of8.png', '2019-03-05 08:51:32', '0000-00-00 00:00:00', NULL),
(10, 'Onion (1 kg)', 1, '0.70', '                                                \r\n                                            ', 'of9.png', '2019-03-05 08:51:58', '0000-00-00 00:00:00', NULL),
(11, 'Bitter Gourd (1kg)', 1, '1.00', '                                                \r\n                                            ', 'of10.png', '2019-03-05 08:52:26', '0000-00-00 00:00:00', NULL),
(12, 'Apples(1 kg)', 1, '3.50', '                                                \r\n                                            ', 'of11.png', '2019-03-05 08:52:54', '0000-00-00 00:00:00', NULL),
(13, 'Honey(500 g)', 1, '6.00', '                                                \r\n                                            ', 'of12.png', '2019-03-05 08:53:27', '0000-00-00 00:00:00', NULL),
(14, 'Chocos(250 g)', 1, '4.50', '                                                \r\n                                            ', 'of13.png', '2019-03-05 08:53:56', '0000-00-00 00:00:00', NULL),
(15, 'Oats(1 kg)', 1, '3.50', '                                                \r\n                                            ', 'of14.png', '2019-03-05 08:54:18', '0000-00-00 00:00:00', NULL),
(16, 'Bread(500 g)', 1, '0.80', '                                                \r\n                                            ', 'of15.png', '2019-03-05 08:54:51', '0000-00-00 00:00:00', NULL),
(17, 'Baby Oil(250 g)', 2, '6.00', '                                                \r\n                                            ', 'of36.png', '2019-03-06 05:59:32', '0000-00-00 00:00:00', NULL),
(18, 'Soap(250 g)', 2, '4.50', '                                                \r\n                                            ', 'of37.png', '2019-03-06 06:00:04', '0000-00-00 00:00:00', NULL),
(19, 'Hair Gel(100 g)', 2, '3.50', '                                                \r\n                                            ', 'of38.png', '2019-03-06 06:00:38', '0000-00-00 00:00:00', NULL),
(20, 'Lotion(100 g)', 2, '0.80', '                                                \r\n                                            ', 'of39.png', '2019-03-06 06:01:12', '0000-00-00 00:00:00', NULL),
(21, 'Shower Gel(250 g)', 2, '6.00', '                                                \r\n                                            ', 'of40.png', '2019-03-06 06:01:46', '0000-00-00 00:00:00', NULL),
(22, 'Hair Color(250 g)', 2, '4.50', '                                                \r\n                                            ', 'of41.png', '2019-03-06 06:02:22', '0000-00-00 00:00:00', NULL),
(23, 'Wipes(300 g)', 2, '3.50', '                                                \r\n                                            ', 'of42.png', '2019-03-06 06:03:06', '0000-00-00 00:00:00', NULL),
(24, 'Essential Oils(200 g)', 2, '0.80', '                                                \r\n                                            ', 'of43.png', '2019-03-06 06:03:42', '0000-00-00 00:00:00', NULL),
(25, 'Cream(150 g)', 2, '6.00', '                                                \r\n                                            ', 'of44.png', '2019-03-06 06:04:35', '0000-00-00 00:00:00', NULL),
(26, 'Hair Color(250 g)', 2, '4.50', '                                                \r\n                                            ', 'of45.png', '2019-03-06 06:05:34', '0000-00-00 00:00:00', NULL),
(27, 'Baby Care(1 kg)', 2, '3.50', '                                                \r\n                                            ', 'of46.png', '2019-03-06 06:06:04', '0000-00-00 00:00:00', NULL),
(28, 'Lotion(100 g)', 2, '0.80', '                                                \r\n                                            ', 'of47.png', '2019-03-06 06:06:35', '0000-00-00 00:00:00', NULL),
(29, 'Cat Food(500 g)', 3, '6.00', '                                                \r\n                                            ', 'of48.png', '2019-03-06 06:07:35', '0000-00-00 00:00:00', NULL),
(30, 'Safety Pins(100 g)', 3, '4.50', '                                                \r\n                                            ', 'of49.png', '2019-03-06 06:08:02', '0000-00-00 00:00:00', NULL),
(31, 'Agarbatti(200 g)', 3, '3.50', '                                                \r\n                                            ', 'of50.png', '2019-03-06 06:08:30', '0000-00-00 00:00:00', NULL),
(32, 'Candle Set(1 pc)', 3, '0.80', '                                                \r\n                                            ', 'of51.png', '2019-03-06 06:09:00', '0000-00-00 00:00:00', NULL),
(33, 'Dust Bin(1 pc)', 3, '6.00', '                                                \r\n                                            ', 'of52.png', '2019-03-06 06:09:24', '0000-00-00 00:00:00', NULL),
(34, 'Hanger(1 pc)', 3, '4.50', '                                                \r\n                                            ', 'of53.png', '2019-03-06 06:09:52', '0000-00-00 00:00:00', NULL),
(35, 'Pet Bowl(1 pc)', 3, '3.50', '                                                \r\n                                            ', 'of54.png', '2019-03-06 06:10:18', '0000-00-00 00:00:00', NULL),
(36, 'Tailum(500 g)', 3, '0.80', '                                                \r\n                                            ', 'of55.png', '2019-03-06 06:10:47', '0000-00-00 00:00:00', NULL),
(37, 'Container(1 pc)', 3, '6.00', '                                                \r\n                                            ', 'of56.png', '2019-03-06 06:11:12', '0000-00-00 00:00:00', NULL),
(38, 'Scrub Sponge(100 g)', 3, '4.50', '                                                \r\n                                            ', 'of57.png', '2019-03-06 06:11:44', '0000-00-00 00:00:00', NULL),
(39, 'Reindeer(1 pc)', 3, '3.50', '                                                \r\n                                            ', 'of58.png', '2019-03-06 06:12:19', '0000-00-00 00:00:00', NULL),
(40, 'Cleaner(1 pc)', 3, '0.80', '                                                \r\n                                            ', 'of59.png', '2019-03-06 06:12:46', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`,`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `productid` (`productid`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `products` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
