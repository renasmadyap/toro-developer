-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2022 pada 18.25
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_tdu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `lat` decimal(10,6) NOT NULL,
  `long` decimal(10,6) NOT NULL,
  `customer_type_id` int(11) NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `keterangan` varchar(2555) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `lat`, `long`, `customer_type_id`, `tanggal_lahir`, `keterangan`, `status`) VALUES
(2, 'renas', 'demak', '-7.000000', '113.000000', 1, '1999-10-10 00:00:00', 'keterangan', 1),
(3, 'Renas', 'R', '-7.275973', '112.808304', 1, '2022-03-04 00:00:00', 'R', 1),
(4, 'Renas', 'R', '-7.275973', '112.808304', 1, '2022-03-03 00:00:00', 'sa', 0),
(7, 'Renas', '', '0.000000', '0.000000', 0, '0000-00-00 00:00:00', '', 1),
(8, 'Renas', '', '0.000000', '0.000000', 0, '0000-00-00 00:00:00', '', 0),
(9, 'Renas', '', '0.000000', '0.000000', 0, '0000-00-00 00:00:00', '', 0),
(10, 'Renas', 'R', '-7.275973', '112.808304', 2, '2022-03-04 00:00:00', 'R', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_type`
--

CREATE TABLE `customer_type` (
  `id_customer_type` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer_type`
--

INSERT INTO `customer_type` (`id_customer_type`, `nama`, `alamat`) VALUES
(1, 'magang', 'tunjungan'),
(2, 'part time', 'lidah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('gudang','admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin', 'admin@admin.com', '025123456789', 'admin', '$2y$10$wMgi9s3FEDEPEU6dEmbp8eAAEBUXIXUy3np3ND2Oih.MOY.q/Kpoy', 1568689561, 'd5f22535b639d55be7d099a7315e1f7f.png', 1),
(7, 'Arfan ID', 'arfandotid', 'arfandotid@gmail.com', '081221528805', 'gudang', '$2y$10$5es8WhFQj8xCmrhDtH86Fu71j97og9f8aR4T22soa7716kAusmaeK', 1568691611, 'user.png', 1),
(8, 'Muhammad Ghifari Arfananda', 'mghifariarfan', 'mghifariarfan@gmail.com', '085697442673', 'gudang', '$2y$10$5SGUIbRyEXH7JslhtEegEOpp6cvxtK6X.qdiQ1eZR7nd0RZjjx3qe', 1568691629, 'user.png', 1),
(13, 'Arfan Kashilukato', 'arfankashilukato', 'arfankashilukato@gmail.com', '081623123181', 'gudang', '$2y$10$/QpTunAD9alBV5NSRJ7ytupS2ibUrbmS3ia3u5B26H6f3mCjOD92W', 1569192547, 'user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `customer_type`
--
ALTER TABLE `customer_type`
  ADD PRIMARY KEY (`id_customer_type`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `customer_type`
--
ALTER TABLE `customer_type`
  MODIFY `id_customer_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
