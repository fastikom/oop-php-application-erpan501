-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2017 pada 06.10
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`pegawai_id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gaji` double NOT NULL,
  `jenis kelamin` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `tanggal_gabung` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `kode`, `nama`, `alamat`, `gaji`, `jenis kelamin`, `status`, `jabatan`, `photo`, `tanggal_gabung`) VALUES
(13, 'PEG0001', 'uzi', 'km', 12, 'Perempuan', 'Lajang', 'Programmer', 'PEG0001.', 1493819263);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`pegawai_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
