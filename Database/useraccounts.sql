-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 02:14 PM
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
-- Database: `useraccounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `password`) VALUES
(1, 'jaggu', 'm', 'janu@gmail.com', '7799646316', '35fda77331d32054ca3426086c443ba0fc0f5772'),
(2, 'ja', 'm', 'ja@gmail.com', '7799646316', '85bb31bc82b81b5ee5af60f6ef135ab1428132b4'),
(3, 'JAA', 'M', 'jaa@gmail.com', '7799646316', 'e47719a2d04fd4d58aefaa41db92744a746c2514'),
(4, 'Maddela', 'Jagadeesh', 'jagadeeshj784@gmail.com', '7799646316', '35fda77331d32054ca3426086c443ba0fc0f5772'),
(5, 'Customer', 'cust', 'customer@gmail.com', '98765543', '0cf901ff5659f901dfb6d2ae7aea373da83bfdfa'),
(6, 'Employee1', 'Emp', 'Employee1@gmail.com', '7837483743', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(7, 'custoomer1', 'cust', 'customer1@gmail.com', '98374382', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(8, 'Employee2', 'Emp', 'Employee2@gmail.com', '789789798', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(9, 'Customer2', 'cus', 'Customer2@gmail.com', '98789783', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(10, 'Customer3', 'cust', 'Customer3@gmail.com', '7785784', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(11, 'Employee3', 'emp', 'Employee3@gmail.com', '78787878', 'aaa190278f5c9446801b6faf53f5c18ce8933015'),
(12, 'Employee4', 'emp', 'Employee4@gmail.com', '897893789', '8736b20b35c4c571f7ba9161d1cec922b0797823'),
(13, 'Customer4', 'cust', 'Customer4@gmail.com', '8743847837', '2e68b630ba7353eb25d950ef34a481727a5914c1'),
(14, 'm', 'janu', 'janu@gmail.com', '77879898', 'ade7193b8b81db4f7e703b44d812ae443b9c3bca'),
(15, 'janu', 'm', 'ja@gmail.com', '7799646316', '85bb31bc82b81b5ee5af60f6ef135ab1428132b4'),
(16, 'anu', 'm', 'anu@gmail.com', '9491632259', 'fde74bb0c10fb90a6e8d90a8a889e81e3aed1152'),
(17, 'anu', 'm', 'anu123@gmail.com', '7799646316', 'fde74bb0c10fb90a6e8d90a8a889e81e3aed1152'),
(18, 'Employee6', 'emp', 'Employee6@gmail.com', '8974894793', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(19, 'Employee', 'Emp', 'Employee7@gmail.com', '9878978798', '99a2dd0d8fa45d2ebe6e48c8c024ededa3287688'),
(20, 'Customer', 'cus', 'Customer7@gmail.com', '8978676567', 'd188b6b5e23d45d30e3e4d7c1307616884bb092f'),
(21, 'Employee8', 'Emp', 'Employee8@gmail.com', '7799646316', 'aecaac0f705ada4476871c0967f7db9f4f23cb37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
