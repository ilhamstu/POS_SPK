-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 01:19 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spktpe`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `terjual` int(11) DEFAULT 0,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`, `terjual`, `id_kategori`) VALUES
(1, 'Shinzui Sakura 250ml', 25000, 500, 3, 1),
(2, 'Dettol Lemon Fresh 250ml', 30000, 500, 120, 1),
(3, 'Esse Berry Pop 12', 16000, 500, 0, 3),
(4, 'LA Bold 12', 17000, 500, 60, 3),
(5, 'Esse Change 12', 16000, 500, 0, 3),
(6, 'Sampoerna 16', 25000, 500, 2, 3),
(7, 'Djarum Super 16', 24000, 500, 2, 3),
(8, 'Frestea Freeze 250ml', 3500, 500, 100, 4),
(9, 'Frestea Blackkurant 250ml', 3500, 500, 0, 4),
(10, 'Teh Kotak 150ml', 3000, 500, 0, 4),
(11, 'Teh Pucuk 250ml', 4000, 500, 3, 4),
(14, 'Indomie Kuah Ayam Bawang', 3000, 500, 80, 5),
(15, 'Indomie Goreng Iga Penyet', 3500, 500, 50, 5),
(19, 'Pulpen Snowman', 3500, 500, 10, 8),
(32, 'Richeese Nabati 500g', 35000, 500, 0, 7),
(33, 'Richeese Nabati 120g', 15000, 500, 0, 7),
(35, 'Lifebuoy Nature Pure 1btg', 3000, 500, 0, 1),
(36, 'MamaSuka Hot Lava 120g', 18000, 500, 60, 6);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sabun'),
(2, 'Shampo'),
(3, 'Rokok'),
(4, 'Minuman'),
(5, 'Mie Instan'),
(6, 'Saos'),
(7, 'Snack'),
(8, 'ATK'),
(9, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `persen_penjualan`
--

CREATE TABLE `persen_penjualan` (
  `id_barang` int(11) NOT NULL,
  `angka_penjualan` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persen_penjualan`
--

INSERT INTO `persen_penjualan` (`id_barang`, `angka_penjualan`) VALUES
(1, '0.60'),
(2, '24.00'),
(3, '0.00'),
(4, '12.00'),
(5, '0.00'),
(6, '0.40'),
(7, '0.40'),
(8, '20.00'),
(9, '0.00'),
(10, '0.00'),
(11, '0.60'),
(14, '16.00'),
(15, '10.00'),
(19, '2.00'),
(32, '0.00'),
(33, '0.00'),
(35, '0.00'),
(36, '40.00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` enum('pending','done') NOT NULL,
  `total` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tgl_tsk` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `jumlah`, `status`, `total`, `user_id`, `tgl_tsk`) VALUES
(2, 6, 2, 'done', 50000, 2, '2022-01-09'),
(3, 7, 2, 'done', 48000, 3, '2022-01-10'),
(5, 15, 2, 'done', 7000, 2, '2022-01-11'),
(6, 11, 3, 'done', 12000, 3, '2022-01-12'),
(7, 1, 3, 'done', 75000, 2, '2022-01-13'),
(8, 2, 6, 'done', 180000, 3, '2022-01-14'),
(9, 4, 60, 'done', 1020000, 2, '2022-01-15'),
(10, 8, 100, 'done', 350000, 3, '2022-01-16'),
(11, 14, 80, 'done', 240000, 2, '2022-01-17'),
(12, 19, 89, 'done', 311500, 3, '2022-01-18'),
(13, 2, 56, 'done', 1680000, 2, '2022-01-19'),
(14, 19, 10, 'done', 35000, 3, '2022-01-20'),
(21, 5, 60, 'done', 960000, 2, '2022-01-21'),
(22, 10, 50, 'done', 150000, 3, '2022-01-21'),
(23, 2, 120, 'done', 3600000, 4, '2022-01-21'),
(24, 8, 100, 'done', 350000, 4, '2022-01-21'),
(25, 15, 50, 'done', 175000, 4, '2022-01-21'),
(26, 36, 200, 'done', 3600000, 4, '2022-01-21'),
(27, 36, 60, 'done', 1080000, 4, '2022-01-27'),
(28, 1, 50, 'pending', 1250000, 4, '2022-01-27'),
(29, 3, 40, 'pending', 640000, 4, '2022-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `passwd` varchar(15) NOT NULL,
  `level` enum('Kasir','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `username`, `passwd`, `level`) VALUES
(1, 'Admin', 'admin', '12345', 'Admin'),
(2, 'Kasir 1', 'kasir1', '12345', 'Kasir'),
(3, 'Kasir2', 'kasir2', '12345', 'Kasir'),
(4, 'Ilham', 'ilham', 'ilham123', 'Kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `barang_ibfk_1` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `persen_penjualan`
--
ALTER TABLE `persen_penjualan`
  ADD KEY `persen_penjualan_ibfk_1` (`id_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_ibfk_1` (`id_barang`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON UPDATE CASCADE;

--
-- Constraints for table `persen_penjualan`
--
ALTER TABLE `persen_penjualan`
  ADD CONSTRAINT `persen_penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
