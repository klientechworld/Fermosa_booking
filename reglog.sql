-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 09:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reglog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin1`
--

CREATE TABLE `tb_admin1` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin1`
--

INSERT INTO `tb_admin1` (`id`, `username`, `email`, `password`, `phone`) VALUES
(1, 'Fermosaadmin1', 'Fermosaadmin1@gmail.com', 'Fermosaadmin12345', '09999999999'),
(2, 'FermosaAdmin2', 'FermosaAdmin2@gmail.com', 'FermosaAdmin246810', '09876543211');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inquiry`
--

CREATE TABLE `tb_inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_inquiry`
--

INSERT INTO `tb_inquiry` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'I am Groot', 'Iamgroot@gmail.com', '09988776655', 'I AM GGGGRRRRROOOOOOTTTT!!!'),
(2, 'Tony Stark', 'TonyStark@gmail.com', '099999999999', 'I am Iron Mannnn!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'test', 'testing', 'testing@gmail.com', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin1`
--
ALTER TABLE `tb_admin1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_inquiry`
--
ALTER TABLE `tb_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin1`
--
ALTER TABLE `tb_admin1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_inquiry`
--
ALTER TABLE `tb_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
