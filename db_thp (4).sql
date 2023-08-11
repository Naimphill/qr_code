-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 02:12 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` varchar(10) NOT NULL,
  `id_master` int(10) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `status` enum('Normal','Rusak') NOT NULL,
  `qr_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_master`, `nm_barang`, `keterangan`, `status`, `qr_code`) VALUES
('1400000001', 4, 'AC Daikin 1', 'Lab TKJ 1', 'Normal', '1400000001.png'),
('1400000002', 4, 'AC Daikin 2', 'Lab TKJ 1', 'Normal', '1400000002.png'),
('1400000003', 4, 'AC Daikin 3', 'Lab TKJ 1', 'Rusak', '1400000003.png'),
('1400000004', 4, 'AC Daikin 4', 'Lab TKJ 1', 'Normal', '1400000004.png'),
('1500000001', 5, 'Komputer 1', 'Lab TKJ 1', 'Normal', '1500000001.png'),
('1500000002', 5, 'Komputer 2', 'Lab TKJ 1', 'Normal', '1500000002.png'),
('1500000003', 5, 'Komputer 3', 'Lab TKJ 1', 'Rusak', '1500000003.png'),
('1500000004', 5, 'Komputer 4', 'Lab TKJ 1', 'Normal', '1500000004.png'),
('1500000005', 5, 'Komputer 5', 'Lab TKJ 1', 'Rusak', '1500000005.png'),
('2100000001', 1, 'Kursi 1', 'Lab TKJ 1', 'Normal', '2100000001.png'),
('2100000002', 1, 'Kursi 2', 'Lab TKJ 1', 'Normal', '2100000002.png'),
('2100000003', 1, 'Kursi 3', 'Lab TKJ 1', 'Normal', '2100000003.png'),
('2100000004', 1, 'Kursi 4', 'Lab TKJ 1', 'Normal', '2100000004.png'),
('2100000005', 1, 'Kursi 5', 'Lab TKJ 1', 'Normal', '2100000005.png'),
('2100000006', 1, 'Kursi 6', 'Lab TKJ 1', 'Normal', '2100000006.png'),
('2100000007', 1, 'Kursi 7', 'Lab TKJ 1', 'Normal', '2100000007.png'),
('2100000008', 1, 'Kursi 8', 'Lab TKJ 1', 'Normal', '2100000008.png'),
('2100000009', 1, 'Kursi 9', 'Lab TKJ 1', 'Normal', '2100000009.png'),
('2100000010', 1, 'Kursi 10', 'Lab TKJ 1', 'Normal', '2100000010.png'),
('2100000011', 1, 'Kursi 11', 'Lab TKJ 1', 'Normal', '2100000011.png'),
('2100000012', 1, 'Kursi 12', 'Lab TKJ 1', 'Normal', '2100000012.png'),
('2100000013', 1, 'Kursi 13', 'Lab TKJ 1', 'Normal', '2100000013.png'),
('2200000001', 2, 'Meja 1', 'Lab TKJ 1', 'Normal', '2200000001.png'),
('2200000002', 2, 'Meja 2', 'Lab TKJ 1', 'Normal', '2200000002.png'),
('2200000003', 2, 'Meja 3', 'Lab TKJ 1', 'Normal', '2200000003.png'),
('2200000004', 2, 'Meja 4', 'Lab TKJ 1', 'Normal', '2200000004.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(10) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nm_kategori`) VALUES
(1, 'Elektronik'),
(2, 'Non-Elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `id_laporan` int(5) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `status` enum('Diterima','Diproses','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id_laporan`, `id_barang`, `id_user`, `status`) VALUES
(14, '1500000003', 15, 'Diterima'),
(15, '2100000013', 17, 'Diproses'),
(16, '2100000005', 17, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_barang`
--

CREATE TABLE `tbl_master_barang` (
  `id_master` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `th_pembelian` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_master_barang`
--

INSERT INTO `tbl_master_barang` (`id_master`, `id_kategori`, `jenis_barang`, `th_pembelian`) VALUES
(1, 2, 'Kursi', 2016),
(2, 2, 'Meja', 2019),
(4, 1, 'AC Daikin', 2019),
(5, 1, 'Komputer Core i5', 2023),
(6, 1, 'LCD Monitor LG', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `nm_lengkap` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nm_lengkap`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'guru', 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru'),
(3, 'siswa', 'siswa', 'bcd724d15cde8c47650fda962968f102', 'siswa'),
(11, 'Naim', 'naim', '7538d4dcba3305622d94579666135c31', 'admin'),
(15, 'M. B. Niam, S.Kom', 'niam', '71d9030c2fda3ea1fe12c3170d3348c7', 'guru'),
(16, 'Sholehudin S.Kom', 'sholeh', '5c58f7f2b3ec57ec92faaa329d382360', 'guru'),
(17, 'Erna Agustiana, S.Pd', 'erna', '035b3c6377652bd7d49b5d2e9a53ef40', 'guru'),
(18, 'Aryo Pamungkas', 'aryo', '2ec87599180c059aa5444292cd98c5ff', 'siswa'),
(19, 'Gayuh Adi Prakasa', 'gayuh', 'f8ec597d451326b8deeec2d53ab798af', 'siswa'),
(20, 'M. Andritani', 'andri', '6bd3108684ccc9dfd40b126877f850b0', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tbl_master_barang`
--
ALTER TABLE `tbl_master_barang`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  MODIFY `id_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_master_barang`
--
ALTER TABLE `tbl_master_barang`
  MODIFY `id_master` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
