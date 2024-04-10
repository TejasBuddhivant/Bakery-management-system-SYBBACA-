-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 04:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maindatabase1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `user`, `password`, `date`) VALUES
(1, '1 idiot', 'admin@login.com', 'Admin', '1idiot$412301', '2024-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `chefsinfo`
--

CREATE TABLE `chefsinfo` (
  `csrno` int(11) NOT NULL,
  `chefsname` text NOT NULL,
  `country` text NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `speciality` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chefsinfo`
--

INSERT INTO `chefsinfo` (`csrno`, `chefsname`, `country`, `mobile_no`, `speciality`) VALUES
(1, 'tejas', 'india', 2147483647, 'cook maggi');

-- --------------------------------------------------------

--
-- Table structure for table `customerlist`
--

CREATE TABLE `customerlist` (
  `srno` int(200) NOT NULL,
  `id` int(100) NOT NULL,
  `name_of_customer` text NOT NULL,
  `email` text NOT NULL,
  `cake_name` text NOT NULL,
  `mobno` int(11) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerlist`
--

INSERT INTO `customerlist` (`srno`, `id`, `name_of_customer`, `email`, `cake_name`, `mobno`, `address`, `date`) VALUES
(33, 4, 'tejas ', 'tejas@gmail.com', 'venilla Cake', 2147483647, 'sample address', '2024-04-10'),
(34, 3, 'tejas ', 'hotmail@gmail.com', 'venilla Cake', 2147483647, 'sample address second from planet 404', '2024-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `srno` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobileno` int(10) NOT NULL,
  `address` text NOT NULL,
  `username` text NOT NULL,
  `passward` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`srno`, `name`, `email`, `mobileno`, `address`, `username`, `passward`, `date`) VALUES
(1, 'Tejas Buddhivant', 'tejasbuddhivant@gmail.com', 1234566789, 'sample.address 123 line at xyz planet', 'admin', 'Pass@123', '2024-04-03'),
(3, 'tejas', 'hotmail@gmail.com', 2147483647, 'sample address second from planet 404', 'tejas', 'tejas', '2024-04-03'),
(4, 'tejas', 'tejas@gmail.com', 2147483647, 'sample address', 'Pass', 'Pass@123', '2024-04-04'),
(5, 'Tejas Buddhivant', 'tejasxyz@gmail.com', 1234566789, 'sample address at sample post sample', 'user', 'Pass@1234', '2024-04-04'),
(6, 'Tejas buddhivant', 'tejas1@gmail.com', 2147483647, 'address no 20 planet no 303', 'tejas', 'Pass@123', '2024-04-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefsinfo`
--
ALTER TABLE `chefsinfo`
  ADD PRIMARY KEY (`csrno`);

--
-- Indexes for table `customerlist`
--
ALTER TABLE `customerlist`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chefsinfo`
--
ALTER TABLE `chefsinfo`
  MODIFY `csrno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customerlist`
--
ALTER TABLE `customerlist`
  MODIFY `srno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `srno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
