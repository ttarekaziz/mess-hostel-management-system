-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 08:25 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mess_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_house`
--

CREATE TABLE `tb_house` (
  `serial_no` int(11) NOT NULL,
  `h_name` text NOT NULL,
  `house_no` int(3) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_house`
--

INSERT INTO `tb_house` (`serial_no`, `h_name`, `house_no`, `address`, `contact`) VALUES
(1, 'Dream Mess', 25, 'Uttara', 15266544),
(2, 'T Mess', 26, 'dhaka', 199);

-- --------------------------------------------------------

--
-- Table structure for table `tb_meal`
--

CREATE TABLE `tb_meal` (
  `serial_no` int(11) NOT NULL,
  `meal` int(11) NOT NULL,
  `rate` varchar(11) NOT NULL,
  `amount` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_meal`
--

INSERT INTO `tb_meal` (`serial_no`, `meal`, `rate`, `amount`) VALUES
(1, 45, '30', '1350'),
(2, 50, '30', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `tb_members`
--

CREATE TABLE `tb_members` (
  `serial_no` int(11) NOT NULL,
  `id` int(8) NOT NULL,
  `name` varchar(456) NOT NULL,
  `occup` text NOT NULL,
  `per_addr` varchar(100) NOT NULL,
  `phone_num` int(17) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_members`
--

INSERT INTO `tb_members` (`serial_no`, `id`, `name`, `occup`, `per_addr`, `phone_num`, `email`) VALUES
(1, 1620, 'Tarek', 'Student', 'Uttara,Dhaka', 1770875563, 'tarekaziz373@gmail.com'),
(2, 16, 'T', 's', 'uttara', 177, 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_workers`
--

CREATE TABLE `tb_workers` (
  `serial_no` int(11) NOT NULL,
  `id` int(8) NOT NULL,
  `name` text NOT NULL,
  `phone` int(16) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_workers`
--

INSERT INTO `tb_workers` (`serial_no`, `id`, `name`, `phone`, `address`, `type`) VALUES
(1, 1621, 'Mithun', 1778765443, 'Uttara,Dhaka', 'Cooker'),
(2, 3, 'm', 155, 'kamarpara', 'gourd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
