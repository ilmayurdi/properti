-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 11:45 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `properti`
--

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE IF NOT EXISTS `iklan` (
  `id_iklan` varchar(12) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jenis_iklan` enum('sewa','jual') NOT NULL,
  `st_aktif` enum('aktiv','non','proses') NOT NULL DEFAULT 'non',
  `st_nego` enum('1','0') NOT NULL DEFAULT '0',
  `st_sold` enum('1','0') NOT NULL DEFAULT '0',
  `st_approve` enum('1','0') NOT NULL DEFAULT '0',
  `dilihat` int(11) NOT NULL,
  `id_user` varchar(12) NOT NULL,
  `id_prop` varchar(12) NOT NULL,
  `st_delete` enum('1','0') NOT NULL DEFAULT '0',
  `tgl_iklan` date NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kat` varchar(12) NOT NULL,
  `nama_kat` varchar(20) NOT NULL,
  `ket_kat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`, `ket_kat`) VALUES
('K001', 'Rumah', 'rumah adalah blablabla'),
('K002', 'Kos-kosan', 'Kos-kosan adalah blablabala'),
('K003', 'Apartemen', 'Apartemen adalah blabla'),
('K004', 'Ruko', 'Ruko adalah'),
('K005', 'Tanah', 'Tanah Lapang adalah');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` varchar(12) NOT NULL,
  `sender` varchar(12) NOT NULL,
  `receiver` varchar(12) NOT NULL,
  `isi_pesan` text NOT NULL,
  `jenis_pesan` enum('tanya','nego','chat') NOT NULL DEFAULT 'tanya',
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `properti`
--

CREATE TABLE IF NOT EXISTS `properti` (
  `id_prop` varchar(12) NOT NULL,
  `nama_prop` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `alamatmaps` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` text NOT NULL,
  `id_kat` int(2) NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `properti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
`id_role` int(2) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Pengiklan'),
(3, 'Pengunjung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` varchar(12) NOT NULL,
  `nama` varchar(30) DEFAULT NULL COMMENT 'nama lengkap user',
  `email` varchar(300) NOT NULL COMMENT 'email login',
  `password` varchar(255) NOT NULL COMMENT 'hash login password',
  `ttl` varchar(20) DEFAULT NULL,
  `alamat` text,
  `alamatmaps` text,
  `nohp` varchar(15) DEFAULT NULL,
  `gender` enum('l','p') DEFAULT 'l',
  `foto` varchar(100) DEFAULT NULL,
  `id_role` int(2) NOT NULL,
  `isDeleted` tinyint(2) NOT NULL DEFAULT '0',
  `CreatedDtm` datetime DEFAULT NULL,
  `UpdateDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `email`, `password`, `ttl`, `alamat`, `alamatmaps`, `nohp`, `gender`, `foto`, `id_role`, `isDeleted`, `CreatedDtm`, `UpdateDtm`) VALUES
('U001', 'Ilma Yurdianti', 'ilmayurdi354@gmail.com', 'dcb76da384ae3028d6aa9b2ebcea01c9', NULL, NULL, NULL, '085784747178', 'p', 'foto.jpg', 1, 0, NULL, NULL),
('US002', 'Mail Yurdianto', 'ilmayurdianti19@gmail.com', 'Mailyurdianto', NULL, NULL, NULL, '085784747178', 'l', 'foto.jpg', 2, 0, NULL, NULL),
('US003', 'Ismail Hamida', 'ilma.yurdianti@mail.ugm.ac.id', 'IsmailHm', NULL, NULL, NULL, '085784747178', 'l', 'foto.jpg', 3, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
 ADD PRIMARY KEY (`id_iklan`), ADD KEY `id_user` (`id_user`), ADD KEY `id_prop` (`id_prop`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id_pesan`), ADD KEY `sender` (`sender`), ADD KEY `receiver` (`receiver`);

--
-- Indexes for table `properti`
--
ALTER TABLE `properti`
 ADD PRIMARY KEY (`id_prop`), ADD KEY `id_kat` (`id_kat`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
 ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
MODIFY `id_role` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
