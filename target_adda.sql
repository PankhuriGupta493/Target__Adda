-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 09:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `target_adda`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `lastname`, `email`, `mobile`, `state`, `password`, `confirmpassword`) VALUES
('sffd', '', 's@gmail.com', '', '', '46546476', ''),
('dffdf', '', 'a@gmail.com', '657678', '', '1234', ''),
('sa', 's', 's@gmail.com', '687688', '', '78979879', ''),
('sa', 's', 's@gmail.com', '687688', '', '78979879', ''),
('fgf', 'fgfh', 's@gmail.com', '546576', '', '1234', '1234'),
('fgf', 'fgfh', 's@gmail.com', '546576', '', '1234', '123'),
('kjgfkjgh', 'fgfdgf', 's@gmail.com', '576657', 'up', '123', '123'),
('jhgj', 'hjfh', 'jhgj@gmail.com', 'hgjhg', 'hgjh', 'hjh', 'jhg'),
('uyuy', 'yuy', 'a@gmail.com', '546', 'fggf', '43', '546'),
('Rakhi', 'Tandon', 'rakhitandon20011998@gmail.com', '8571082179', 'haryana', 'Rakhi123', 'Rakhi123'),
('Rakhi', 'Tandon', 'rakhitandon20011998@gmail.com', '8571082179', 'haryana', 'rakhi123', 'rakhi234'),
('sujata', 'devi', 'sujata@gmail.com', '674647647', 'UP', 'sujata123', 'sujata123'),
('rakhi', 'devi', 'sujata@gmail.com', '7687687778', 'uttar pardesh', 'sujata123', 'sujata123'),
('neetu', '', 'neetu@gmail.com', '7687687778', 'uttar pardesh', 'sujata123', 'sujata123'),
('neetu', '', 'neetu@gmail.com', '7687687778', 'uttar pardesh', 'sujata123', 'sujata123'),
('pankhuri', 'gupta', 'pankhuri@mail.com', '768768777', 'Uttar pardesh', 'pankhuri123', 'pankhuri124'),
('pankhuri', 'gupta', 'pankhuri@mail.com', '7687687778', 'uttar pardesh', '123', '123'),
('pankhuri', 'gupta', 'pankhuri@mail.com', '7687687778', 'uttar pardesh', '123', '123'),
('pankhuri', 'gupta', 'pankhuri@mail.com', '7687687778', 'uttar pardesh', '123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
