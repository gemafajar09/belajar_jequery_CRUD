-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2021 pada 09.11
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_jquery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Jupel Hiara Kun', 'gemafajar09', 'fajar123'),
(2, 'gema', 'sahrul', '123456'),
(3, 'sahrul', 'sahrul', '12345'),
(4, 'sahrul', 'sahrul', '12345'),
(5, 'faisal', 'asdasd', 'asdasd'),
(6, 'isil', 'isil', 'isil'),
(7, 'isil', 'isil', 'isil'),
(8, 'Repellendus Ut nisi', 'fysapaz', 'Nostrum omnis in sin'),
(9, 'Repellendus Ut nisi', 'fysapaz', 'Nostrum omnis in sin'),
(10, 'Facere eu in modi no', 'mybytutici', 'Sit libero sunt ve'),
(11, 'Vero omnis quidem at', 'zydevamive', 'Incidunt magnam ess'),
(12, 'Eveniet nihil rem t', 'fyrypon', 'Adipisicing doloremq'),
(13, 'Laboriosam expedita', 'tibevi', 'Minus et dolore qui '),
(14, 'Praesentium laboris ', 'qaxyweva', 'Eius omnis vero sed '),
(15, 'Sapiente officia ips', 'funigedu', 'Cupidatat culpa con');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
