-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 03, 2023 at 01:48 PM
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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` text NOT NULL,
  `adate` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `fname`, `lname`, `email`, `phone`, `gender`, `adate`, `message`) VALUES
(1, 'jacob', 'aluvanze', 'Jakealuvanze@gmail.com', 741864664, 'male', '2023-03-24', ' yoouu'),
(2, 'valeria', 'nbbo', 'valeria@gmail.com', 768899778, 'female', '2023-04-14', ' please'),
(3, 'timmy', 'lime', 'timmy@gmail.com', 768899778, 'female', '2023-04-15', ' '),
(4, 'richard', 'done', 'richard@gmail.com', 769997787, 'male', '2023-04-25', ' chest'),
(5, 'timmy', 'lucas', 'timmy@gmail.com', 769997787, 'female', '2023-04-20', ' '),
(6, 'jeremy', 'duff', 'jeremy@gmail.com', 799779945, 'male', '2023-04-29', ' please'),
(7, 'timmy', 'bill', 'timmy@gmail.com', 789996889, 'male', '2023-04-22', ' backk');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `pain` text NOT NULL,
  `amount` text NOT NULL,
  `adate` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pain`, `amount`, `adate`, `message`) VALUES
('piriton', '3', '2023-04-07', ' '),
('piriton', '3', '2023-05-03', ' '),
('bruphen', '4', '2023-05-04', ' '),
('piriton', '3', '2023-04-07', ' '),
('bruphen', '4', '2023-04-20', ' good');

-- --------------------------------------------------------

--
-- Table structure for table `surgery`
--

CREATE TABLE `surgery` (
  `id` int(11) NOT NULL,
  `surtype` text NOT NULL,
  `caregiver` text NOT NULL,
  `adate` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surgery`
--

INSERT INTO `surgery` (`id`, `surtype`, `caregiver`, `adate`, `message`) VALUES
(3, 'EXPLORATORY LAPAROTOMY', '0', '2023-03-24', '0'),
(4, '', '0', '2023-03-17', '0'),
(5, '', 'Yes', '2023-03-25', '0'),
(6, 'PANCREAS SURGER', 'Yes', '2023-03-29', '0'),
(7, 'PLASTIC SURGERY', 'No', '2023-03-30', ' uuuuu'),
(8, 'GERD SURGERY', 'No', '2023-03-17', ' tesr'),
(9, 'BREAST SURGERY', 'Yes', '2023-02-11', ' amazinggggg'),
(10, 'GERD SURGERY', 'Yes', '2022-12-09', ' greattt'),
(11, 'PLASTIC SURGERY', 'Yes', '2023-04-14', ' '),
(12, 'LIVER SURGERY', 'Yes', '2023-03-25', ' '),
(13, 'LIVER SURGERY', 'Yes', '2023-03-10', ' '),
(14, 'COLON SURGERY', 'Yes', '2023-04-14', ' '),
(15, 'GERD SURGERY', 'No', '2023-03-10', ' gooood');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(13, 'jimm', 'jimm@gmail.com', 'f379eaf3c831b04de153469d1bec345e', 'admin'),
(17, 'kelvin', 'kevo@gmail.com', '6074c6aa3488f3c2dddff2a7ca821aab', 'admin'),
(18, 'takeshi', 'sixnine@gmail.com', '7d0710824ff191f6a0086a7e3891641e', 'user'),
(19, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(20, 'Jillian', 'jillianluboyera.luboyera@gmail.com', 'a4fc9e7f0677f58b3f146f831a7cd1e4', 'user'),
(21, 'timmy', 'timmy@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(22, 'valeria', 'valeria@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(23, 'christine', 'christine@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(24, 'jackson', 'jackson@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(25, 'rebecca', 'rebecca@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(26, 'stanley', 'stanley@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(27, 'deborah', 'deborah@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(28, 'robert', 'robert@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(29, 'mary', 'mary@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(30, 'micheal', 'micheal@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(31, 'joy', 'joy@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(32, 'monica', 'monica@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(33, 'daniel', 'daniel@gmail.om', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(34, 'richard', 'richard@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(35, 'vannessa', 'vannessa@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(36, 'jane', 'jane@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(37, 'jade', 'jade@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(38, 'greg', 'greg@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(39, 'paul', 'paul@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(40, 'peter', 'peter@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(41, 'van', 'van@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(42, 'tom', 'tom@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(43, 'lucky', 'lucky@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(44, 'ester', 'ester@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(45, 'nadine', 'nadine@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(46, 'judith', 'judith@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(47, 'gabriel', 'gabriel@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(48, 'mark', 'mark@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(49, 'luke', 'luke@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(50, 'collins', 'collins@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(51, 'jack', 'jack@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(52, 'Bobby', 'bobby@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(53, 'love', 'love@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user'),
(54, 'jeremy', 'jeremy@gmail.com', '7ce8be0fa3932e840f6a19c2b83e11ae', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surgery`
--
ALTER TABLE `surgery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surgery`
--
ALTER TABLE `surgery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
