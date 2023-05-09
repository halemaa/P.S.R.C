-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 03, 2023 at 01:47 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 132525065, 1349683950, 'hello'),
(2, 132525065, 551428994, 'hey'),
(3, 551428994, 432830915, 'hello'),
(4, 432830915, 551428994, 'hi'),
(5, 432830915, 551428994, 'hey'),
(6, 132525065, 432830915, 'hey'),
(7, 432830915, 551428994, 'im good'),
(8, 852958726, 376963166, 'hello'),
(9, 852958726, 376963166, 'hi'),
(10, 852958726, 376963166, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 132525065, 'jacob', 'aluvanze', 'jakealuvanze@gmail.com', '65f14b15c7714e37cc2e909ee7dda19c', '1679734670corei9.jpeg', 'Offline now'),
(2, 551428994, 'rose', 'kanini', 'rose@gmail.com', '65f14b15c7714e37cc2e909ee7dda19c', '1679750765gpt.jpeg', 'Offline now'),
(5, 432830915, 'shamsa', 'dahir', 'sdahir@gmail.com', '2a9573c78282b88d12997b10c2b70b6c', '1679751640socket.jpg', 'Offline now'),
(6, 333932400, 'Jimmy', 'neutron', 'jimmy@gmail.com', '2a9573c78282b88d12997b10c2b70b6c', '1679762195socket2.jpg', 'Offline now'),
(7, 1247489680, 'Doctor', 'ME', 'doctor@gmail.com', '2a9573c78282b88d12997b10c2b70b6c', '1679765375dr.jpg', 'Offline now'),
(8, 554410531, 'halema', 'patient', 'halema@gmail.com', '2a9573c78282b88d12997b10c2b70b6c', '1679765547images (1).jpeg', 'Active now'),
(9, 852958726, 'Jillian', 'Luboyera', 'jillianluboyera.luboyera@gmail.com', 'a4fc9e7f0677f58b3f146f831a7cd1e4', '1680329594Screenshot 2023-03-03 at 12.53.28.png', 'Active now'),
(10, 376963166, 'Doctor', 'liALi', 'ali@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', '1680329988doctor.png', 'Active now'),
(11, 748973980, 'Doctor', 'Sam', 'sam@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', '1680528349doctor.png', 'Active now'),
(12, 1376429660, 'timmy', 'lucus', 'timmy@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', '1680528427Screenshot 2023-03-30 at 19.37.45.png', 'Active now'),
(13, 1400896022, 'Jeremy', 'Luke', 'jeremy@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', '1680528906Screenshot 2023-03-31 at 11.05.42.png', 'Active now'),
(14, 342227273, 'Doctor', 'Laura', 'laura@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', '1680529580doctor.png', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
