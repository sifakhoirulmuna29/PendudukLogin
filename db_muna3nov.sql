-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2022 pada 02.19
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
  `username` varchar(11) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_muna`
--

INSERT INTO `login_muna` (`id`, `username`, `password`) VALUES
(1, 'aini', 2222),
(2, 'muna', 5555);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_muna3nov`
--

CREATE TABLE `tb_muna3nov` (
  `id` int(10) NOT NULL,
  `NIK` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `agama` enum('islam','kristen','katolik','budha','hindu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_muna3nov`
--

INSERT INTO `tb_muna3nov` (`id`, `NIK`, `nama`, `agama`) VALUES
(2, 2345, 'putri', 'kristen'),
(5, 4356, 'intan', 'islam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login_muna`
--
ALTER TABLE `login_muna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_muna3nov`
--
ALTER TABLE `tb_muna3nov`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login_muna`
--
ALTER TABLE `login_muna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_muna3nov`
--
ALTER TABLE `tb_muna3nov`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
