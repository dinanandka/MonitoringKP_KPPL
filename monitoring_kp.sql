-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Okt 2017 pada 16.10
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring_kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_lap` int(5) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `topik` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `nama` varchar(20) NOT NULL,
  `dospem` varchar(50) NOT NULL,
  `file_upload` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_lap`, `tanggal`, `topik`, `isi`, `nama`, `dospem`, `file_upload`) VALUES
(9, '2017-10-12', 'jjjjjjjjjj ', 'kkkkkkkkkkkk ', 'ervina', 'ggggggggggggggggggg', ''),
(10, '2017-10-11', 'gfxyxgxhch ', ' ', 'ervina', 'bu wiwik', ''),
(11, '2017-10-11', ' bu wiwik', ' ', 'ervina', 'Bu wiwik', ''),
(12, '2017-10-07', ' ', ' ', 'ervina', 'gg', ''),
(13, '2017-10-27', ' ', ' ', 'ervina', 'ddd', ''),
(14, '2017-10-17', 'aegeaga ', ' ', 'ervina', 'Bu wiwik', ''),
(15, '02/11/1997', 'topik hangat', 'laporan KP mingguan ini', 'ervina', 'Bu wiwik', ''),
(16, '2017-10-06', ' ', ' ', 'ervina', 'hh', ''),
(17, '02/11/1997', 'topik hangat', 'laporan KP mingguan ini', 'ervina', 'Bu wiwik', ''),
(18, '02/11/1997', 'topik hangat', 'laporan KP mingguan ini', 'ervina', 'Bu wiwik', ''),
(19, '02/11/1997', 'topik hangat', 'laporan KP mingguan ini', 'ervina', 'Bu wiwik', ''),
(20, '02/11/1997', 'topik hangat', 'laporan KP mingguan ini', 'ervina', 'Bu wiwik', ''),
(21, '2017-10-23', ' jjj', 'l \r\n', 'ervina', '', ''),
(22, '10/21/2017', 'topik hangat', 'laporan KP mingguan ini', 'ervina', '', ''),
(23, '', 'topik hangat', 'laporan KP mingguan ini', 'ervina', '', ''),
(24, '10/21/2017', '', 'laporan KP mingguan ini', 'ervina', '', ''),
(25, '10/21/2017', 'topik 1', '', 'ervina', '', ''),
(26, '10/21/2017', 'topik 1', 'belum ada aktivitas', 'ervina', '', ''),
(27, '10/21/2017', 'topik 1', 'belum ada aktivitas', '', '', ''),
(28, '', '', '', '', '', ''),
(29, '2017-10-23', 'hari 1 ', ' hari', 'ervina', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', 'admin', 'admin'),
('dosen', 'dosen', 'dosen'),
('ervina', 'ervina', 'user'),
('hatma', 'hatma', 'dosen'),
('user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_lap`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_lap` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
