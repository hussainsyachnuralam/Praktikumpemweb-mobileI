-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2021 pada 14.43
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grafik_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `fakultas`) VALUES
(1, 'Hussain Syach Nuralam', '193020503029', 'L', 'Teknik'),
(2, 'Anastasia Astri Yesa Putri', '193010212015', 'P', 'Keguruan'),
(3, 'Aditya Ananda Ramadhani', '193030503072', 'L', 'Teknik'),
(4, 'Axel Berkati', '193010503007', 'L', 'Teknik'),
(5, 'Rega Indra Buana', '193030501083', 'L', 'Teknik'),
(6, 'Erlan Sebastian Usin', '193030503074', 'L', 'Teknik'),
(7, 'Wiwin Oktavia', '193010406003', 'p', 'Pertanian'),
(8, 'Brian Agustian Kristianto', '193030503066', 'L', 'Teknik'),
(9, 'Legita Veronika', '193030303130', 'p', 'Ekonomi'),
(10, 'Tirsa Erisca Emeylia', '193030303229', 'p', 'Ekonomi'),
(11, 'Muhamad Ihza', '193030203110', 'L', 'Fisip'),
(12, 'Jonathan Oktavianus', '193030203322', 'L', 'Fisip');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
