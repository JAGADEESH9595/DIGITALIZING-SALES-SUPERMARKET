-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 02:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermarket_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Allahabad'),
(2, 'Varanasi');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_customer_name` varchar(255) NOT NULL,
  `order_customer_mobile` varchar(255) NOT NULL,
  `order_total` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_customer_name`, `order_customer_mobile`, `order_total`, `order_status`, `order_date`) VALUES
(3, 'Kaushal Kishor', '9876543212', '21.5', 'Paid', 'Tuesday 12th of February 2019 01:08:37 PM'),
(4, 'Atul Kumar', '9878675645', '76', 'Paid', 'Tuesday 12th of February 2019 02:17:32 PM'),
(5, 'Kaushal', '94385034', '44', 'Paid', 'Tuesday 12th of February 2019 02:39:35 PM'),
(9, 'Rahul Kumar', '987654323', '112.5', 'Paid', 'Tuesday 12th of February 2019 04:40:32 PM'),
(10, 'Kaushal', '8978675645', '600', 'Paid', 'Tuesday 12th of February 2019 04:47:37 PM'),
(11, 'Dolly', '8978675645', '210', 'Paid', 'Tuesday 12th of February 2019 04:50:33 PM'),
(13, 'Kaushal', '493573', '39', 'Paid', 'Tuesday 11th of June 2019 10:52:57 AM'),
(14, 'Anil', '9876543212', '348.5', 'Paid', 'Tuesday 11th of June 2019 11:42:34 AM'),
(15, 'fghjkl', 'f', '150', 'Paid', 'Monday 24th of June 2019 02:11:46 PM'),
(16, 'Ram Kapoor', '8470010001', '330', 'Paid', 'Monday 24th of June 2019 02:22:37 PM'),
(17, 'Ram Kapoor', '8470010001', '0', 'Paid', 'Thursday 27th of June 2019 03:41:16 PM'),
(18, 'Ram Kapoor', '8470010001', '0', 'In Progress', 'Friday 28th of June 2019 09:38:26 AM'),
(19, 'Ram Kapoor', '8470010001', '330', 'Paid', 'Friday 28th of June 2019 09:41:07 AM'),
(20, 'Ram Kapoor', '8470010001', '330', 'Paid', 'Monday 8th of July 2019 05:00:53 PM'),
(21, 'JANU', '7799646316', '240', 'Paid', 'Thursday 30th of April 2020 10:54:37 AM'),
(22, 'janu', '7799646316', '605', 'Paid', 'Sunday 3rd of May 2020 07:59:55 PM'),
(23, 'thulasi', '7799646316', '0', 'In Progress', 'Wednesday 6th of May 2020 07:12:49 PM'),
(24, 'thulasi', '7799646316', '0', 'In Progress', 'Wednesday 6th of May 2020 07:14:29 PM'),
(25, 'ja', '778984444', '0', 'In Progress', 'Thursday 7th of May 2020 09:18:17 AM'),
(26, 'jaggu', '7799646316', '85', 'Paid', 'Thursday 7th of May 2020 06:23:10 PM'),
(27, 'cust', '7788575844', '260', 'Paid', 'Friday 8th of May 2020 09:41:44 PM'),
(28, 'JA', '7799646316', '1205', 'Paid', 'Saturday 9th of May 2020 08:03:39 AM'),
(29, 'jaggu', '7799646316', '170', 'Paid', 'Saturday 9th of May 2020 08:23:32 AM'),
(30, 'jaagadeesh', '7799646316', '210', 'Paid', 'Monday 11th of May 2020 09:41:12 AM'),
(31, 'ja', '778853434434', '430', 'Paid', 'Monday 11th of May 2020 09:53:23 AM'),
(32, 'janu', '78784789379', '790', 'Paid', 'Monday 11th of May 2020 10:05:31 AM'),
(33, 'ja', '8789789', '0', 'In Progress', 'Tuesday 12th of May 2020 07:34:26 AM'),
(34, 'anu', '9491632259', '80', 'Paid', 'Thursday 28th of May 2020 10:59:21 AM'),
(35, 'thulasi', '7799646316', '120', 'Paid', 'Saturday 30th of May 2020 05:11:29 PM'),
(36, 'ja', '7799646316', '50', 'Paid', 'Saturday 30th of May 2020 05:17:48 PM'),
(37, 'anu', '7799646316', '0', 'In Progress', 'Saturday 6th of June 2020 09:01:19 AM');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_type_id` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price_per_item` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_code`, `product_stock`, `product_type_id`, `product_title`, `product_price_per_item`, `product_description`) VALUES
(1, 'M10001', 79, '6', 'Good Day Biscuits', '250', 'Good Day Biscuits'),
(2, 'M10002', 23, '2', 'Gram Flour', '150', 'Gram Flour'),
(3, 'M10003', 297, '1', 'Tur Pulse', '150', 'Tur Pulse'),
(5, 'M10004', -6, '5', 'Black Paper', '80', 'Black Paper'),
(6, 'M10005', 1, '1', 'Red Rajma', '100', 'Red Rajma'),
(7, 'M10006', 9, '3', 'Sella Rice', '120', 'Sella Rice'),
(8, 'M10007', 8, '5', 'Turmeric Powder', '100', 'Turmeric Powder'),
(9, 'M10008', 8, '4', 'Tata Tea', '100', 'Tata Tea'),
(10, 'M10009', 0, '7', 'Haldiram Namkeen', '100', 'Haldiram Namkeen'),
(11, 'ap909090', 1, '6', 'chips', '10', 'Red Chips'),
(12, 'ja123', -3, '6', 'chacolate', '5', 'good one'),
(13, 'JA10011', 98, '4', 'Boost', '10', 'Boost'),
(14, '8999', 10, '6', 'chaco', '10', 'chaco'),
(15, 'JA10011', 50, '1', 'soup ', '20', 'Home Nedd'),
(16, 'JA100012', 58, '6', 'Snaks', '20', 'Red Chips'),
(17, 'JA100013', 17, '6', 'cakes', '10', 'Sweets'),
(18, 'JA10013', 50, '8', 'salt', '30', 'salt'),
(19, 'JA10004', 30, '8', 'sugar', '40', 'Home need '),
(20, 'JA!00015', 70, '6', 'gems', '5', 'gems'),
(21, 'JA110012', 82, '8', 'Rava', '40', 'Home needs'),
(22, 'JA100016', 19, '8', 'Pepper powder', '50', 'Pepper powder'),
(23, 'JA100100', 19, '8', 'Maggi', '10', 'Maggi'),
(24, 'JA1100112', 20, '8', 'Yippe', '15', 'Home need Yipe'),
(25, 'JA9955010', 40, '8', 'Vaseline', '30', 'Cocoa Glow Vaseline.');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `sell_id` int(11) NOT NULL,
  `sell_order_id` varchar(255) NOT NULL,
  `sell_product_id` varchar(255) NOT NULL,
  `sell_units` varchar(255) NOT NULL,
  `sell_price_per_unit` varchar(255) NOT NULL,
  `sell_total_cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`sell_id`, `sell_order_id`, `sell_product_id`, `sell_units`, `sell_price_per_unit`, `sell_total_cost`) VALUES
(7, '2', '1', '10', '200', '200'),
(12, '2', '2', '1', '111', '111'),
(13, '2', '1', '1', '15', '150'),
(14, '2', '2', '1', '150', '150'),
(15, '4', '1', '2', '2', '4'),
(16, '4', '2', '11', '150', '16.5'),
(17, '4', '3', '37', '150', '55.5'),
(18, '5', '1', '19', '200', '38'),
(19, '5', '2', '4', '150', '6'),
(20, '6', '3', '20', '150', '30'),
(21, '7', '1', '1', '2', '2'),
(22, '7', '', '1', '', ''),
(26, '8', '6', '1', '10', '10'),
(27, '8', '1', '1', '2', '2'),
(28, '8', '5', '1', '1', '1'),
(29, '8', '', '1', '', ''),
(30, '8', '2', '1', '1.50', '1.50'),
(34, '9', '2', '1', '1.50', '1.50'),
(35, '9', '5', '1', '1', '1'),
(36, '9', '6', '1', '10', '10'),
(37, '9', '8', '1', '100', '100'),
(38, '10', '10', '6', '100', '600'),
(40, '11', '10', '1', '100', '100'),
(41, '11', '8', '1', '100', '100'),
(42, '11', '6', '1', '10', '10'),
(43, '12', '', '1', '', ''),
(47, '12', '9', '2', '10', '20'),
(48, '12', '6', '1', '10', '10'),
(49, '13', '3', '4', '1.50', '6'),
(50, '13', '6', '3', '10', '30'),
(51, '13', '2', '2', '1.50', '3'),
(52, '14', '9', '1', '10', '10'),
(53, '14', '5', '4', '1', '4'),
(54, '14', '6', '3', '10', '30'),
(55, '14', '2', '3', '1.50', '4.5'),
(56, '14', '10', '3', '100', '300'),
(57, '15', '2', '1', '150', '150'),
(61, '16', '2', '1', '150', '150'),
(62, '16', '6', '1', '100', '100'),
(63, '16', '5', '1', '80', '80'),
(64, '19', '5', '1', '80', '80'),
(65, '19', '1', '1', '250', '250'),
(66, '20', '5', '1', '80', '80'),
(67, '20', '1', '1', '250', '250'),
(68, '21', '5', '1', '80', '80'),
(69, '21', '11', '4', '10', '40'),
(70, '21', '7', '1', '120', '120'),
(72, '22', '12', '1', '5', '5'),
(73, '22', '2', '4', '150', '600'),
(74, '24', '13', '2', '10', '20'),
(75, '26', '5', '1', '80', '80'),
(76, '26', '12', '1', '5', '5'),
(77, '27', '13', '1', '10', '10'),
(78, '27', '9', '1', '100', '100'),
(79, '27', '2', '1', '150', '150'),
(80, '28', '3', '8', '150', '1200'),
(82, '28', '12', '1', '5', '5'),
(84, '29', '17', '5', '30', '150'),
(85, '29', '16', '1', '20', '20'),
(87, '30', '17', '7', '30', '210'),
(89, '31', '5', '5', '80', '400'),
(90, '31', '17', '1', '30', '30'),
(91, '32', '21', '16', '40', '640'),
(93, '32', '3', '1', '150', '150'),
(95, '34', '22', '1', '50', '50'),
(96, '34', '13', '1', '10', '10'),
(98, '34', '16', '1', '20', '20'),
(100, '35', '21', '1', '40', '40'),
(101, '35', '5', '1', '80', '80'),
(103, '36', '21', '1', '40', '40'),
(104, '36', '23', '1', '10', '10');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'UttarnPradesh'),
(2, 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `type_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `type_description`) VALUES
(1, 'Pulses', 'Pulses'),
(2, 'Oil', 'Oil'),
(3, 'Rice', 'Rice'),
(4, 'Tea', 'Tea'),
(5, 'Garam Masala', 'Garam Masala'),
(6, 'Biscuits', 'Biscuits'),
(7, 'Namkeen', 'Sugar'),
(8, 'Home Needs', 'Home Needs'),
(9, 'Snacks', 'Snacks'),
(10, 'Dhal', 'Dhal'),
(11, 'Shampoos', 'Shampoos'),
(12, 'Soaps', 'Soaps'),
(13, 'surf', 'surf'),
(14, 'Cool Drinks ', 'All Cool Drinks'),
(15, 'Jaggery', 'Jaggery'),
(16, 'Sugar', 'Sugar'),
(17, 'Coconut Oil', 'Hair oil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_level_id` varchar(255) NOT NULL DEFAULT '2',
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_add1` varchar(255) NOT NULL,
  `user_add2` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level_id`, `user_username`, `user_password`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_state`, `user_country`, `user_email`, `user_mobile`, `user_gender`, `user_dob`, `user_image`) VALUES
(7, '2', 'faculty', 'test', 'Amit Kumar', 'House no : 768', 'Sector 2B', '2', '1', '2', 'amit@gmail.com', '9324324546', '', '26 December,2015', 'IMG_5746.JPG'),
(8, '2', 'suman', 'test', 'Suman Singh', 'House no : 768', 'Sector 2A', '1', '2', '1', 'suman@gmail.com', '987654321', '', '13 January,1961', 'IMG_5748.jpg'),
(10, '3', 'manasa', 'test', 'Manasa', 'New Delhi', 'India', '2', '2', '1', 'manasa@gmail.com', '9876543212', '', '18 January,1968', 'IMG_5746.jpg'),
(16, '1', 'Janu', 'janu@123', 'M Janu', 'House No : 355, Sector 23', 'Sector 2A', '1', '1', '1', 'kaushal.rahuljaiswal@gmail.com', '9567654565', '', '10 March,2016', 'Image.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`sell_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `sell_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
