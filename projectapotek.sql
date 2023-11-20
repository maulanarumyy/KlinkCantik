-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 04:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectapotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `acustomer`
--

CREATE TABLE `acustomer` (
  `id_customer` varchar(15) NOT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `umur` int(3) DEFAULT NULL,
  `noTlp` bigint(20) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acustomer`
--

INSERT INTO `acustomer` (`id_customer`, `nama_customer`, `umur`, `noTlp`, `pekerjaan`, `alamat`, `jenis_kelamin`) VALUES
('OBT1213', 'Maulana Rumy T', 19, 81318083836, 'Mahasiswa', 'Jl. Safir No.196, RT.5/RW.7, Kedaung Kali Angke, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11710', 'LK');

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `admnme` varchar(10) NOT NULL,
  `admpw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`admnme`, `admpw`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `aobat`
--

CREATE TABLE `aobat` (
  `id_obat` varchar(15) NOT NULL,
  `nama_obat` varchar(50) DEFAULT NULL,
  `stock` int(20) DEFAULT NULL,
  `tanggal_kdlswr` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aobat`
--

INSERT INTO `aobat` (`id_obat`, `nama_obat`, `stock`, `tanggal_kdlswr`) VALUES
('TAB2345', 'Makarizo Hair Spray', 20, '2024-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `apenjualan`
--

CREATE TABLE `apenjualan` (
  `id_transaksi` int(11) NOT NULL,
  `id_customer` varchar(15) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `total_transaksi` bigint(10) DEFAULT NULL,
  `total_bayar` bigint(10) DEFAULT NULL,
  `total_kembalian` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apenjualandetail`
--

CREATE TABLE `apenjualandetail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_obat` varchar(15) DEFAULT NULL,
  `jumlah_obat` int(11) DEFAULT NULL,
  `harga_obat` bigint(12) DEFAULT NULL,
  `total_harga` bigint(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acustomer`
--
ALTER TABLE `acustomer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `aobat`
--
ALTER TABLE `aobat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `apenjualan`
--
ALTER TABLE `apenjualan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `apenjualandetail`
--
ALTER TABLE `apenjualandetail`
  ADD PRIMARY KEY (`id_transaksi_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apenjualan`
--
ALTER TABLE `apenjualan`
  ADD CONSTRAINT `apenjualan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `acustomer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `apenjualandetail`
--
ALTER TABLE `apenjualandetail`
  ADD CONSTRAINT `apenjualandetail_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `apenjualan` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `apenjualandetail_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `aobat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
