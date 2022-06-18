-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 09:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback`) VALUES
('Great job.'),
(''),
('suer');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `Boarding` varchar(255) NOT NULL,
  `Departure` varchar(255) NOT NULL,
  `fare` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`Boarding`, `Departure`, `fare`) VALUES
('Beach', 'Fort ', 5),
('Chromepet', 'Tambaram  ', 5),
('Chromepet', 'Potheri  ', 5),
('Tambaram', 'Chromepet  ', 5),
('Tambaram', 'Potheri  ', 5),
('Potheri', 'Chromepet  ', 5),
('Potheri', 'Tambaram  ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tic`
--

CREATE TABLE `tic` (
  `PNR` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(10) NOT NULL,
  `status` text NOT NULL,
  `bookedon` datetime NOT NULL DEFAULT current_timestamp(),
  `doj` date NOT NULL,
  `class` varchar(10) NOT NULL,
  `from` text NOT NULL,
  `to` text NOT NULL,
  `fare` int(10) NOT NULL,
  `seat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tic`
--

INSERT INTO `tic` (`PNR`, `name`, `gender`, `age`, `status`, `bookedon`, `doj`, `class`, `from`, `to`, `fare`, `seat`) VALUES
('8120001552', 'SARAVANAN', 'M', 27, 'CNFR', '2021-11-21 21:52:51', '2022-01-12', 'LOC', 'WJR', 'MAS', 225, 'F42'),
('TT12309840', 'SARATHKANNAN', 'M', 21, 'WAITING', '2021-10-08 00:48:05', '2021-11-02', 'AC', 'TBM', 'PMK', 430, 'E39'),
('8120001560', 'SATHISH', 'M', 23, 'CAN', '2021-10-31 18:20:06', '2021-11-04', 'IAC', 'TAM', 'MAD', 625, 'CAN'),
('8120001551', 'SANJAY', 'M', 27, 'POWL', '2021-11-01 10:43:53', '2021-11-29', 'LOC', 'POT', 'AVA', 20, '-'),
('8120001544', 'RAJESH', 'M', 22, 'CNFR', '2021-11-01 10:43:53', '2021-11-14', 'IAC', 'MAS', 'GNT', 770, 'G18'),
('8120001521', 'Vignesh', 'M', 94, 'CAN', '2021-11-21 21:34:15', '2021-12-04', 'IISL', 'TAM', 'MAD', 140, 'CAN'),
('8120001000', 'Karthick', 'M', 33, 'POWL', '2021-11-21 21:34:15', '2021-11-28', 'IAC', 'MDU', 'MAS', 650, '-'),
('8120002556', 'VIGNESH', 'M', 21, 'CNF', '2021-11-21 22:50:43', '2022-02-19', 'IISL', 'TBM', 'MAS', 110, 'L19'),
('8120001221', 'MADHUMITHA', 'F', 20, 'CNF', '2021-11-21 22:55:39', '2022-05-28', 'IAC', 'POT', 'MSA', 90, 'J20'),
('8120001221', 'CRISTINA', 'F', 18, 'WL', '2021-11-21 22:55:39', '2021-11-23', 'IISL', 'TBM', 'WJR', 210, 'B11'),
('8120000001', 'ABISHEK', 'M', 19, 'CAN', '2021-11-21 23:12:18', '2022-01-22', 'IAC', 'MSA', 'AJJ', 225, 'CAN'),
('8120000002', 'KANNAN', 'M', 28, 'CNF', '2021-11-21 23:12:18', '2021-11-30', 'IISL', 'TBM', 'MDU', 410, 'G11'),
('8120000003', 'RAJU', 'M', 22, 'TQWL', '2021-11-21 23:12:18', '2021-12-15', 'ISL', 'AJJ', 'MDU', 310, '-'),
('8120000004', 'ABITHA', 'F', 23, 'WL', '2021-11-21 23:12:18', '2022-02-10', 'IAC', 'TEN', 'NCJ', 215, '-'),
('8120000005', 'JENIFER', 'F', 29, 'CNF', '2021-11-21 23:12:18', '2021-12-15', 'ISL', 'PER', 'TJ', 310, 'T11'),
('8120000006', 'MOHAN', 'M', 35, 'TQCNF', '2021-11-21 23:12:18', '2021-11-22', 'ISL', 'MSA', 'RMM', 750, 'K21'),
('8120000007', 'GOKUL', 'M', 21, 'CNF', '2021-11-21 23:12:18', '2021-12-15', 'IAC', 'MSA', 'WJR', 100, 'A20');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `name` varchar(255) NOT NULL,
  `no` int(30) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`name`, `no`, `start`, `end`) VALUES
('Vaigai Express', 12635, 'CHENNAI EGMORE', 'MADURAI JN'),
('Chozhan Express', 16796, 'Tiruchchirapali', 'CHENNAI EGMORE'),
('Pandian Express', 12638, 'Madurai Jn', 'CHENNAI EGMORE'),
('Rock Fort Express', 16177, 'Chennai Egmore', 'Tiruchchirapali'),
('Guruvayur Express', 16127, 'Chennai Egmore', 'Guruvayur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'Sarath', 'sarathkannan@admin.ttcs.io', '24dcbdfb98dc4413cc490ab9c99ec619'),
(0, 'sanjay', 'sanjay@admin.ttcs.io', '31b1633f64dc4c0aa910262fbe4e81b9'),
(0, 'austro', 'austro@gmail.com', 'c644184f0c4fb2eba53244bef6091562'),
(0, 'sarangan', 'sarangan@admin.rtcs.in', '312dc6ec7c900fb9017bf43c6b1f81bb'),
(0, 'sarangan', 'sara@ttcs.in', '5bd537fc3789b5482e4936968f0fde95'),
(0, 'sarangan', 'saran@ttcs.in', '5bd537fc3789b5482e4936968f0fde95');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
