-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 08:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_2001050004`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_2001050004`
--

CREATE TABLE `tabel_2001050004` (
  `id` int(11) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `isi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_2001050004`
--

INSERT INTO `tabel_2001050004` (`id`, `fakultas`, `prodi`, `kelas`, `isi`) VALUES
(1, 'Teknik', 'D3 RPL', 'A', 12),
(2, 'Desain', 'S1 DKV', '2A', 20),
(3, 'Gizi', 'S1 Gizi', '4A', 19),
(4, 'Hukum', 'S1 Hukum', '3A', 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_2001050004`
--
ALTER TABLE `tabel_2001050004`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_2001050004`
--
ALTER TABLE `tabel_2001050004`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
