-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2020 at 08:20 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypos`
--

-- --------------------------------------------------------

--
-- Table structure for table `pem`
--

CREATE TABLE `pem` (
  `No_RM` int(8) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `unit_kerja` int(11) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `peminjam` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `peminjam_nama` varchar(100) NOT NULL,
  `tanggal_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `no_rm`, `nama`, `no_hp`, `unit_kerja`, `tgl_peminjaman`, `peminjam`, `id_user`, `peminjam_nama`, `tanggal_kembali`) VALUES
(1, '009922', 'Ujang Maman', '098768797968', 1, '2020-09-05', 3, '1', '', '2020-09-05'),
(2, '1231203', 'ajkwdbaw', '12389127', 1, '0012-12-12', 1, '12', '', '2020-09-05'),
(3, '91238712', 'ajwdbawkd', '192381', 1, '0012-12-12', 1, '4', '', '2020-09-05'),
(4, '1231', 'awdaw', '12312', 1, '2010-12-12', 1, '4', '', '2020-09-27'),
(6, '1231203', 'ujang', '089622448305', 1, '2020-09-27', 1, '1', 'udin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `No_RM` int(8) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin,2:kasir'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 'Majalaya', 1),
(2, 'kasir1', '874c0ac75f323057fe3b7fb3f5a8a41df2b94b1d', 'junaedi', 'manggahang', 2),
(3, 'kasir3', '8cb2237d0679ca88db6464eac60da96345513964', 'sandi', 'ciparay', 2),
(4, 'pandu', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 'Pandu', 'cipadung', 2),
(5, 'iqbal', '65f568e1b3ac89d15bd804b9f1bd95cd37ca0ecb', 'iqbal', 'dffff', 1),
(6, 'robii', '3f79cbc8e8ae6ac17f0703a124474a512a39c92b', 'robi', 'dddd', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pem`
--
ALTER TABLE `pem`
  ADD PRIMARY KEY (`No_RM`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`No_RM`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
