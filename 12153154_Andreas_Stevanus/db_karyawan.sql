-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mei 2018 pada 13.03
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Andreas Stevanus'),
(2, 'operator', '4b583376b2767b923c3e1da60d10de59', 'Luthfy Darmawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `no` int(11) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `gambar` varchar(70) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `divisi` varchar(25) NOT NULL,
  `tmp_lhr` varchar(20) NOT NULL,
  `tgl_lhr` datetime NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(25) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan2`
--

CREATE TABLE IF NOT EXISTS `karyawan2` (
  `nik` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `divisi` varchar(15) NOT NULL,
  `tmp_lhr` varchar(15) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan2`
--

INSERT INTO `karyawan2` (`nik`, `nama`, `jk`, `divisi`, `tmp_lhr`, `tgl_lhr`, `gol_darah`, `agama`, `status`, `telp`, `email`, `foto`) VALUES
('NIK0001', 'Andreas Stevanus', 'laki-laki', 'produksi', 'Bandung', '1996-11-26', 'B', 'Islam', 'BM', '083174651517', 'astevanus96@gmail.com', '06052018124617foto.jpg'),
('NIK0003', 'Luthfy darmawan', 'laki-laki', 'produksi', 'Cimahi', '1998-01-31', 'A', 'Islam', 'BM', '087863541625', 'luthfydarmawan@gmail.com', '06052018125535PEG0008.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `karyawan2`
--
ALTER TABLE `karyawan2`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
