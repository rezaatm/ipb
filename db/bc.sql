-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2022 at 08:18 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bc`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `pk` varchar(128) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `jam` datetime(6) NOT NULL,
  `berakhir` timestamp(6) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `nama`, `nim`, `pk`, `ruangan`, `jam`, `berakhir`, `status`) VALUES
(22, 'Aditama Ganti', '065118214', 'Ilkom', 'CB 1', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 'Ruangan Sedang di Gunakan'),
(23, 'Yogga', '065118214', 'Ilkom', 'CB 2', '0000-00-00 00:00:00.000000', '2022-05-22 04:48:00.000000', 'Ruangan Selesai di Gunakan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `role` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `nama`, `username`, `password`, `pk`) VALUES
(4, 'admin', 'aditya', '065118213', '$2y$10$TpsVBvAXxiCdUp6qNUZGHuV5zSmPO6HyrzJ22TMBurPUiAPxY4Db6', 'ilkom'),
(5, 'member', 'aditama', '065118214', '$2y$10$zn3J7XmwrHptnPUL/1km7uVz3qgNQwBcE2GvVNldYSSUAUb7.BfsW', 'ilkom'),
(6, 'admin', 'Reza', '1709042004', '$2y$10$m2Bc7qyVAF95IkLS2t6Khu17y.uKPIH5nKhDOfaK267fV6I4SBShy', 'Ilmu Komputer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
