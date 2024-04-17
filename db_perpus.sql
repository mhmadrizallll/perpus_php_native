-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 03:17 PM
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
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tahun` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `stok` enum('tersedia','habis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `gambar`, `tahun`, `deskripsi`, `stok`) VALUES
(11, 'Dikta dan Hukum', 'Dhia&#039;an Farah', 'v9eJSJ4kha6lLqqzzeZ3.jpg', '2021-06-14', 'Nadhira, siswa SMA kelas 12, sementara Dikta adalah mahasiswa Fakultas Hukum. Tentunya, keduanya memiliki kepribadian yang bertolak belakang, Nadhira siswa yang malas dan juga ceroboh sedangkan Dikta, mahasiswa yang begitu cerdas lalu aktif.', 'tersedia'),
(12, 'Hello Cello', 'Nadia Ristivani', 'CnKfLSnnmabJSi8vIYgN.jpg', '2022-04-11', 'Kisah cinta masa perkuliahan antara Marcello Este, si cowok ganteng seantero kampus yang terkenal dengan julukan buaya dan Helga yang merupakan sosok penulis cerita romansa yang memiliki berbagai masalah dalam hidupnya', 'habis');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'naruto', 'kyuubi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
