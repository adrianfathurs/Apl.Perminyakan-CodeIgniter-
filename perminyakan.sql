-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 12:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perminyakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `metodeanalog`
--

CREATE TABLE `metodeanalog` (
  `id` int(11) NOT NULL,
  `phi` int(11) NOT NULL,
  `hitungswi` int(11) NOT NULL,
  `rf` int(11) NOT NULL,
  `boi` int(11) NOT NULL,
  `baf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metodeanalog`
--

INSERT INTO `metodeanalog` (`id`, `phi`, `hitungswi`, `rf`, `boi`, `baf`) VALUES
(1, 20, 1, 0, 20, 12),
(2, 20, 1, 0, 20, 12),
(3, 20, 1, 0, 20, 12),
(4, 30, 1, 3, 30, 165),
(5, 100, 0, 1, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `volumetrikigip`
--

CREATE TABLE `volumetrikigip` (
  `id` int(11) NOT NULL,
  `luaspengeringan` int(11) NOT NULL,
  `ketebalanrata` int(11) NOT NULL,
  `porositasbatuan` int(11) NOT NULL,
  `swi` int(11) NOT NULL,
  `bgi` int(11) NOT NULL,
  `igip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volumetrikioip`
--

CREATE TABLE `volumetrikioip` (
  `id` int(11) NOT NULL,
  `luaspengeringann` int(11) NOT NULL,
  `ketebalanrataa` int(11) NOT NULL,
  `porositasbatuann` int(11) NOT NULL,
  `swi` int(11) NOT NULL,
  `boi` int(11) NOT NULL,
  `ioip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volumetrikioip`
--

INSERT INTO `volumetrikioip` (`id`, `luaspengeringann`, `ketebalanrataa`, `porositasbatuann`, `swi`, `boi`, `ioip`) VALUES
(1, 1802, 50, 40, 1, 100000, 251638);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `metodeanalog`
--
ALTER TABLE `metodeanalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volumetrikigip`
--
ALTER TABLE `volumetrikigip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volumetrikioip`
--
ALTER TABLE `volumetrikioip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `metodeanalog`
--
ALTER TABLE `metodeanalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `volumetrikigip`
--
ALTER TABLE `volumetrikigip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volumetrikioip`
--
ALTER TABLE `volumetrikioip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
