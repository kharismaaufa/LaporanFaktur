-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 07:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faktur`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_faktur`
--

CREATE TABLE `data_faktur` (
  `id_faktur` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `bulan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_faktur`
--

INSERT INTO `data_faktur` (`id_faktur`, `tanggal`, `jumlah`, `cabang`, `status`, `bulan`) VALUES
(1, '2022-04-01', 100, 'Semarang', 'Jadi', ''),
(2, '2022-05-08', 50, 'Salatiga', 'Jadi', ''),
(3, '2022-04-09', 10, 'Batang', 'Belum Jadi', ''),
(5, '2022-03-11', 50, 'Kendal', 'Belum Jadi', ''),
(6, '2022-03-26', 20, 'Demak', 'Jadi', ''),
(7, '2022-04-12', 60, 'Temanggung', 'Jadi', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(225) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `nama_user`, `username`, `password`, `photo`, `hak_akses`) VALUES
(1, 'Aufa', 'aufa', 'b47ffb464ba6fa6454c343cc604eec1d', 'aufa.png', 1),
(2, 'Budi', 'budi', 'budi', 'budi1.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_faktur`
--
ALTER TABLE `data_faktur`
  ADD PRIMARY KEY (`id_faktur`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_faktur`
--
ALTER TABLE `data_faktur`
  MODIFY `id_faktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
