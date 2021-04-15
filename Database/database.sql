-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 02:15 PM
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
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hola', 'Hello, how are you.'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is J A N U Super market'),
(4, 'what should I call you', 'You can call me J A N U Super Market'),
(5, 'Where are your from', 'I m from India'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day'),
(7, 'i need some help', 'sure tell me what you want.'),
(8, 'bye', 'bye see you again!'),
(9, 'tell me today offers', 'home need items 20% descount'),
(10, 'thank you', 'welocome');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(1, 'hi', '2020-05-26 04:24:55', 'user'),
(2, 'Hello, how are you.', '2020-05-26 04:24:55', 'bot'),
(3, 'whats your name', '2020-05-26 04:25:08', 'user'),
(4, 'My name is J A N U Super market', '2020-05-26 04:25:08', 'bot'),
(5, 'thank you', '2020-05-26 04:25:23', 'user'),
(6, 'welocome', '2020-05-26 04:25:23', 'bot'),
(7, 'ok', '2020-05-26 04:25:41', 'user'),
(8, 'Sorry not be able to understand you', '2020-05-26 04:25:41', 'bot'),
(9, 'hi', '2020-05-28 02:43:32', 'user'),
(10, 'Hello, how are you.', '2020-05-28 02:43:33', 'bot'),
(11, 'good', '2020-05-28 02:43:42', 'user'),
(12, 'Sad to see you are going. Have a nice day', '2020-05-28 02:43:42', 'bot'),
(13, 'thank you', '2020-05-28 02:43:53', 'user'),
(14, 'welocome', '2020-05-28 02:43:53', 'bot'),
(15, 'what is your name', '2020-05-28 02:44:03', 'user'),
(16, 'My name is J A N U Super market', '2020-05-28 02:44:03', 'bot'),
(17, 'oh', '2020-05-28 02:44:11', 'user'),
(18, 'Sorry not be able to understand you', '2020-05-28 02:44:11', 'bot'),
(19, 'ok', '2020-05-28 02:44:20', 'user'),
(20, 'Sorry not be able to understand you', '2020-05-28 02:44:20', 'bot'),
(21, 'hi', '2020-05-30 08:59:22', 'user'),
(22, 'Hello, how are you.', '2020-05-30 08:59:22', 'bot'),
(23, 'fine', '2020-05-30 08:59:30', 'user'),
(24, 'Sorry not be able to understand you', '2020-05-30 08:59:30', 'bot'),
(25, 'whats your name', '2020-05-30 08:59:39', 'user'),
(26, 'My name is J A N U Super market', '2020-05-30 08:59:39', 'bot'),
(27, 'where are u', '2020-05-30 08:59:49', 'user'),
(28, 'Sorry not be able to understand you', '2020-05-30 08:59:49', 'bot'),
(29, 'thank you', '2020-05-30 08:59:55', 'user'),
(30, 'welocome', '2020-05-30 08:59:55', 'bot'),
(31, 'hi', '2020-06-08 02:59:06', 'user'),
(32, 'Hello, how are you.', '2020-06-08 02:59:06', 'bot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
