-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 03:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Sumedha', 'moturisumedha@gmail.com', 'contact', 'Helloo'),
(2, 'Sumedha', 'moturisumedha@gmail.com', 'contact', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(300) NOT NULL,
  `city` varchar(25) NOT NULL,
  `postalcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`id`, `name`, `address`, `gender`, `age`, `city`, `postalcode`) VALUES
(1, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(2, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(3, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(4, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(5, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(6, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(7, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(8, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(9, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(10, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(11, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(12, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094'),
(26, 'Sumedha', 'saipuri colony', 'female', '19', 'hyderabad', '500094');

-- --------------------------------------------------------

--
-- Table structure for table `enroll1`
--

CREATE TABLE `enroll1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `employment` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll1`
--

INSERT INTO `enroll1` (`id`, `name`, `relationship`, `number`, `email`, `address`, `city`, `postalcode`, `employment`, `gender`, `age`) VALUES
(0, 'Sumedha', 'Mother', '8106497366', 'moturisumedha@gmail.com', 'saipuri colony', 'hyderabad', '500094', 'homemaker', 'female', '19'),
(0, 'Sumedha', 'Mother', '8106497366', 'moturisumedha@gmail.com', 'saipuri colony', 'hyderabad', '500094', 'homemaker', 'female', '19');

-- --------------------------------------------------------

--
-- Table structure for table `enroll3`
--

CREATE TABLE `enroll3` (
  `id` int(11) NOT NULL,
  `program` varchar(50) NOT NULL,
  `carerequired` varchar(50) NOT NULL,
  `slot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll3`
--

INSERT INTO `enroll3` (`id`, `program`, `carerequired`, `slot`) VALUES
(1, '1', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `job_form`
--

CREATE TABLE `job_form` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(126) NOT NULL,
  `jobtype` varchar(50) NOT NULL,
  `referredby` varchar(50) NOT NULL,
  `description` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_form`
--

INSERT INTO `job_form` (`id`, `name`, `email`, `gender`, `age`, `jobtype`, `referredby`, `description`) VALUES
(1, 'Sumedha', 'moturisumedha@gmail.com', 'female', '19', 'part-time', '3', 'Helloo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enroll3`
--
ALTER TABLE `enroll3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_form`
--
ALTER TABLE `job_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `enroll3`
--
ALTER TABLE `enroll3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_form`
--
ALTER TABLE `job_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
