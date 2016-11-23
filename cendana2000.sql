-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Nov 2016 pada 09.48
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cendana2000`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelamin`
--

CREATE TABLE IF NOT EXISTS `kelamin` (
  `id` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
('1', 'Laki - laki'),
('2', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `nama`) VALUES
('1', 'Malang'),
('2', 'Nganjuk'),
('3', 'Blitar'),
('4', 'Tulungagung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `id_kota` varchar(255) DEFAULT NULL,
  `id_kelamin` int(1) DEFAULT NULL,
  `id_posisi` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `telp`, `id_kota`, `id_kelamin`, `id_posisi`) VALUES
('10', 'Samsul Huda', '085234640114', '2', 1, 1),
('11', 'Tolkha Hasan', '081233072122', '1', 1, 4),
('12', 'Wawan Dwi Prasetyo', '085745966707', '4', 1, 4),
('14', 'Toni', NULL, NULL, NULL, NULL),
('15', 'Mukidi', NULL, NULL, NULL, NULL),
('16', 'baron', NULL, NULL, NULL, NULL),
('2', 'Hafizh Asrofil Al Banna', '087859615271', '1', 1, 2),
('3', 'Rizal Ferdian', '087777284179', '1', 1, 3),
('4', 'Antony Febriansyah Hartono', '082199568540', '1', 1, 1),
('5', 'Redika Angga Pratama', '083834657395', '1', 1, 3),
('6', 'Dody Ahmad Kusuma Jaya', '083854520015', '1', 1, 1),
('7', 'Faiq Fajrullah', '085736333728', '1', 1, 2),
('8', 'Mokhammad Choirul Ikhsan', '085749535400', '3', 1, 2),
('9', 'Mustofa Halim', '081330493322', '1', 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posisi`
--

CREATE TABLE IF NOT EXISTS `posisi` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posisi`
--

INSERT INTO `posisi` (`id`, `nama`) VALUES
('1', 'IT'),
('2', 'HRD'),
('3', 'Keuangan'),
('4', 'Product');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
