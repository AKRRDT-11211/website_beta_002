-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 08:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `date_of_birth` date NOT NULL,
  `genders` varchar(50) NOT NULL,
  `contact_number` bigint(15) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `home_state` varchar(50) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `current_address` varchar(255) NOT NULL,
  `pin_code` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `first_name`, `second_name`, `user_name`, `password`, `age`, `date_of_birth`, `genders`, `contact_number`, `e_mail`, `country`, `home_state`, `residential_address`, `current_address`, `pin_code`) VALUES
(1, 'Ranojoy', 'Barua', 'Joy_98', 'qwerty12345', 20, '1998-01-28', 'male', 8337037467, 'baruaranojoy@gmail.com', 'India', 'West Bengal', 'howrah, santragachi', 'howrah, santragachi', 711112),
(2, 'Rajdeep', 'Maity', 'raju12', 'qwerty1234', 20, '1995-02-04', 'Male', 8337046452, 'raju@gmail.com', 'India', 'bihar', 'amtala								', 'jam tala   \r\n								', 700002),
(3, 'Tarang', 'Barua', 'tarang', 'd8578edf8458ce06fbc5bb76a58c5ca4', 25, '2012-02-12', 'Male', 8337037462, 'tarang@gmail.com', 'India', 'W.B.', 'Kolkata								', 'Kolkata   \r\n								', 711112);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
