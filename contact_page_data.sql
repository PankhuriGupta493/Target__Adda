-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 09:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_page_data`
--

CREATE TABLE `contact_page_data` (
  `contact_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_page_data`
--

INSERT INTO `contact_page_data` (`contact_id`, `first_name`, `last_name`, `email`, `subject`, `message`) VALUES
(2, 'Pankhuri', 'Gupta', 'pankhuriagrawal@gmai', 'Greetings', 'Hello , Goood Morning'),
(3, 'Suneel', 'Sharma', 'k.suneel7@tcs.com', 'Greetings', 'Hello , Goood Morning Brother!'),
(4, 'asf', 'adsf', 'afd@afd.com', 'fdfsaf', 'adsf'),
(5, 'asf123', 'adsf3344', '23443afd@afd.com', 'fdfsaf23442', 'adsf2343'),
(6, 'Riya', 'Sharma', 'riya123@gmail.com', 'Greetings', 'Hello, Good Morning'),
(8, 'Riya', 'Sharma', 'riya123@gmail.com', 'Greetings', 'Hello, Good Morning');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_page_data`
--
ALTER TABLE `contact_page_data`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_page_data`
--
ALTER TABLE `contact_page_data`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
