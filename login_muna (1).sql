-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2022 pada 04.34
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_muna3nov`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_muna`
--

CREATE TABLE `login_muna` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` int(100) NOT NULL,
  `umur` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_muna`
--

INSERT INTO `login_muna` (`id`, `email`, `nama_lengkap`, `username`, `password`, `umur`) VALUES
(9, 'sifamuna@gmail.com', 'sifamuna', 'sifa', 1111, 16);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login_muna`
--
ALTER TABLE `login_muna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login_muna`
--
ALTER TABLE `login_muna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
